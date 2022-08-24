<?php


?>
<?php get_template_part('styling_parts/header'); ?>

<?php get_template_part('styling_parts/leftmenu'); ?>


	<div class="contents_area">
		<div class="style_title">
			<h2>MODEL: <span><?php echo  single_term_title();?></span></h2>
		</div>
		<div class="archive_area">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php
				// 
				$items = SCF::get('item_detail');
				$postid = get_the_ID();
				$tarms = get_the_terms($postid, 'styling_model');
				$tags = get_the_terms($postid, 'styling_tag');
				$tarmid = $tarms[0]->term_id;
				$model = SCF::get_term_meta($tarmid, 'styling_model');
				$image_directory = SCF::get('image_directory');
				$img_link = 'https://osmosis.itembox.design/item/img/' . $image_directory . '/1.jpg';
			?>
			<?php if ($wp_query->current_post % 4 == 0) :?>
				<div class="styling_card tO style1">
				<?php elseif ($wp_query->current_post % 4 == 1) :?>
				<div class="styling_card tO style2">
				<?php elseif ($wp_query->current_post % 4 == 2) :?>
				<div class="styling_card tO style3">
				<?php else: ?>
				<div class="styling_card tO style4">
			<?php endif ?>
				<a href="<?php the_permalink(); ?>">
						
					<?php if (has_post_thumbnail()) : ?>
						<span><img src="<?php the_post_thumbnail_url('large'); ?>"></span>
					<?php else: ?>
						<span><img src="<?php echo $img_link?>"></span>
					<?php endif; ?>
				</a>
				<?php if ($tags) : ?>
				<div class="style_tags">
				<?php
					foreach( $tags as $tag) { 
					echo '<p><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a></p>';
					}
					?>

				</div>
				<?php endif; ?>
			</div>
			<?php endwhile; endif; ?>

		</div>
	</div>



<?php get_template_part('styling_parts/footer'); ?>
<?php

/**
 * The template for displaying all single posts
 */
$items = SCF::get('item_detail');
$image_directory = SCF::get('image_directory');
$style_images = SCF::get('style_images');
$item_html = SCF::get('item_html');

$postid = get_the_ID();
$tarms = get_the_terms($postid, 'styling_model');
$tarmid = $tarms[0]->term_id;
$model = SCF::get_term_meta($tarmid, 'styling_model');
$tags = get_the_terms($postid, 'styling_tag');

?>
<?php get_template_part('styling_parts/header'); ?>


<div class="contents_area styling_detail_page">
	<div class="style_area">
		<div class="image_area">
			<div class="image_box width_<?php echo $style_images?>">
			<?php
			if (empty($style_images)) {
				echo '画像がありません。';
			} elseif ($style_images > 0) {
				for ($i = 1; $i <= $style_images; $i++) {
					echo '<div class="tO"><img src="https://osmosis.itembox.design/item/img/' . $image_directory . '/' . $i . '.jpg"></div>' . "\n";
				}
			}
			?>
			</div>
		</div>
		<div class="item_area">
			<div class="pankz">
				<p><a href="/styling">STYLING TOP</a></p>
				<p><a href="<?php echo get_tag_link($tarmid) ?>"><?php echo $tarms[0]->name?></a></p>
				<p><?php echo the_title()?></p>
			</div>
			<h2><?php echo the_title()?></h2>
			<?php if ($tags) : ?>
				<div class="style_tags">
				<?php
					foreach( $tags as $tag) { 
					echo '<p><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name . '</a></p>';
					}
					?>

				</div>
				<?php endif; ?>
			<div class="item_credit">
				<?php if ($items[0]["item_code"] != null) : ?>
				<?php foreach ($items as $item) { ?>
					<p><?php echo $item['item_code']; ?></p>
				<?php } ?>
				<?php endif; ?>
				<?php if ($item_html) : ?>
					<?php echo $item_html; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="other_area">
		<h2>OTHER STYLING</h2>
			<?php
				$other_styles = new WP_Query(
					array(
						'post__not_in' => array($post->ID),
						'post_type' => 'styling',
						'posts_per_page' => 5,
						'tax_query' => array(
							array(
								'taxonomy' => 'styling_model',
								'terms' => array($tarmid),
							),
						),
					)
				);?>
			<div class="other_box other<?php echo $other_styles->current_post?>">
			<?php if ( $other_styles->have_posts() ) :?>
				<div>
					<?php while ( $other_styles->have_posts() ) : $other_styles->the_post();
					$otherstyle_image = SCF::get('image_directory');
					$otherimg_link = 'https://osmosis.itembox.design/item/img/' . $otherstyle_image . '/1.jpg';
					?>
						<a href="<?php the_permalink(); ?>">
							<?php if (has_post_thumbnail()) : ?>
								<span><img src="<?php the_post_thumbnail_url('large'); ?>"></span>
							<?php else: ?>
								<span><img src="<?php echo $otherimg_link?>"></span>
							<?php endif; ?>
						</a>
					<?php endwhile; ?>
				</div>
			<?php endif; wp_reset_postdata(); ?>
		</div>
	</div>
</div>



<?php get_template_part('styling_parts/footer'); ?>
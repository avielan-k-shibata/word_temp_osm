<?php
$queried_object = get_queried_object();
$term_id = get_queried_object_id();
$now_page = get_query_var( 'paged' ); 
if($now_page == 0){
	$offset = 0;
}else{
	$offset = ( $now_page - 1 ) * 30;
}

$list_styles = new WP_Query(
	array(
		'post_type' => 'styling',
		'orderby' => 'meta_value_num',
		'meta_key' => 'priority_num',
		// 'order' => 'DESC', // 順序順で表示
		// 'posts_per_page' => 20,
		'tax_query' => array(
			array(
				'taxonomy' => $queried_object->taxonomy,
				'terms' => $term_id,
			),
		),
		'offset' => $offset
		)
	);
?>
<?php get_template_part('styling_parts/header'); ?>

<?php get_template_part('styling_parts/leftmenu'); ?>


	<div class="contents_area">
		<div class="style_title">
			<?php if($queried_object->taxonomy == "styling_items") :?>
			<h2>商品: <span><?php echo  single_term_title();?></span></h2>
			<?php elseif ($queried_object->taxonomy == "styling_season") :?>
			<h2>SEASON <span><?php echo  single_term_title();?></span></h2>
			<?php elseif ($queried_object->taxonomy == "styling_model") :?>
				<?php if($queried_object->parent) :
					$term = get_term($queried_object->parent);
				?>
				<h2><?php echo $term->name;?> <span><?php echo  single_term_title();?></span></h2>
				<?php else :?>
				<h2><span><?php echo  single_term_title();?></span></h2>

				<?php endif ?>
			<?php elseif ($queried_object->taxonomy == "styling_tag") :?>
			<h2># <span><?php echo  single_term_title();?></span></h2>
			<?php endif ?>
		</div>
		<div class="archive_area">
			<?php if ($list_styles->have_posts()) : while ($list_styles->have_posts()) : $list_styles->the_post(); ?>
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
				//画像名判別
				$parent_tarm = [];
				$img_name ="";
				if($tarms[0]->parent != null){
					$parent_tarm = get_term($tarms[0]->parent);
					if($parent_tarm->name != "STYLE BOOK"){
						$img_link = 'https://osmosis.itembox.design/item/img/' . $image_directory . '/01.jpg';
					}
				}
			?>
			<?php if ($list_styles->current_post % 4 == 0) :?>
				<div class="styling_card tO style1">
				<?php elseif ($list_styles->current_post % 4 == 1) :?>
				<div class="styling_card tO style2">
				<?php elseif ($list_styles->current_post % 4 == 2) :?>
				<div class="styling_card tO style3">
				<?php else: ?>
				<div class="styling_card tO style4">
			<?php endif ?>
				<a href="<?php the_permalink(); ?>">
						
					<?php if (has_post_thumbnail()) : ?>
						<span><img class="inviewImg" src="https://osmosis.itembox.design/item/img/recommend/dm.png" data-="<?php the_post_thumbnail_url('large'); ?>"></span>
					<?php else: ?>
						<span><img class="inviewImg" src="https://osmosis.itembox.design/item/img/recommend/dm.png" data-src="<?php echo $img_link?>"></span>
					<?php endif; ?>
				</a>
				<?php if ($tags) : ?>
				<div class="style_tags">
				<?php
					$i = 0;
					shuffle($tags);
					foreach( $tags as $tag) {
						// echo $tag;
						if($i < 2){
							echo '<p><a href="'. get_tag_link($tag->term_id) .'">' . $tag->name .'</a></p>';
						}
						$i++;
					}
					?>

				</div>
				<?php endif; ?>
			</div>
			<?php endwhile; endif; ?>
			<?php  wp_reset_postdata(); ?>
		</div>



		
		<div class="pagenation">
			<div class="nav-links">
			<?php
			$big = 999999999;
				echo paginate_links(array(
					'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
					'show_all' => false,
					'type' => 'list',
					'format' => '?paged=%#%',
					'current' => max(1, get_query_var('paged')),
					'total' => $list_styles->max_num_pages,
					'prev_text' => '前へ',
					'next_text' => '次へ',
				));
			?>

			</div>
		</div>
	</div>



<?php get_template_part('styling_parts/footer'); ?>
<?php

/**
 * The template for displaying all single posts
 */
$items = SCF::get('item_detail');
$image_directory = SCF::get('image_directory');
$style_images = SCF::get('style_images');
$item_html = SCF::get('item_html2');

$postid = get_the_ID();
$tarms = get_the_terms($postid, 'styling_model');
$tarmid = $tarms[0]->term_id;
$model = SCF::get_term_meta($tarmid, 'styling_model');
$tags = get_the_terms($postid, 'styling_tag');
$parent_tarm = [];
//画像名判別
$img_name ="";
if($tarms[0]->parent != null){
	$parent_tarm = get_term($tarms[0]->parent);
	if($parent_tarm->name != "STYLE BOOK"){
		$img_name ="0";
	}
}

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
					if($i < 10){
						echo '<div class="tO"><img src="https://osmosis.itembox.design/item/img/' . $image_directory . '/' .$img_name. $i . '.jpg"></div>' . "\n";
					}else{
						echo '<div class="tO"><img src="https://osmosis.itembox.design/item/img/' . $image_directory . '/' . $i . '.jpg"></div>' . "\n";
					}
				}
			}
			?>
			</div>
		</div>
		<div class="item_area">
			<div class="pankz">
				<p><a href="<?php echo esc_url(home_url()); ?>/index.php/styling/">STYLING TOP</a></p>
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

	<?php
		$other_tarms = get_the_terms($postid, 'styling_items');
		$other_tmid = [];
		if($other_tarms){
			foreach($other_tarms as $tm){
				//納期を除外
				$not = substr($tm->slug, 0, 1);
				if($not != "e" && $not != "l"){
					$other_tmid[] = $tm->term_id;
				}
			}
		}
		$other_styles = new WP_Query(
			array(
				'post__not_in' => array($post->ID),
				'post_type' => 'styling',
				'posts_per_page' => 5,
				'tax_query' => array(
					array(
						'taxonomy' => 'styling_items',
						'terms' => $other_tmid,
					),
				),
			)
		);?>
	<?php if ( $other_styles->have_posts() ) :?>

	<h2 class="other_title">OTHER STYLING <span>-同じアイテムを使ったスタイル-</span></h2>
	<div class="other_area">

			<div class="other_box other_<?php echo $other_styles->post_count?>">
				<?php while ( $other_styles->have_posts() ) : $other_styles->the_post();
					$otherstyle_image = SCF::get('image_directory');
					$other_id = get_the_ID();
					$other_tarms = get_the_terms($other_id, 'styling_model');
					$otherimg_link = 'https://osmosis.itembox.design/item/img/' . $otherstyle_image . '/1.jpg';
					if($other_tarms[0]->parent != null){
						$other_parent_tarm = get_term($other_tarms[0]->parent);
						if($other_parent_tarm->name != "STYLE BOOK"){
							$otherimg_link = 'https://osmosis.itembox.design/item/img/' . $otherstyle_image . '/01.jpg';
						}
					}
					?>
					<div>
						<a href="<?php the_permalink(); ?>">
							<?php if (has_post_thumbnail()) : ?>
								<span><img src="<?php the_post_thumbnail_url('large'); ?>"></span>
							<?php else: ?>
								<span><img src="<?php echo $otherimg_link?>"></span>
							<?php endif; ?>
						</a>
					</div>
				<?php endwhile; ?>
			</div>
	</div>

	<?php endif; wp_reset_postdata(); ?>
</div>



<?php get_template_part('styling_parts/footer'); ?>
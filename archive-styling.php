<?php

/**
 * The template for displaying all single posts
 */

?>
<?php get_template_part('styling_parts/header'); ?>

<?php get_template_part('styling_parts/leftmenu'); ?>


	<div class="contents_area">
		<div class="style_title">
			<h2>RECOMMEND STYLE</h2>
		</div>
		<div class="top_style_tags">
			<a href="/shopcoordinate/index.php/styling_tag/blouse/">ブラウス　シャツ</a>
			<a href="/shopcoordinate/index.php/styling_tag/knit/">ニット</a>
			<a href="/shopcoordinate/index.php/styling_tag/onepiece/">ワンピース</a>

			<a href="/shopcoordinate/index.php/styling_tag/black/">BLACK</a>
			<a href="/shopcoordinate/index.php/styling_tag/mix/">MIX<span class="mix"></span></a>
			<a href="/shopcoordinate/index.php/styling_items/late_september/">09月下旬入荷</a>
			<a href="/shopcoordinate/index.php/styling_items/early_september/">09月上旬入荷</a>

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

		</div>
		<div class="pagenation">
			<?php the_posts_pagination(
			array(
				'mid_size'      => 1, // 現在ページの左右に表示するページ番号の数
				'prev_next'     => true, // 「前へ」「次へ」のリンクを表示する場合はtrue
				'prev_text'     => __( '前へ'), // 「前へ」リンクのテキスト
				'next_text'     => __( '次へ'), // 「次へ」リンクのテキスト
				'type'          => 'list', // 戻り値の指定 (plain/list)
			)
		); ?>

		</div>
	</div>


<?php get_template_part('styling_parts/footer'); ?>
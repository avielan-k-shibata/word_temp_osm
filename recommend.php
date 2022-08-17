<?php

 /*
 Template Name: recommend
 Template Post Type: recommend, news
 */

?><?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

		<link rel="stylesheet" type="text/css" href="https://osmosis.itembox.design/item/css/slick.css" />
		<link rel="stylesheet" type="text/css" href="https://osmosis.itembox.design/item/css/coordinate.css" />
		<link rel="stylesheet" type="text/css" href="https://osmosis.itembox.design/item/css/recommend.css" />
		<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php
				$slider_id = SCF::get('stylebook_season');
				$iteminfo = SCF::get('stulebook_no');
				$imgmax = SCF::get('stylebook_img');
				$stylebook_item = SCF::get('stylebook_item');
				?>
				<div class="contents_coordinate">
					<div class="recommend_pankz">
						<p><a href="/">TOP</a></p>
						<p><a href="/f/recommend">RECOMMEND TOP</a></p>
						<p><?php the_title(); ?></p>
					</div>
				<div class="recommend_slides">
				<?php
				if (empty($imgmax)){
				    echo '画像がありません。';
				}
				elseif ($imgmax > 0) {
				    for ($i = 1; $i <= $imgmax ; $i++) {
				   echo '<div><img src="https://osmosis.itembox.design/item/img/recommend/'.$slider_id.'/'.$iteminfo.'/'.$i.'.jpg"></div>'."\n";
				}
				}
				?>
				</div>

				<div class="item_name">
					<p class="title"><span><?php the_title(); ?></span></p>

						<?php
						echo $stylebook_item ;
						?>
				</div>

				</div>
			<?php endwhile; ?>
		</div><!-- #content -->

		<script>
		    $('.recommend_slides').slick({
		        centerMode:true,
		        centerPadding: '10%',
				variableWidth: true,
		        dots: false,
		        arrows: true,
		        autoplay: true,
		         autoplaySpeed: 3500,
		        speed: 300,
		        customPaging: function(slider, i) {
		            return '<button class="thumbnail">' + $(slider.$slides[i]).find('img').prop('outerHTML') + '</button>';
		        },
		          responsive: [
		    {
		      breakpoint: 768,
		      settings: {
		        slidesToShow: 1,
		        centerPadding: '5%',
		        dots: true,
		      }
		    }, ]
		    });
		</script>

	<?php get_template_part( 'content', 'footer' ); ?>
	<?php comments_template(); ?>

<?php get_footer(); ?>

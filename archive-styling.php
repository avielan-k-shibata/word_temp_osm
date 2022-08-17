<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

		<link rel="stylesheet" type="text/css" href="https://osmosis.itembox.design/item/css/slick.css" />
		<link rel="stylesheet" type="text/css" href="https://osmosis.itembox.design/item/css/coordinate.css" />
		<link rel="stylesheet" type="text/css" href="https://osmosis.itembox.design/item/css/recommend.css" />
		<div id="content" class="site-content" role="main">
			321333
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

<?php
/**
 * The template for displaying Search Results pages
 *
 */

get_header(); ?>
	<div class="shopcoordinate-category">
		<ul>
			<li class="title"><p>SHOP COORDINATE</p></li>
			<li><p><a href="/shopcoordinate/">COORDINATE TOP</a></p></li>
			<li><p><a href="/shopcoordinate/index.php/category/height/155under/">155cm UNDER</a></p></li>
			<li><p><a href="/shopcoordinate/index.php/category/height/160-155/">160cm - 156cm</a></p></li>
			<li><p><a href="/shopcoordinate/index.php/category/height/161over/">161cm OVER</a></p></li>
			
			<li><p><a href="/shopcoordinate/index.php/category/shop/sapporopivot/">札幌PIVOT</a></p></li>
			<li><p><a href="/shopcoordinate/index.php/category/shop/sendai/">仙台FORUS</a></p></li>
			<li><p><a href="/shopcoordinate/index.php/category/shop/kanazawa/">金沢FORUS</a></p></li>
			<li><p><a href="/shopcoordinate/index.php/category/shop/tachikawa/">LUMINE 立川</a></p></li>
			<li><p><a href="/shopcoordinate/index.php/category/shop/oosaka/">天王寺MIO</a></p></li>
			<li><p><a href="/shopcoordinate/index.php/category/shop/ooita/">アミュプラザおおいた</a></p></li>
			<li><p><a href="/shopcoordinate/index.php/category/shop/kumamoto/">熊本PARCO</a></p></li>
			<li><p><a href="/shopcoordinate/index.php/category/shop/kagoshima/">AMU PLAZA鹿児島</a></p></li>
		</ul>
	</div>
	<div id="primary" class="content-area">
		<div id="content" class="site-content archive" role="main">
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'portfolio' ), get_search_query() ); ?></h1>
				</header>
	
				<article id="gk-search">
					<div>
						<?php get_search_form(); ?>
					</div>
				</article>
	
				<?php /* The loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content-archive', get_post_format() ); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part( 'content', 'none' ); ?>
			<?php endif; ?>
		</div><!-- #content -->
		
		<?php portfolio_paging_nav(); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>
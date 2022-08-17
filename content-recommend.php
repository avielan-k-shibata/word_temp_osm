<?php
/**
 * The default template for displaying content
 * Used for both single and index/archive/search.
 *
 */
?>
	
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="bgf">
	<div class="w-50">
		<?php get_template_part('content', 'header'); ?>
		
		
	</div>
	<div class="w-50 coordinate-info">
<?php if(get_theme_mod('portfolio_post_show_title', '1') == '1') : ?>
	<h<?php echo is_single() ? '1' : '2'; ?> class="entry-title2">
		<?php if(!is_singular()) : ?>
		<a href="<?php the_permalink(); ?>" rel="bookmark">
		<?php endif; ?>
			<?php the_title(); ?>
		<?php if(!is_singular()) : ?>
		</a>
		<?php endif; ?>
	</h<?php echo is_single() ? '1' : '2'; ?>>
	<?php endif; ?>
		<?php get_template_part('content', 'meta'); ?>
		<?php if (is_home() || is_search() || is_archive() || is_tag()) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
			<a href="<?php echo get_permalink(get_the_ID()); ?>" class="readon"><?php _e('Read more', 'portfolio'); ?></a>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content(__('Read more', 'portfolio')); ?>
			
			
			<ul class="coordinateitem">
				<li class="modelinfo">
					<p class="modelname"><?php the_field('model-name'); ?>
						<span class="modelheight">H: <?php the_field('model-height'); ?> cm</span></p>
				</li>
				<li>
				<a href="/fs/osmosis/<?php the_field('itemcode'); ?>">
					<?php if( get_field('itemimg') ): ?>
					<img src="<?php the_field('itemimg'); ?>" />
					<?php endif; ?>
					<span class="itemname"><?php the_field('itemname'); ?></span>
				</a>
				</li>
				<li>
				<a href="/fs/osmosis/<?php the_field('itemcode2'); ?>">
					<?php if( get_field('itemimg2') ): ?>
					<img src="<?php the_field('itemimg2'); ?>" />
					<?php endif; ?>
					<span class="itemname"><?php the_field('itemname2'); ?></span>
				</a>
				</li>
				<li>
				<a href="/fs/osmosis/<?php the_field('itemcode3'); ?>">
					<?php if( get_field('itemimg3') ): ?>
					<img src="<?php the_field('itemimg3'); ?>" />
					<?php endif; ?>
					<span class="itemname"><?php the_field('itemname3'); ?></span>
				</a>
				</li>
				<li>
				<a href="/fs/osmosis/<?php the_field('itemcode4'); ?>">
					<?php if( get_field('itemimg4') ): ?>
					<img src="<?php the_field('itemimg4'); ?>" />
					<?php endif; ?>
					<span class="itemname"><?php the_field('itemname4'); ?></span>
				</a>
				</li>
				<li>
				<a href="/fs/osmosis/<?php the_field('itemcode5'); ?>">
					<?php if( get_field('itemimg5') ): ?>
					<img src="<?php the_field('itemimg5'); ?>" />
					<?php endif; ?>
					<span class="itemname"><?php the_field('itemname5'); ?></span>
				</a>
				</li>
				<li>
				<a href="/fs/osmosis/<?php the_field('itemcode6'); ?>">
					<?php if( get_field('itemimg6') ): ?>
					<img src="<?php the_field('itemimg6'); ?>" />
					<?php endif; ?>
					<span class="itemname"><?php the_field('itemname6'); ?></span>
				</a>
				</li>
				<li class="space"><p>他、私物</p></li>
			</ul>
			
			<?php echo portfolio_social_button(); ?>
			
			<?php wp_link_pages(array('before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'portfolio') . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>')); ?>
			
			<?php
				if(get_theme_mod('portfolio_post_show_tags', '1') == '1') {
					$tag_list = get_the_tag_list('<ul class="tags-links"><li>',', </li><li>','</li></ul>');
					if ($tag_list) {
						echo $tag_list;
					}
				}
			?>
		</div><!-- .entry-content -->
		<?php endif; ?>
	</div>
</div>
</article><!-- #post -->

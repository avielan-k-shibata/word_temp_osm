<?php

/**
 * The template for displaying all single posts
 */
$items = SCF::get('item_detail');
$postid = get_the_ID();
$tarms = get_the_terms(  $postid ,'styling-model' );
$tarmid = $tarms[0] -> term_id;
$model = SCF::get_term_meta( $tarmid, 'styling-model' );

?>
<?php get_template_part('styling_parts/header'); ?>

<?php get_template_part('styling_parts/leftmenu'); ?>


<div class="contents_area">
<?php foreach ($items as $item ) { ?>
	<p><?php echo $item['item_code']; ?></p>
	<?php } ?>
	<p><?php var_dump($model, $tarms) ?></p>
	
</div><!-- #primary -->



<?php get_template_part('styling_parts/footer'); ?>
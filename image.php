<?php
/**
 * The template for displaying image attachments
 *
 */

get_header(); ?>
<div class="leftmenu2018 pc">
		<ul>
			<li class="leftmenu2018-space"></li>
			<li>
				<p>SHOP COORDINATE</p>
<a href="/shopcoordinate/">COORDINATE TOP</a>
<a href="/shopcoordinate/index.php/category/height/155under/">155cm UNDER</a>
<a href="/shopcoordinate/index.php/category/height/165-155/">156cm - 165cm</a>
<a href="/shopcoordinate/index.php/category/height/165over/">166cm OVER</a>
			</li>

			<li>
				<p>カテゴリーでさがす</p>
				<a href="/fs/osmosis/c/newarrival">入荷アイテム</a>
				<a href="/fs/osmosis/c/preorder">予約アイテム</a>
				<a href="/fs/osmosis/c/wayitem">2WAY ITEM</a>
				<a href="/fs/osmosis/c/allitem">全商品</a>
				<a href="/fs/osmosis/c/cut1">Tシャツ・カットソー</a>
				<a href="/fs/osmosis/c/blouse1">ブラウス</a>
				<a href="/fs/osmosis/c/onepiece1">ワンピース</a>
				<a href="/fs/osmosis/c/knit1">ニット</a>
				<a href="/fs/osmosis/c/pants1">パンツ</a>
				<a href="/fs/osmosis/c/skirt1">スカート</a>
				<a href="/fs/osmosis/c/outer1">アウター</a>
				<a href="/fs/osmosis/c/shoes1">シューズ</a>
				<a href="/fs/osmosis/c/zakka1">ファッション雑貨</a>
				<a href="/fs/osmosis/c/acseso1">アクセサリー</a>

			</li>
			<li>
				<p>価格でさがす</p>
<a href="/fs/osmosis/c/under3000">～￥3,000</a>
<a href="/fs/osmosis/c/under5000">￥3,000～￥5,000</a>
<a href="/fs/osmosis/c/under7000">￥5,000～￥7,000</a>
<a href="/fs/osmosis/c/under9000">￥7,000～￥9,000</a>
<a href="/fs/osmosis/c/over9000">￥9,000～</a>
<a href="/fs/osmosis/c/sale1">OUTRET</a>
			</li>
			<li class="color-search">
			<p>色でさがす</p>
			<a class="color-icon" href="/fs/osmosis/c/white1"><span class="wht-icon"></span><i>ホワイト系</i></a>
			<a class="color-icon" href="/fs/osmosis/c/black1"><span class="blk-icon"></span><i>ブラック系</i></a>
			<a class="color-icon" href="/fs/osmosis/c/gray1"><span class="gry-icon"></span><i>グレー系</i></a>
			<a class="color-icon" href="/fs/osmosis/c/brown1"><span class="blw-icon"></span><i>ブラウン系</i></a>
			<a class="color-icon" href="/fs/osmosis/c/beige1"><span class="beg-icon"></span><i>ベージュ系</i></a>
			<a class="color-icon" href="/fs/osmosis/c/green1"><span class="grn-icon"></span><i>グリーン系</i></a>
			<a class="color-icon" href="/fs/osmosis/c/blue1"><span class="blu-icon"></span><i>ブルー系</i></a>
			<a class="color-icon" href="/fs/osmosis/c/yellow1"><span class="yel-icon"></span><i>イエロー系</i></a>
			<a class="color-icon" href="/fs/osmosis/c/pinkpurple1"><span class="pnk-icon"></span><i class="long">ピンク/パープル系</i></a>
			<a class="color-icon" href="/fs/osmosis/c/redorange1"><span class="red-icon"></span><i class="long">レッド/オレンジ系</i></a>
			<a class="color-icon" href="/fs/osmosis/c/silver1"><span class="slb-icon"></span><i>シルバー系</i></a>
			<a class="color-icon" href="/fs/osmosis/c/gold1"><span class="gld-icon"></span><i>ゴールド系</i></a>
			<a class="color-icon" href="/fs/osmosis/c/borderstripe1"><span class="other1-icon"></span><i class="long">ボーダー/ストライプ系</i></a>
			<a class="color-icon" href="/fs/osmosis/c/other"><span class="other2-icon"></span><i>その他</i></a>
		</li>
		<li>
				<p>INFORMATION</p>
<a href="/contents/coordinate">コーディネート</a>
<a href="/fs/osmosis/c/ranking">ランキング</a>
<a href="/fs/osmosis/c/contact">お問い合わせ</a>
<a href="/contents/shoplist/">SHOP LIST1</a>
			</li>
		</ul>
		
	</div>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<article id="post-<?php the_ID(); ?>" <?php post_class( 'image-attachment' ); ?>>
				<div>
					
					<?php get_template_part( 'content', 'header'); ?>
	
					<div class="entry-content">
						<div class="entry-attachment">
							<div class="attachment">
								<?php portfolio_the_attached_image(); ?>
	
								<?php if ( has_excerpt() ) : ?>
								<div class="entry-caption">
									<?php the_excerpt(); ?>
								</div>
								<?php endif; ?>
							</div><!-- .attachment -->
						</div><!-- .entry-attachment -->
	
						<?php if ( ! empty( $post->post_content ) ) : ?>
						<div class="entry-description">
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'portfolio' ), 'after' => '</div>' ) ); ?>
						</div><!-- .entry-description -->
						<?php endif; ?>
						
						<nav id="image-navigation" class="navigation image-navigation" role="navigation">
							<span class="nav-previous"><?php echo previous_image_link( false, __( '<span class="meta-nav">&larr;</span> Previous Image', 'portfolio' ) ); ?></span>
							<span class="nav-next"><?php echo next_image_link( false, __( 'Next Image <span class="meta-nav">&rarr;</span>', 'portfolio' ) ); ?></span>
							<span class="nav-parent">
								<?php $permalink = get_permalink($post->post_parent); ?>
								<a href="<?php echo $permalink; ?>"><?php _e('&uarr; Return to post', 'portfolio'); ?></a>
							</span>
						</nav><!-- #image-navigation -->
					<?php get_template_part( 'content', 'footer' ); ?>
				</div>
			</article><!-- #post -->

			<?php comments_template(); ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
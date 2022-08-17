<?php
/**
 * The template for displaying all pages
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
<a href="/shopcoordinate/index.php/category/height/160-155/">156cm - 160cm</a>
<a href="/shopcoordinate/index.php/category/height/161over/">161cm OVER</a>
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
<a href="/fs/osmosis/c/sale1">OUTLET</a>
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
	<div id="primary" class="content-area<?php if (!(have_comments() || comments_open())) : ?> no-comments-area<?php endif; ?>">
		<div id="content" class="site-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div>
						<header class="entry-header">
							<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
							<div class="entry-thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
							<?php endif; ?>
	
							<h1 class="entry-title">
								<?php the_title(); ?>
							</h1>
						</header><!-- .entry-header -->
	
						<div class="entry-content">
							<?php the_content(); ?>
							<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'portfolio' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
						</div><!-- .entry-content -->
	
						<footer class="entry-meta">
							<?php edit_post_link( __( 'Edit', 'portfolio' ), '<span class="edit-link">', '</span>' ); ?>
						</footer><!-- .entry-meta -->
					</div>
				</article><!-- #post -->
			<?php endwhile; ?>
		</div><!-- #content -->
	</div><!-- #primary -->
	
	<?php comments_template(); ?>

<?php get_footer(); ?>
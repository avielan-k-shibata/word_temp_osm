<?php

/**
 *
 * The Header template for our theme
 *
 **/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="/company/wp-content/themes/gk-portfolio/css/drawer.css" />
	<link rel="stylesheet" type="text/css" href="/company/wp-content/themes/gk-portfolio/css/omsosis_shopcoordinate2018-.css" />
	<link rel="stylesheet" type="text/css" href="/company/wp-content/themes/gk-portfolio/css/omsosis_shopcoordinate2018pc-.css" />

	<link rel="stylesheet" href="https://c18.future-shop.jp/shop/css/r_system_preset.css" type="text/css" />
	<script src="https://c18.future-shop.jp/shop/js/fs2api.js"></script>
	<script type="text/javascript">
		FS2.repeater({
			ssldomain: 'c18.future-shop.jp',
			shopKey: 'osmosis',
		});
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="/company/wp-content/themes/gk-portfolio/js/slick.min.js"></script>
	<script src="/company/wp-content/themes/gk-portfolio/js/iscroll.js"></script>
	<script src="/company/wp-content/themes/gk-portfolio/js/dropdown.js"></script>
	<script src="/company/wp-content/themes/gk-portfolio/js/drawer.js"></script>
	<script src="https://osmosis.itembox.design/item/js/scroll.js"></script>
	<script>
		$(document).ready(function() {
			$('.drawer').drawer();
		});
	</script>
	<script type="text/javascript">
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-6358653-1', 'auto', {
			'allowLinker': true
		});
		ga('require', 'displayfeatures');
		ga('require', 'linker');
		// Define which domains to autoLink.
		ga('linker:autoLink', ['store.osmosis.co.jp', 'c18.future-shop.jp']);
		ga('send', 'pageview');
	</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<script>
		jQuery(function($) {

			var nav = $('#sp-headermenu'),
				offset = nav.offset();

			$(window).scroll(function() {
				if ($(window).scrollTop() > offset.top - 0) {
					nav.addClass('menufixed3');
				} else {
					nav.removeClass('menufixed3');
				}
			});

		});
	</script>
	<script>
		jQuery(function($) {

			var nav = $('#headermenu'),
				offset = nav.offset();

			$(window).scroll(function() {
				if ($(window).scrollTop() > offset.top - 0) {
					nav.addClass('menufixed4');
				} else {
					nav.removeClass('menufixed4');
				}
			});

		});
	</script>
	<div class="drawer drawer--left">

		<header role="banner">
			<nav class="drawer-nav" role="navigation">


				<ul class="sp-menu2018 drawer-menu">
					<li>
						<div class="account FS2_repeater">
							<span>???????????????$LAST_NAME$$FIRST_NAME$???</span>
							<span class="rank_$MEMBER_STAGE_ORDER_NO$">???????????????$MEMBER_STAGE_NAME$???????????????</span>
							<span class="point_$MEMBER_STAGE_ORDER_NO$">?????????????????? $POINT$ pt</span>
							<span class="coupon_$HAS_COUPON$">
								<a href="http://store.osmosis.co.jp/fs/osmosis/CouponInformation.html">????????????????????????????????????????????????</a></span>
						</div>
					</li>
					<li><a class="help1" href="/fs/osmosis/c/guide">??????????????????</a></li>
					<li><a class="member" href="/fs/osmosis/MyPageTop.html">???????????????</a></li>
					<li><a class="login" href="/fs/osmosis/Login.html">????????????</a></li>
					<li><a class="cart" href="/fs/osmosis/ShoppingCart.html">?????????</a></li>
					<li><a href="/f/contact" class="q">??????????????????</a></li>
					<li>
						<p>INFORMATION</p>
					</li>
					<li><a class="info" href="/f/recruit_information">RECRUIT</a></li>
					<li><a class="coord" href="/contents/coordinate">?????????????????????</a></li>

					<li>
						<p>??????????????????????????????</p>
					</li>
					<li><a href="/fs/osmosis/c/newarrival">??????????????????</a></li>
					<li><a href="/fs/osmosis/c/preorder">??????????????????</a></li>
					<li><a href="/fs/osmosis/c/wayitem">2WAY ITEM</a></li>
					<li><a href="/fs/osmosis/c/allitem">?????????</a></li>
					<li><a href="/fs/osmosis/c/cut1">T???????????????????????????</a></li>
					<li><a href="/fs/osmosis/c/blouse1">????????????</a></li>
					<li><a href="/fs/osmosis/c/onepiece1">???????????????</a></li>
					<li><a href="/fs/osmosis/c/knit1">?????????</a></li>
					<li><a href="/fs/osmosis/c/pants1">?????????</a></li>
					<li><a href="/fs/osmosis/c/skirt1">????????????</a></li>
					<li><a href="/fs/osmosis/c/outer1">????????????</a></li>
					<li><a href="/fs/osmosis/c/shoes1">????????????</a></li>
					<li><a href="/fs/osmosis/c/zakka1">????????????????????????</a></li>
					<li><a href="/fs/osmosis/c/acseso1">??????????????????</a></li>
					<li>
						<p>?????????????????????</p>
					</li>
					<li><a href="/p/search?maxprice=2776">??????3,000</a></li>
					<li><a href="/p/search?minprice=2777&maxprice=4628">???3,000??????5,000</a></li>
					<li><a href="/p/search?minprice=4629&maxprice=6481">???5,000??????7,000</a></li>
					<li><a href="/p/search?minprice=6482&maxprice=8332">???7,000??????9,000</a></li>
					<li><a href="/p/search?minprice=8333">???9,000???</a></li>
					<li><a href="/fs/osmosis/c/sale1">OUTRET</a></li>
					<li>
						<p>??????????????????</p>
					</li>
					<li><a href="/p/search?verticalvariationvalue=WHITE&verticalvariationvalue=IVORY">???????????????</a></li>
					<li><a href="/p/search?verticalvariationvalue=BLACK">???????????????</a></li>
					<li><a href="/p/search?verticalvariationvalue=GRAY&verticalvariationvalue=L.GRAY">????????????</a></li>
					<li><a href="/p/search?verticalvariationvalue=BROWN">???????????????</a></li>
					<li><a href="/p/search?verticalvariationvalue=BEIGE">???????????????</a></li>
					<li><a href="/p/search?verticalvariationvalue=GREEN">???????????????</a></li>
					<li><a href="/p/search?verticalvariationvalue=BLUE">????????????</a></li>
					<li><a href="/p/search?verticalvariationvalue=YELLOW">???????????????</a></li>
					<li><a href="/p/search?verticalvariationvalue=PINK&verticalvariationvalue=PURPLE">?????????/???????????????</a></li>
					<li><a href="/p/search?verticalvariationvalue=RED&verticalvariationvalue=ORANGE&verticalvariationvalue=WINE">?????????/???????????????</a></li>
					<li><a href="/p/search?verticalvariationvalue=SILVER">???????????????</a></li>
					<li><a href="/p/search?verticalvariationvalue=GOLD">???????????????</a></li>
					<li><a href="/fs/osmosis/c/other">?????????</a></li>
					<li>
						<p>SNS</p>
					</li>
					<li><a class="facebook" href="https://www.facebook.com/OSMOSIS.loaf.official" target="_blank">facebook</a></li>
					<li><a class="insta" href="https://www.instagram.com/osmosis_official/" target="_blank">instagram</a></li>
					<li><a class="line" href="https://page.line.me/osmosis_loaf" target="_blank">line</a></li>

					<li>
						<p>INFORMATION</p>
					</li>
					<li><a href="/contents/shoplist/">SHOP LIST</a></li>
					<li><a href="/fs/osmosis/PrivacyPolicy.html">????????????????????????</a></li>
					<li><a href="/fs/osmosis/c/userpolicy">?????????????????????</a></li>
					<li><a href="/fs/osmosis/BusinessDeal.html">????????????????????????????????????</a></li>
					<li><a href="/contents/concept/">CONCEPT</a></li>
					<li><a href="/fs/osmosis/c/guide">??????????????????????????? </a></li>
					<li><a href="/fs/osmosis/PostageSettleList.html#guide_delivery">??????/????????????????????????</a></li>
					<li class="spase"></li>
				</ul>
			</nav>
		</header>

		<div class="osmosis_contents">

			<div id="sp-headermenu" class="sp">
				<button type="button" class="drawer-toggle drawer-hamburger">
					<span class="sr-only">toggle navigation</span>
					<span class="drawer-hamburger-icon"></span>
				</button>
				<h1 class="logo"><a href="/"><img src="/company/wp-content/themes/gk-portfolio/img/top/logo.png" alt="OSMOSIS loaf" /></a></h1>

				<div class="cart2018">
					<a href="/fs/osmosis/ShoppingCart.html"><img src="/company/wp-content/themes/gk-portfolio/img/top/cart.png" alt="OSMOSIS loaf" /></a>
				</div>
			</div>
		</div>
		<!--[if lte IE 8]>
	<div id="ie-toolbar"><div><?php _e('You\'re using an unsupported version of Internet Explorer. Please <a href="http://windows.microsoft.com/en-us/internet-explorer/products/ie/home">upgrade your browser</a> for the best user experience on our site. Thank you.', 'portfolio') ?></div></div>
	<![endif]-->
		<!--<header id="masthead" class="site-header" role="banner">
			<a class="home-link" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
				<?php if (get_theme_mod('portfolio_logo', '') !== '') : ?>
					<img src="<?php echo get_theme_mod('portfolio_logo', ''); ?>" alt="<?php bloginfo('name'); ?>" />
				<?php else : ?>
					<h1 class="site-title"><?php bloginfo('name'); ?></h1>
					<?php if (trim(get_bloginfo('description')) != '' || is_customize_preview()) : ?>
					<h2 class="site-description"><?php bloginfo('description'); ?></h2>
					<?php endif; ?>
				<?php endif; ?>
			</a>
			
			<?php if (get_theme_mod('portfolio_show_topbar_search', '') != '') : ?>
			<form role="search" method="get" class="search-topbar" action="<?php echo home_url('/'); ?>">
				<label>
					<span class="screen-reader-text"><?php echo _x('Search for:', 'label', 'portfolio'); ?></span>
					<input type="search" class="search-topbar-field" placeholder="<?php echo esc_attr_x('Search ???', 'placeholder', 'portfolio'); ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label', 'portfolio'); ?>" />
				</label>
			</form>
			<?php endif; ?>
			
			<?php if (get_theme_mod('portfolio_show_topbar_social', '') != '') : ?>
			<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_class' => 'social-menu-topbar')); ?>
			<?php endif; ?>
		</header>-->
		<!-- #masthead -->
		<div class="osmosis_contents">

			<div id="headermenu" class="pc">
				<ul>
					<li>
						<h1 class="logo"><a href="/"><img src="/company/wp-content/themes/gk-portfolio/img/top/logo.png" alt="OSMOSIS loaf" /></a></h1>
					</li>
					<li class="search2018">
						<form action="/p/search" method="get">
							<div class="form-group">
								<input type="text" name="keyword" class="form-control" placeholder="?????????????????????">
							</div>
							<button type="submit" class="btn btn-default">??????</button>
						</form>
					</li>
					<li class="menbermenu2018">
						<a class="help1" href="/fs/osmosis/c/guide">??????????????????</a>
						<a class="member" href="/fs/osmosis/MyPageTop.html">???????????????</a>
						<a class="login" href="/fs/osmosis/Login.html">????????????</a>
						<a class="cart" href="/fs/osmosis/ShoppingCart.html">?????????</a>
					</li>
				</ul>



			</div>

		</div>

		<div id="contents_base">

			<div class="top-header2018 pc">
				<ul>
					<li class="spase"></li>
					<li class="pcw75">
						<p>
						<div class="account FS2_repeater">
							<span>???????????????$LAST_NAME$$FIRST_NAME$???</span>
							<span class="rank_$MEMBER_STAGE_ORDER_NO$">???????????????$MEMBER_STAGE_NAME$???????????????</span>
							<span class="point_$MEMBER_STAGE_ORDER_NO$">?????????????????? $POINT$ pt</span>
							<span class="coupon_$HAS_COUPON$">
								<a href="http://store.osmosis.co.jp/fs/osmosis/CouponInformation.html">????????????????????????????????????????????????</a></span>

							<a class="logout rank_$MEMBER_STAGE_ORDER_NO$" href="/fs/osmosis/Logout.html">???????????????</a>
						</div>

						</p>
					</li>
					<li class="pcw25">
						<p>10,000???????????????????????????????????????</p>
					</li>
				</ul>
			</div>


		</div>
		<div id="main" class="site-main">
			<div id="page" class="hfeed site">

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>
				</nav><!-- #site-navigation -->
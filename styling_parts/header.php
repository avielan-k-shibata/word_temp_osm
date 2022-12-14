<?php
?>

<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://c18.future-shop.jp/shop/css/r_system_preset.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/company/wp-content/themes/gk-portfolio/css/drawer.css" />
    <link rel="stylesheet" type="text/css" href="/company/wp-content/themes/gk-portfolio/css/omsosis_shopcoordinate2018-.css" />
    <link rel="stylesheet" type="text/css" href="/company/wp-content/themes/gk-portfolio/css/omsosis_shopcoordinate2018pc-.css" />
    <link rel="stylesheet" type="text/css" href="/company/wp-content/themes/gk-portfolio/css/styling.css" />
    <script src="/company/wp-content/themes/gk-portfolio/js/styling.js"></script>
	<script src="https://osmosis.itembox.design/item/js/scroll.js"></script>

    <script src="https://c18.future-shop.jp/shop/js/fs2api.js"></script>
    <script type="text/javascript">
        FS2.repeater({
            ssldomain: 'c18.future-shop.jp',
            shopKey: 'osmosis',
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

<body>
<div class="main_container">
    <div class="styling_contents">
        <div id="sp-headermenu" class="sp">
            <button type="button" class="drawer-toggle drawer-hamburger drawer-button">
                <span class="sr-only">toggle navigation</span>
                <span class="drawer-hamburger-icon"></span>
            </button>
            <h1 class="logo"><a href="/"><img src="/company/wp-content/themes/gk-portfolio/img/top/logo.png" alt="OSMOSIS loaf" /></a></h1>

            <div class="cart2018">
                <a href="/fs/osmosis/ShoppingCart.html"><img src="/company/wp-content/themes/gk-portfolio/img/top/cart.png" alt="OSMOSIS loaf" /></a>
            </div>
        </div>
        <div id="headermenu" class="pc">
            <ul>
                <li>
                    <h1 class="logo"><a href="/"><img src="/company/wp-content/themes/gk-portfolio/img/top/logo.png" alt="OSMOSISs loaf" /></a></h1>
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
        <div class="ovserber_target"></div>
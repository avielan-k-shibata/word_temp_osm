<?php
?>
<div class="leftmenu2018 pc leftmenu2022">
	<ul>
		<li>
			<p>RECOMMEND STYLE</p>
			<a href="/shopcoordinate/index.php/styling/">RECOMMEND TOP</a>
			<a href="/shopcoordinate/index.php/styling_model/style-book/">STYLE BOOK</a>
			<a class="c_title" href="/shopcoordinate/index.php/styling_model/2022-oct-vol-02/">2022 OCT vol.02</a>
			<a class="c_title" href="/shopcoordinate/index.php/styling_model/2022-oct-vol-01/">2022 OCT vol.01</a>
			<a class="c_title" href="/shopcoordinate/index.php/styling_model/2022-sep-vol-02/">2022 SEP vol.02</a>
			<p class="acordion_btn">その他のSTYLE BOOK</p>
			<div class="acordion_menu">
			<a class="c_title" href="/shopcoordinate/index.php/styling_model/2022-sep-vol-01/">2022 SEP vol.01</a>
			<a class="c_title" href="/shopcoordinate/index.php/styling_model/2022-aug-vol-02/">2022 AUG vol.02</a>
			<a class="c_title" href="/shopcoordinate/index.php/styling_model/2022-aug-vol-01/">2022 AUG vol.01</a>
			<a class="c_title" href="/shopcoordinate/index.php/styling_model/2022-jul-vol-02/">2022 JUL vol.02</a>
			<a class="c_title" href="/shopcoordinate/index.php/styling_model/2022-jul-vol-01/">2022 JUL vol.01</a>
			</div>
			<a href="/shopcoordinate/index.php/styling_model/catalog/">CATALOG</a>
			<a class="c_title" href="/shopcoordinate/index.php/styling_model/2022aw-vol-02/">2022AW vol.02</a>
			<a class="c_title" href="/shopcoordinate/index.php/styling_model/2022aw-vol-01/">2022AW vol.01</a>
			<a class="c_title" href="/shopcoordinate/index.php/styling_model/2022ss-vol-01/">2022SS vol.01</a>
			<a href="/shopcoordinate/index.php/styling_model/ozawa/">OZAWA'S STYLE</a>
			
			<p class="acordion_btn">COLOR</p>
			<div class="acordion_menu">
				<div class="color_btn">
					<a href="/shopcoordinate/index.php/styling_tag/white/"><span class="white"></span></a>
					<a href="/shopcoordinate/index.php/styling_tag/black/"><span class="black"></span></a>
					<a href="/shopcoordinate/index.php/styling_tag/charcoal/"><span  class="charcoal"></span></a>
					<a href="/shopcoordinate/index.php/styling_tag/gray/"><span class="gray"></span></a>
					<a href="/shopcoordinate/index.php/styling_tag/mix/"><span class="mix"></span></a>
				</div>
				<div class="color_btn">
					<a href="/shopcoordinate/index.php/styling_tag/khaki/"><span class="khaki"></span></a>
					<a href="/shopcoordinate/index.php/styling_tag/green/"><span class="green"></span></a>
					<a href="/shopcoordinate/index.php/styling_tag/l-green/"><span  class="l-green"></span></a>
					<a href="/shopcoordinate/index.php/styling_tag/blue/"><span class="blue"></span></a>
					<a href="/shopcoordinate/index.php/styling_tag/navy/"><span class="navy"></span></a>
				</div>
				<div class="color_btn">
					<a href="/shopcoordinate/index.php/styling_tag/purple/"><span class="purple"></span></a>
					<a href="/shopcoordinate/index.php/styling_tag/yellow/"><span class="yellow"></span></a>
					<a href="/shopcoordinate/index.php/styling_tag/camel/"><span class="camel"></span></a>
					<a href="/shopcoordinate/index.php/styling_tag/brown/"><span class="brown"></span></a>
					<a href="/shopcoordinate/index.php/styling_tag/pink/"><span class="pink"></span></a>
				</div>
				<div class="color_btn">
					<a href="/shopcoordinate/index.php/styling_tag/red/"><span  class="red"></span></a>
					<a href="/shopcoordinate/index.php/styling_tag/wine/"><span class="wine"></span></a>
					<a href="/shopcoordinate/index.php/styling_tag/ivory/"><span class="ivory"></span></a>
					<a href="/shopcoordinate/index.php/styling_tag/beige/"><span class="beige"></span></a>
					<a href="/shopcoordinate/index.php/styling_tag/l-beige/"><span class="l-beige"></span></a>
				</div>
			</div>
			<p class="acordion_btn">納期</p>
			<div class="acordion_menu">
			<a href="/shopcoordinate/index.php/styling_items/late_october/">10月下旬入荷</a>
			<a href="/shopcoordinate/index.php/styling_items/early_october/">10月上旬入荷</a>
			<a href="/shopcoordinate/index.php/styling_items/late_september/">09月下旬入荷</a>
			<a href="/shopcoordinate/index.php/styling_items/early_september/">09月上旬入荷</a>
			</div>
			<p class="acordion_btn">カテゴリー</p>
			<div class="acordion_menu">
			<a href="/shopcoordinate/index.php/styling_tag/tshirts/">Tシャツ・カットソー</a>
			<a href="/shopcoordinate/index.php/styling_tag/blouse/">ブラウス　シャツ</a>
			<a href="/shopcoordinate/index.php/styling_tag/knit/">ニット</a>
			<a href="/shopcoordinate/index.php/styling_tag/onepiece/">ワンピース</a>
			<a href="/shopcoordinate/index.php/styling_tag/pants/">パンツ</a>
			<a href="/shopcoordinate/index.php/styling_tag/skirt/">スカート</a>
			<a href="/shopcoordinate/index.php/styling_tag/outer/">アウター</a>
			<a href="/shopcoordinate/index.php/styling_tag/shoes/">シューズ</a>
			<a href="/shopcoordinate/index.php/styling_tag/accessories/">ファッション雑貨</a>
			</div>
			<!-- <p>MODEL</p>
			<a href="/shopcoordinate/">OZAWA</a> -->
		</li>
		<script>
			const acordion_btn = document.querySelectorAll(".acordion_btn");
			acordion_btn.forEach(e => {
				e.addEventListener("click",function(){
					const nextnode = e.nextElementSibling;
					e.classList.toggle("open")
					nextnode.classList.toggle("open")
					const openflg = nextnode.classList.contains("open")
					const hight = nextnode.childElementCount * 38
  					openflg ? nextnode.style.height = `${hight}px` : nextnode.style.height = `0px`
				})
			});
		</script>
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
			<a href="/p/search?maxprice=2776">～￥3,000</a>
			<a href="/p/search?minprice=2777&maxprice=4628">￥3,000～￥5,000</a>
			<a href="/p/search?minprice=4629&maxprice=6481">￥5,000～￥7,000</a>
			<a href="/p/search?minprice=6482&maxprice=8332">￥7,000～￥9,000</a>
			<a href="/p/search?minprice=8333">￥9,000～</a>
			<a href="/c/sale1">OUTLET</a>
		</li>
		<li class="color-search">
			<p>色でさがす</p>
			<a class="color-icon" href="/p/search?verticalvariationvalue=WHITE&verticalvariationvalue=IVORY"><span class="wht-icon"></span><i>ホワイト系</i></a>
			<a class="color-icon" href="/p/search?verticalvariationvalue=BLACK"><span class="blk-icon"></span><i>ブラック系</i></a>
			<a class="color-icon" href="/p/search?verticalvariationvalue=GRAY&verticalvariationvalue=L.GRAY"><span class="gry-icon"></span><i>グレー系</i></a>
			<a class="color-icon" href="/p/search?verticalvariationvalue=BROWN"><span class="blw-icon"></span><i>ブラウン系</i></a>
			<a class="color-icon" href="/p/search?verticalvariationvalue=BEIGE"><span class="beg-icon"></span><i>ベージュ系</i></a>
			<a class="color-icon" href="/p/search?verticalvariationvalue=GREEN"><span class="grn-icon"></span><i>グリーン系</i></a>
			<a class="color-icon" href="/p/search?verticalvariationvalue=BLUE"><span class="blu-icon"></span><i>ブルー系</i></a>
			<a class="color-icon" href="/p/search?verticalvariationvalue=YELLOW"><span class="yel-icon"></span><i>イエロー系</i></a>
			<a class="color-icon" href="/p/search?verticalvariationvalue=PINK&verticalvariationvalue=PURPLE"><span class="pnk-icon"></span><i class="long">ピンク/パープル系</i></a>
			<a class="color-icon" href="/p/search?verticalvariationvalue=RED&verticalvariationvalue=ORANGE&verticalvariationvalue=WINE"><span class="red-icon"></span><i class="long">レッド/オレンジ系</i></a>
			<a class="color-icon" href="/p/search?verticalvariationvalue=SILVER"><span class="slb-icon"></span><i>シルバー系</i></a>
			<a class="color-icon" href="/p/search?verticalvariationvalue=GOLD"><span class="gld-icon"></span><i>ゴールド系</i></a>

		</li>
		<li>
			<p>INFORMATION</p>
			<a href="/f/recommend">コーディネート</a>
			<a href="/f/ranking">ランキング</a>
			<a href="/f/contact">お問い合わせ</a>
			<a href="/f/shop_list">SHOP LIST</a>
		</li>
	</ul>

</div>
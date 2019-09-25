<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />	
	<title>Главная | Интернет-магазин "Ортоп"</title>
	<meta name="description" content='Интернет-магазин "Ортоп" - препараты для лечения суставов.'/>
	<link type="text/css" rel="stylesheet" media="all" href="css/blue2.css" />
	<link type="text/css" rel="stylesheet" media="all" href="js/prettyPhoto/css/prettyPhoto.css" />
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
</head>

<body class="homepage">
	<!-- SLIDESHOW -->
	<div id="slideshow_wrap">
		<div id="slideshow">
			<div class="slideshow_controls">
				<a class="prev" href="#" title="Previous"></a>
				<a class="start" href="#"></a>
				<a class="next" href="#" title="Next"></a>
			</div>
			
			<ul>
				<!-- slide 1 -->
				<li>
					<img src="content/1600_500/1.jpg" width="1600" height="500" alt="о нас" title="узнайте больше о нас" />
					<div class="slideshow_info">
						<div class="slideshow_info_top">
							<h1 class="like_h2_slide">Интернет-магазин «Ортоп»</h1>
							<p>
								Каждый покупатель хочет знать, насколько он может доверять интернет-магазину и почему стоит совершить покупку именно здесь.
							</p>
						</div>
						
						<div class="slideshow_info_bottom">
							<a href="about.php">Перейти на страницу<span></span></a>
						</div>
					</div>
				</li>
				
				<!-- slide 2 -->
				<li>
					<img src="content/1600_500/2.jpg" width="1600" height="500" alt="все товары" title="посмотрите все товары"/>
					<div class="slideshow_info">
						<div class="slideshow_info_top">
							<p class="like_h2_slide">Все товары</p>
							
							<p>
								Посмотреть все товары и узнать цены на их, Вы можете здесь
							</p>
						</div>
						
						<div class="slideshow_info_bottom">
							<a href="products.php">Перейти на страницу<span></span></a>
						</div>
					</div>
				</li>
				
				<!-- slide 3 -->
				<li>
					<img src="content/1600_500/3.jpg" width="1600" height="500" alt="акци" title="акционные предложения" />
					<div class="slideshow_info">
						<div class="slideshow_info_top">
							<p class="like_h2_slide">Акции</p>
							
							<p>
								Узнать все актуальные акции нашего магазина
							</p>
						</div>
						
						<div class="slideshow_info_bottom">
							<a href="#">Перейти на страницу<span></span></a>
						</div>
					</div>
				</li>
				
			</ul>
		</div>
		
		<div id="slideshow_shadow"></div>
	</div>
	
	<?php include "header.php"; ?>
	
	<!-- CALL TO ACTION -->
	<div id="cta">
		<div id="cta_inner">
			<p class="cta_text">
				Это первый магазин в Украине, где представлен полный цикл товаров по уходу за Вашими суставами и не только! Покупайте у нас! Покупайте с наслаждением!
			</p>
			
			<a class="cta_button" href="about.php">Узнать больше<span></span></a>
		</div>
		<div class="shadow_bottom"></div>
	</div>
	
	<!-- FEATURED -->
	<div class="section">
		<div class="container_12">
			<h2>Новые Акции</h2>
			<div class="featured grid_4">
				<div class="framed_image">
					<!-- Simple Slideshow -->
					<ul class="dm3_slider" style="width: 290px; height: 180px;">
						<li class="slide" data-enlargeurl="content/enlarged/1.jpg">
							<img src="images/sale1.jpg" width="290" height="180" alt="первая акция" title="акция" />
	</li>
				</div>
				
				<h3>-10%</h3>
				
				<p>
				В честь открытия Нового магазина по адресу проспект Маяковского 91В объявляем АКЦИЮ -10% на товары
				</p>
				
				<p>
					<a class="button" href="sale.php">Посмотреть все<span></span></a>
				</p>
			</div>
			
			<div class="featured grid_4">
				<div class="framed_image">
					<img src="images/sale2.jpg" width="290" height="180" alt="вторая акция" title="акция" />
				</div>
				
				<h3>-30%</h3>
				
				<p>
				Грандиозная скидка 30%!!!При покупке набора ТМ SpaGel "носочки + перчатки", Вы получаете скидку  в размере 30%.
				</p>
				
				<p>
					<a class="button" href="sale.php">Посмотреть все<span></span></a>
				</p>
			</div>
			
			<div class="featured grid_4">
				<div class="framed_image">
					<img src="images/sale3.jpg" width="290" height="180" alt="сертификаты" title="акция" />
				</div>
				
				<h3>Подарочные сертификаты</h3>
				
				<p>
				Подарочные сертификаты на сумму 300, 500 и 1000 грн, - это замечательный подарок. С подарочным сертификатом можно приобрести любой товар.
				</p>
				
				<p>
					<a class="button" href="sale.php">Посмотреть все<span></span></a>
				</p>
			</div>
			
			<div class="clear"></div>
		</div>
	</div>
	
	<!-- ABOUT US -->
	<div class="section grey icons_list">
		<div class="container_12">
			<h2 class="grid_12 section_title">Немного о нас</h2>
			
			<div class="grid_6">
				<p>
					<img class="alignleft" src="content/graphicdesign.png" alt="графика" title="дизайн" />
					Медицинские товары магазинов фирмы «Ортоп» отличаются наивысшим качеством, у них всегда есть в наличии гарантии и сертификаты. Клиентов радуют наши лояльные цены на изделия, так как многие из них импортируются в Украину напрямую от зарубежных заводов-изготовителей, или же закупаются у отечественных производителей, минуя посредников.
				</p>
			</div>
			
			<div class="grid_5">
				<ul class="arrowlist">
					<li>Консультация специалистов при покупке</li>
					<li>Наличие торговых точе</li>
					<li>Максимальный уровень лояльности</li>
					<li>Качественные товары</li>
					<li>Многолетный опыт</li>
				</ul>
			</div>
			
			
			
			<div class="space"></div>
			
			<div class="grid_3">
				<img class="alignleft" src="content/icons/graphs-pie.png" alt="значок" title="значок" />
				<h3>Украина</h3>
				
				<p>
					Основная часть товаров - это продукция украинских производителей!
				</p>
			</div>
			
			<div class="grid_3">
				<img class="alignleft" src="content/icons/iMac.png" alt="значок" title="значок" />
				<h3>Узнаваемость</h3>
				
				<p>
					Мы являемся весьма узнаваемым брендом на рынке Укрины.
				</p>
			</div>
			
			<div class="grid_3">
				<img class="alignleft" src="content/icons/podcast.png" alt="значок" title="значок" />
				<h3>Качество</h3>
				
				<p>
					Только качественные товары
				</p>
			</div>
			
			<div class="grid_3">
				<img class="alignleft" src="content/icons/settings.png" alt="значок" title="значок" />
				<h3>Гарантия</h3>
				
				<p>
					На все товары имеется гарантия
				</p>
			</div>
			
			<div class="clear"></div>
		</div>
		<div class="shadow_top"></div>
		<div class="shadow_bottom"></div>
	</div>
	
	<?php include "popular_goods.php"; ?>
	
	<div class="sep"></div>	
	<?php include "footer.php"; ?>
	<!-- JAVASCRIPTS -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/dm3Slideshow.jquery.js"></script>
	<script type="text/javascript" src="js/dm3FadeSlider.jquery.js"></script>
	<script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
	<script type="text/javascript" src="js/prettyPhoto/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.dmTabs.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
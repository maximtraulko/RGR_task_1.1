<html>
	<HEAD>
		<meta charset ="UTF-8"><link rel = "stylesheet" href = "index.css">
		<TITLE> Список напитков </title>
	</HEAD>
	<body class="background">
		<?php
			$items = [
				'Чай' => [
					[
						'title' => 'Юннань',
						'price' => '575',
						'photo' => 'https://pp.vk.me/c636826/v636826040/3bf14/gucVroISdHI.jpg',
						'country' => 'Китай',
						'description' => 'Чай Юннань изготовлен по традиционной технологии с учетом всех стандартов, разработанных в 70-е годы прошлого века. Для производства данного чая используется только элитное сырье – нераскрывшиеся или только начавшие раскрываться крупные листовые почки, называющиеся типсами. Чай из Юннаня отличается солодовыми нотами и выраженными оттенками карамели. Настой имеет приятный красно-бордовый цвет и изысканный сложный аромат.'
					],
					[
						'title' => 'Маранги',
						'price' => '915',
						'photo' => 'https://pp.vk.me/c636826/v636826040/3bf0a/1XaZbke8q4g.jpg',
						'country' => 'Индия',
						'description' => 'Плантация Маранги практически неизвестна у нас, поскольку в основном предлагает только мини-лоты, которые быстро раскупаются чайными эстетами из Японии и других посвященных в тайну чая стран. Чай сорта Маранги – это самый типсовый чай региона Ассам. Именно в связи с наличием в нем огромного количества нераспустившихся чайных почек его называют «fruity Assam» – фруктовым ассамом.'
					]
				],
				
				'Кофе' => [
					[
						'title' => 'Ява Джампит',
						'price' => '185',
						'photo' => 'https://pp.vk.me/c636826/v636826040/3bf01/W3UfROwael4.jpg',
						'country' => 'Индонезия',
						'description' => 'о. Ява – это богатейшая по своему природному разнообразию экосистема. Кофе, выращенный на этом острове, обладает сложным, ярким и насыщенным вкусом, плотной текстурой, округлым телом и яркой цитрусовой кислотностью. Эти два компонента прекрасно уравновешены в данном сорте. В аромате слышится ананас, персик и миндаль, а во вкусе преобладают ноты темного шоколада, черной смородины и ежевики.'
					],
					[
						'title' => 'Перу Арабика',
						'price' => '150',
						'photo' => 'https://pp.vk.me/c636826/v636826040/3befa/_cCRAkpUdNc.jpg',
						'country' => 'Перу',
						'description' => 'Перуанский кофе один из самых плотных кофе с балансом в сторону тела.  Во вкусе присутствуют ноты ванили, корицы, темного шоколада и чернослива. Умеренная кислотность и насыщенность делают этот сорт очень текстурным и густым.'
					],
					[
						'title' => 'Эфиопия Иргачифф',
						'price' => '145',
						'photo' => 'https://pp.vk.me/c636826/v636826040/3bef3/y7yBiPV5rWI.jpg',
						'country' => 'Эфиопия',
						'description' => 'Иргачиф -  самый маленький и высокогорный регион Эфиопии (1700- 2000м). Здесь выращивают лучший кофе в мире по мнению многих экспертов. Эфиопия считается родиной кофе и условия произрастания здесь раскрывают в зернах все богатство и разнообразие вкуса. Кофе выращивается на небольших участках с использованием более высоких деревьев для создания тени, что благоприятно влияет на равномерное вызревание кофейных плодов. Во вкусе присутствуют ноты бергамота, жасмина и лимона. Кофе отличает яркая, искристая кислотность тропических фруктов и легкое округлое тело.'
					]
				]
			];		
		?>
		<div class="items-list">
		<?php
			foreach ($items as $product_class=> $product) {
				echo "<div class='product-class'> Вид продукта: ". htmlspecialchars($product_class)."</div>";
				foreach ($product as $class => $item)  {
					echo "<div class='item-item'>";
					if (isset($item['title']))	{
						echo "<div class='item-title'> Название напитка: ".htmlspecialchars($item['title'])."</div>";
					}
					if (isset($item['price']))	{
						echo "<div class='item-price'> Цена напитка: ".htmlspecialchars(number_format($item['price'],0,'',' ')." рублей")."</div>";
					}
					if (isset($item['country']))	{
						echo "<div class='item-country'> Страна-производитель: ".htmlspecialchars($item['country'])."</div>";
					}
					if (isset($item['description'])) {
						echo "<div class='item-description'> Краткое описание напитка: ".htmlspecialchars($item['description'])."</div>";
					}
					if (isset($item['photo'])) {
						echo "<div class='item-photo'> <img src='".htmlspecialchars($item['photo'])." '></div>";
					}
					echo "</div>";
				}
			}	
		echo "</div>";
		?>
		<p class="up"><a href="#"> В начало страницы </a></p>
	</body>
</html>
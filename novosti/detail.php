<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?><a class="back-link" href="/novosti/">
<?=ASSET_PATH?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>icons.svg#dropdown-arrow" /&gt; Пресс-центр </a><br>
 <br>
 <br>
 <section class="article">
<h1 class="article__title"></h1>
<h1 class="article__title">На&nbsp;Ямале непогода повлияла на&nbsp;работу транспорта</h1>
 <time class="article__publication-date" datetime="2019-06-13">13 июня 2019</time>
<div class="article__content-wrapper">
	<div class="article__lead content-block">
		 Лид&nbsp;— краткое изложение содержимого статьи. Например: «В&nbsp;пятницу, 14&nbsp;июня, на&nbsp;Ямале объявлен штормовой прогноз. Ожидаются неблагоприятные погодные условия: ночью по&nbsp;востоку округа сильные осадки&nbsp;— дождь, мокрый снег». <br>
		 Лид не&nbsp;является обязательным элементом статьи
	</div>
</div>
<div class="article__content-wrapper">
	<div class="article__content content-block">
 <img alt="Красивое изображение" src="<?=ASSET_PATH?>stub/11.jpg">
		<div class="image-caption">
			 Подпись к&nbsp;фотографии. Как и&nbsp;сама фотография не&nbsp;является необходимой
		</div>
 <br>
 <br>
		 <?$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	".default", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "#SITE_DIR#/novosti/detail.php?ID=#ID#",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => $_REQUEST["ID"],
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"IBLOCK_ID" => "17",
		"IBLOCK_TYPE" => "News",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?><br>
		<h2>Текстовые блоки</h2>
		 Используется стандартный шрифт основного текста&nbsp;P (18, 28, #333333), отступ между абзацами&nbsp;— 20. <br>
		 По&nbsp;данным Ямало-Ненецкого ЦГМС&nbsp;— филиала ФГБУ «Обь-Иртышского УГМС», на&nbsp;территории округа прогнозируется неблагоприятное погодное явление: ночью по&nbsp;востоку округа сильные осадки (мокрый снег, дождь). Ветер северо-западный 6-11&nbsp;м/с., в&nbsp;Приуральском, Шурышкарском, Надымском, Тазовском районах порывы до&nbsp;16-21&nbsp;м/с. Температура ночью: −1 до + 4. Температура днем: +2...+7. <br>
 <br>
 <br>
		<h3>Цитаты</h3>
		 Служат для выделения в&nbsp;тексте прямой речи. Данным блоком не&nbsp;рекомендуется злоупотреблять и&nbsp;не&nbsp;следует оформлять с&nbsp;его помощью большие массивы текста. Фотография необязательна.
		<blockquote class="blockquote" data-controller="polar-lights-masked" data-action="mousemove->
			 polar-lights-masked#updateMaskPosition"> Один паром у&nbsp;нас сегодня все-таки перевёз несколько автомашин. На&nbsp;11&nbsp;часов утра ветер на&nbsp;реке в&nbsp;районе переправы Салехард-Лабытнанги усилился до&nbsp;25&nbsp;метров в&nbsp;секунду. Паромы остановились. Прекращены также все перевозки водным транспортом. Из-за сильного северо-восточного ветра из&nbsp;аэропорта Салехард временно прекращён приём-выпуск вертолётных рейсов. Самолёты летают в&nbsp;штатном режиме
			<div class="person-info">
 <img alt="Виталий Лагутин" src="<?=ASSET_PATH?>stub/12.jpg" class="person-info__photo">
				<div class="person-info__description">
 <span class="person-info__name">Виталий Лагутин</span> <span class="person-info__position">директор дирекции транспорта ЯНАО</span>
				</div>
			</div>
			<div class="polar-lights polar-lights--dim">
				<div class="polar-lights__mask" data-target="polar-lights-masked.mask">
				</div>
			</div>
		</blockquote>
		 Изображения помещаются в&nbsp;родительский контейнер шириной во&nbsp;всю область контента (для десктопов&nbsp;— 6&nbsp;колонок сетки, 1120px) и&nbsp;максимальной высотой 630&nbsp;px&nbsp;— пропорции 16×9. Внутри контейнера картинка масштабируется по&nbsp;наибольшей метрике. Искажение пропорций и&nbsp;кадрирование не&nbsp;допускается. <img src="http://placekitten.com/g/1520/1080" alt="Котик"> <img src="http://placekitten.com/g/1080/1920" alt="Котик">
		<h3>Списки и&nbsp;ссылки в&nbsp;тексте</h3>
 <span>
		В&nbsp;дизайн-системе описывается построение маркированных и&nbsp;нумерованных списков, а&nbsp;также ссылок&nbsp;— <a href="http://standart.gov.design/design/typography" target="_blank" rel="nofollow noopener">http://standart.gov.design/design/typography</a> </span> <br>
		 Вот так выглядит маркированный список с&nbsp;вложенными нумерованными и&nbsp;маркированными:
		<ul>
			<li>
			<!--
           -->заявление
			<ol>
				<li>
				<!--
               -->Первый пункт
				<ol>
					<li>Первый подпункт</li>
					<li>Второй подпункт</li>
					<li>Третий подпункт</li>
				</ol>
 </li>
				<li>
				<!--
               -->Второй пункт
				<ul>
					<li>Первый подпункт</li>
					<li>Второй подпункт</li>
					<li>Третий подпункт</li>
				</ul>
 </li>
				<li>Третий пункт</li>
				<li>Четвертый пункт</li>
				<li>Пятый пункт</li>
				<li>Шестой пункт</li>
				<li>Седьмой пункт</li>
				<li>Восьмой пункт</li>
				<li>Девятый пункт</li>
				<li>Десятый пункт</li>
				<li>Одиннадцатый пункт</li>
			</ol>
 </li>
			<li>
			<!--
           -->документ, удостоверяющий вашу личность:
			<ul>
				<li>
				<!--
               -->Паспорт
				<ol>
					<li>Первый подпункт</li>
					<li>Второй подпункт</li>
					<li>Третий подпункт</li>
				</ol>
 </li>
				<li>
				<!--
               -->Водительские права
				<ul>
					<li>Первый подпункт</li>
					<li>Второй подпункт</li>
					<li>Третий подпункт</li>
				</ul>
 </li>
				<li>Свидетельство о&nbsp;рождении</li>
			</ul>
 </li>
			<li>СНИЛС</li>
		</ul>
		<h4>Сложный нумерованный список</h4>
		<ol>
			<li>
			<!--
           -->заявление
			<ul>
				<li>
				<!--
               -->Первый пункт
				<ul>
					<li>Первый подпункт</li>
					<li>Второй подпункт</li>
					<li>Третий подпункт</li>
				</ul>
 </li>
				<li>
				<!--
               -->Второй пункт
				<ol>
					<li>Первый подпункт</li>
					<li>Второй подпункт</li>
					<li>Третий подпункт</li>
				</ol>
 </li>
				<li>Третий пункт</li>
				<li>Четвертый пункт</li>
				<li>Пятый пункт</li>
				<li>Шестой пункт</li>
				<li>Седьмой пункт</li>
				<li>Восьмой пункт</li>
				<li>Девятый пункт</li>
				<li>Десятый пункт</li>
				<li>Одиннадцатый пункт</li>
			</ul>
 </li>
			<li>
			<!--
           -->документ, удостоверяющий вашу личность:
			<ol>
				<li>
				<!--
               -->Паспорт
				<ul>
					<li>Первый подпункт</li>
					<li>Второй подпункт</li>
					<li>Третий подпункт</li>
				</ul>
 </li>
				<li>
				<!--
               -->Водительские права
				<ol>
					<li>Первый подпункт</li>
					<li>Второй подпункт</li>
					<li>Третий подпункт</li>
				</ol>
 </li>
				<li>Свидетельство о&nbsp;рождении</li>
			</ol>
 </li>
			<li>СНИЛС</li>
		</ol>
	</div>
</div>
 </section><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
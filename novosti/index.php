<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
?><?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?> <section class="press-center" data-controller="view-more">
<div class="press-center__header">
	<h1 class="light">Новости</h1>
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
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
		"FIELD_CODE" => array("ELEMENT_ID",""),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "17",
		"IBLOCK_TYPE" => "News",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("",""),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?><br>
</div>
<div class="press-center__articles press-center__articles--wide-list" data-target="view-more.container">
 <article class="news-important"> <a href="/article.html" class="news-important__link">
	<h2 class="news-important__title">
	Стартовал прием заявок на&nbsp;I&nbsp;конкурс президентских грантов 2020&nbsp;года! Желающие уже с&nbsp;1 марта 2020&nbsp;года получить грант Президента </h2>
 </a> <time class="news-important__publication-date" datetime="2019-10-15">15 октября 2019</time> </article> <article class="news news--wide">
	<div class="news__publication-info">
 <a href="/novosti/detail.php" class="news-important__link">
		<h3 class="news__title content-block">
		Общественная палата&nbsp;РФ будет продвигать методические указания по&nbsp;госзакупкам услуг в&nbsp;сфере отлова и&nbsp;содержания животных без владельцев. &nbsp;15&nbsp;ноября поговорили о&nbsp;проблемах правоприменения закона «Об&nbsp;ответственном обращении с&nbsp;животными» </h3>
 </a> <time class="news__publication-date" datetime="2019-11-08">8 ноября 2019</time>
	</div>
	<div class="news__illustration" title="Код PHP: &lt;?=ASSET_PATH?&gt;">
		 <?=ASSET_PATH?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>stub/7.jpg)"&gt;
	</div>
 </article> <article class="news news--wide">
	<div class="news__publication-info">
 <a href="/article.html" class="news__link">
		<h3 class="news__title content-block">
		#ЩедрыйВторник пройдет 3&nbsp;декабря. В&nbsp;100&nbsp;странах, включая Россию, в&nbsp;четвертый раз пройдет Международный день благотворительности #ЩедрыйВторник. Миллионы людей объединяются для проведения благотворительных мероприятий, вдохновляют других на&nbsp;добрые дела. </h3>
 </a> <time class="news__publication-date" datetime="2019-10-24">24 октября 2019</time>
	</div>
	<div class="news__illustration" title="Код PHP: &lt;?=ASSET_PATH?&gt;">
		 <?=ASSET_PATH?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>stub/8.jpg)"&gt;
	</div>
 </article> <article class="news news--wide">
	<div class="news__publication-info">
 <a href="/article.html" class="news__link content-block">
		<h3 class="news__title">
		Заседание рабочей группы Общественной палаты Ямала по&nbsp;формированию системы гуманного обращения с&nbsp;животными </h3>
 </a> <time class="news__publication-date" datetime="2019-09-27">27 сентября 2019</time>
	</div>
	<div class="news__illustration" title="Код PHP: &lt;?=ASSET_PATH?&gt;">
		 <?=ASSET_PATH?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>stub/9.jpg)"&gt;
	</div>
 </article> <article class="news news--wide">
	<div class="news__publication-info">
 <a href="/article.html" class="news__link content-block">
		<h3 class="news__title content-block">
		На&nbsp;Ямале реализуется общественно-образовательный проект «Ямальские молодёжные инициативы». Его участники могут получить гранты в&nbsp;размере 200, 150 и&nbsp;100&nbsp;тыс. рублей на&nbsp;реализацию своего социально-ориентированного проекта </h3>
 </a> <time class="news__publication-date" datetime="2019-11-14">14 ноября 2019</time>
	</div>
	<div class="news__illustration" title="Код PHP: &lt;?=ASSET_PATH?&gt;">
		 <?=ASSET_PATH?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>stub/10.jpg)"&gt;
	</div>
 </article> <article class="news news--wide">
	<div class="news__publication-info">
 <a href="/article.html" class="news__link content-block">
		<h3 class="news__title content-block">
		Форум добровольцев Ямала соберет более 300&nbsp;участников. В&nbsp;Новом Уренгое 13&nbsp;и&nbsp;14&nbsp;декабря пройдет форум добровольцев Ямала. Это долгожданное событие для волонтерского движения автономного округа </h3>
 </a> <time class="news__publication-date" datetime="2019-11-14">14 ноября 2019</time>
	</div>
	<div class="news__illustration" title="Код PHP: &lt;?=ASSET_PATH?&gt;">
		 <?=ASSET_PATH?><span class="bxhtmled-surrogate-inner"><span class="bxhtmled-right-side-item-icon"></span><span class="bxhtmled-comp-lable" unselectable="on" spellcheck="false">Код PHP</span></span>stub/4.jpg)"&gt;
	</div>
 </article>
</div>
<div class="grid-container">
 <a class="press-center__view-more button button--inverted" href="press-center.html" data-target="view-more.button" data-action="view-more#load">Показать более ранние материалы</a>
</div>
 </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
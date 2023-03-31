<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<section class="press-center" data-controller="view-more">
  <header class="press-center__header">
    <h1 class="light">Новости</h1>
  </header>
  <div class="press-center__articles press-center__articles--wide-list" data-target="view-more.container">

    <article class="news-important" style="background-image: url(<?=ASSET_PATH?>stub/1.jpg)">
      <a href="/article.html" class="news-important__link">
        <h2 class="news-important__title">
          Стартовал прием заявок на&nbsp;I&nbsp;конкурс президентских
          грантов 2020&nbsp;года! Желающие уже с&nbsp;1 марта
          2020&nbsp;года получить грант Президента
        </h2>
      </a>
      <time class="news-important__publication-date" datetime="2019-10-15">15 октября 2019</time>
    </article>
    <article class="news news--wide">
      <div class="news__publication-info">
        <a href="/article.html" class="news__link">
          <h3 class="news__title content-block">
            <mark>
              Общественная палата&nbsp;РФ будет продвигать методические
              указания по&nbsp;госзакупкам услуг в&nbsp;сфере отлова
              и&nbsp;содержания животных без владельцев.
            </mark>
            <span>
              &nbsp;15&nbsp;ноября поговорили о&nbsp;проблемах
              правоприменения закона &laquo;Об&nbsp;ответственном обращении
              с&nbsp;животными&raquo;
            </span>
          </h3>
        </a>
        <time class="news__publication-date" datetime="2019-11-08">8 ноября 2019</time>
      </div>
      <div class="news__illustration" style="background-image: url(<?=ASSET_PATH?>stub/7.jpg)"></div>
    </article>
    <article class="news news--wide">
      <div class="news__publication-info">
        <a href="/article.html" class="news__link">
          <h3 class="news__title content-block">
            <mark>
              #ЩедрыйВторник пройдет 3&nbsp;декабря.
            </mark>
            <span>
              В&nbsp;100&nbsp;странах, включая Россию, в&nbsp;четвертый раз
              пройдет Международный день благотворительности
              #ЩедрыйВторник. Миллионы людей объединяются для проведения
              благотворительных мероприятий, вдохновляют других
              на&nbsp;добрые дела.
            </span>
          </h3>
        </a>
        <time class="news__publication-date" datetime="2019-10-24">24 октября 2019</time>
      </div>
      <div class="news__illustration" style="background-image: url(<?=ASSET_PATH?>stub/8.jpg)"></div>
    </article>
    <article class="news news--wide">
      <div class="news__publication-info">
        <a href="/article.html" class="news__link content-block">
          <h3 class="news__title">
            Заседание рабочей группы Общественной палаты Ямала
            по&nbsp;формированию системы гуманного обращения
            с&nbsp;животными
          </h3>
        </a>
        <time class="news__publication-date" datetime="2019-09-27">27 сентября 2019</time>
      </div>
      <div class="news__illustration" style="background-image: url(<?=ASSET_PATH?>stub/9.jpg)"></div>
    </article>
    <article class="news news--wide">
      <div class="news__publication-info">
        <a href="/article.html" class="news__link content-block">
          <h3 class="news__title content-block">
            <mark>
              На&nbsp;Ямале реализуется общественно-образовательный проект
              &laquo;Ямальские молодёжные инициативы&raquo;.
            </mark>
            <span>
              Его участники могут получить гранты в&nbsp;размере 200, 150
              и&nbsp;100&nbsp;тыс. рублей на&nbsp;реализацию своего
              социально-ориентированного проекта
            </span>
          </h3>
        </a>
        <time class="news__publication-date" datetime="2019-11-14">14 ноября 2019</time>
      </div>
      <div class="news__illustration" style="background-image: url(<?=ASSET_PATH?>stub/10.jpg)"></div>
    </article>
    <article class="news news--wide">
      <div class="news__publication-info">
        <a href="/article.html" class="news__link content-block">
          <h3 class="news__title content-block">
            <mark>
              Форум добровольцев Ямала соберет более 300&nbsp;участников.
            </mark>
            <span>
              В&nbsp;Новом Уренгое 13&nbsp;и&nbsp;14&nbsp;декабря пройдет
              форум добровольцев Ямала. Это долгожданное событие для
              волонтерского движения автономного округа
            </span>
          </h3>
        </a>
        <time class="news__publication-date" datetime="2019-11-14">14 ноября 2019</time>
      </div>
      <div class="news__illustration" style="background-image: url(<?=ASSET_PATH?>stub/4.jpg)"></div>
    </article>
  </div>
<?if($arParams["USE_RSS"]=="Y"):?>
	<?
	if(method_exists($APPLICATION, 'addheadstring'))
		$APPLICATION->AddHeadString('<link rel="alternate" type="application/rss+xml" title="'.$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["rss"].'" href="'.$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["rss"].'" />');
	?>
	<a href="<?=$arResult["FOLDER"].$arResult["URL_TEMPLATES"]["rss"]?>" title="rss" target="_self"><img alt="RSS" src="<?=$templateFolder?>/images/gif-light/feed-icon-16x16.gif" border="0" align="right" /></a>
<?endif?>
<?if($arParams["USE_SEARCH"]=="Y"):?>
<?=GetMessage("SEARCH_LABEL")?><?$APPLICATION->IncludeComponent(
	"bitrix:search.form",
	"flat",
	Array(
		"PAGE" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["search"]
	),
	$component
);?>
<br />
<?endif?>
<?if($arParams["USE_FILTER"]=="Y"):?>
<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.filter",
	"",
	Array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"FILTER_NAME" => $arParams["FILTER_NAME"],
		"FIELD_CODE" => $arParams["FILTER_FIELD_CODE"],
		"PROPERTY_CODE" => $arParams["FILTER_PROPERTY_CODE"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
	),
	$component
);
?>
<br />
<?endif?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"",
	Array(
		"IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
		"IBLOCK_ID" => $arParams["IBLOCK_ID"],
		"NEWS_COUNT" => $arParams["NEWS_COUNT"],
		"SORT_BY1" => $arParams["SORT_BY1"],
		"SORT_ORDER1" => $arParams["SORT_ORDER1"],
		"SORT_BY2" => $arParams["SORT_BY2"],
		"SORT_ORDER2" => $arParams["SORT_ORDER2"],
		"FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
		"PROPERTY_CODE" => $arParams["LIST_PROPERTY_CODE"],
		"DETAIL_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["detail"],
		"SECTION_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["section"],
		"IBLOCK_URL" => $arResult["FOLDER"].$arResult["URL_TEMPLATES"]["news"],
		"DISPLAY_PANEL" => $arParams["DISPLAY_PANEL"],
		"SET_TITLE" => $arParams["SET_TITLE"],
		"SET_LAST_MODIFIED" => $arParams["SET_LAST_MODIFIED"],
		"MESSAGE_404" => $arParams["MESSAGE_404"],
		"SET_STATUS_404" => $arParams["SET_STATUS_404"],
		"SHOW_404" => $arParams["SHOW_404"],
		"FILE_404" => $arParams["FILE_404"],
		"INCLUDE_IBLOCK_INTO_CHAIN" => $arParams["INCLUDE_IBLOCK_INTO_CHAIN"],
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"CACHE_FILTER" => $arParams["CACHE_FILTER"],
		"CACHE_GROUPS" => $arParams["CACHE_GROUPS"],
		"DISPLAY_TOP_PAGER" => $arParams["DISPLAY_TOP_PAGER"],
		"DISPLAY_BOTTOM_PAGER" => $arParams["DISPLAY_BOTTOM_PAGER"],
		"PAGER_TITLE" => $arParams["PAGER_TITLE"],
		"PAGER_TEMPLATE" => $arParams["PAGER_TEMPLATE"],
		"PAGER_SHOW_ALWAYS" => $arParams["PAGER_SHOW_ALWAYS"],
		"PAGER_DESC_NUMBERING" => $arParams["PAGER_DESC_NUMBERING"],
		"PAGER_DESC_NUMBERING_CACHE_TIME" => $arParams["PAGER_DESC_NUMBERING_CACHE_TIME"],
		"PAGER_SHOW_ALL" => $arParams["PAGER_SHOW_ALL"],
		"PAGER_BASE_LINK_ENABLE" => $arParams["PAGER_BASE_LINK_ENABLE"],
		"PAGER_BASE_LINK" => $arParams["PAGER_BASE_LINK"],
		"PAGER_PARAMS_NAME" => $arParams["PAGER_PARAMS_NAME"],
		"DISPLAY_DATE" => $arParams["DISPLAY_DATE"],
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => $arParams["DISPLAY_PICTURE"],
		"DISPLAY_PREVIEW_TEXT" => $arParams["DISPLAY_PREVIEW_TEXT"],
		"PREVIEW_TRUNCATE_LEN" => $arParams["PREVIEW_TRUNCATE_LEN"],
		"ACTIVE_DATE_FORMAT" => $arParams["LIST_ACTIVE_DATE_FORMAT"],
		"USE_PERMISSIONS" => $arParams["USE_PERMISSIONS"],
		"GROUP_PERMISSIONS" => $arParams["GROUP_PERMISSIONS"],
		"FILTER_NAME" => $arParams["FILTER_NAME"],
		"HIDE_LINK_WHEN_NO_DETAIL" => $arParams["HIDE_LINK_WHEN_NO_DETAIL"],
		"CHECK_DATES" => $arParams["CHECK_DATES"],
	),
	$component
);?>

  <div class="grid-container">
    <a class="press-center__view-more button button--inverted" href="press-center.html" data-target="view-more.button"
      data-action="view-more#load">Показать более ранние материалы</a>
  </div>
</section>








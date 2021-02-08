<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "For boys");
$APPLICATION->SetTitle("News");
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"bootstrap_v5", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "Y",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "#ID#",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"FIELD_CODE" => array(
			0 => "ID",
			1 => "",
		),
		"FILE_404" => "",
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "videos",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MEDIA_PROPERTY" => "FILE",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK" => "",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"PAGER_DESC_NUMBERING" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_PARAMS_NAME" => "arrPager",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "bootstrap_v4",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "2",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "DURATION",
			1 => "DESCRIPTION",
			2 => "",
		),
		"SEARCH_PAGE" => "/search/",
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_404" => "Y",
		"SLIDER_PROPERTY" => "",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"TEMPLATE_THEME" => "blue",
		"USE_RATING" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "bootstrap_v5"
	),
	false
);?>
<!--Вывод одного свойства-->
<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
  <?if($arProperty["CODE"]=="PROPERTYCODE"):?>
    <?=$arProperty["DISPLAY_VALUE"];?>,&nbsp;
  <?endif;?>
<?endforeach;?>
<!--показывать, если нет первого-->
<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
  <?if($arProperty["CODE"]=="PROPERTYFIRST" && is_array($arItem["DISPLAY_PROPERTIES"]["PROPERTYFIRST"])):?>
    <?=$arProperty["DISPLAY_VALUE"];?>
  <?elseif($arProperty["CODE"]=="PROPERTYSCND"):?>
    <?if(!is_array($arItem["DISPLAY_PROPERTIES"]["PROPERTYFIRST"])):?>
      <?=$arProperty["DISPLAY_VALUE"];?>
    <?endif;?>
  <?endif;?>
<?endforeach;?>
<!--показывать, если при добавлении не указано другое-->
<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
  <?if($arProperty["CODE"]=="PROPERTYSCND"):?>
    <?if(!is_array($arItem["DISPLAY_PROPERTIES"]["PROPERTYFIRST"])):?>
      <?=$arProperty["DISPLAY_VALUE"];?>
    <?endif;?>
  <?endif;?>
<?endforeach;?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
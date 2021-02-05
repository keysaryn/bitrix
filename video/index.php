<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Video");
?><?$APPLICATION->IncludeComponent(
	"bitrix:iblock.tv", 
	"video_template", 
	array(
		"ALLOW_SWF" => "Y",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "3600",
		"CACHE_TYPE" => "A",
		"DEFAULT_BIG_IMAGE" => "/bitrix/components/bitrix/iblock.tv/templates/.default/images/default_big.png",
		"DEFAULT_SMALL_IMAGE" => "/bitrix/components/bitrix/iblock.tv/templates/.default/images/default_small.png",
		"DURATION" => "13",
		"HEIGHT" => "300",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "videos",
		"LOGO" => "/bitrix/components/bitrix/iblock.tv/templates/.default/images/logo.png",
		"PATH_TO_FILE" => "11",
		"SECTION_ID" => "",
		"SHOW_COUNTER_EVENT" => "Y",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"STAT_EVENT" => "Y",
		"STAT_EVENT1" => "player",
		"STAT_EVENT2" => "start_playing",
		"WIDTH" => "400",
		"COMPONENT_TEMPLATE" => "video_template"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
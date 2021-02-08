<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "For boys");
$APPLICATION->SetTitle("News");
?>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "bootstrap_v5", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "Y",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "Y",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "Y",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "ID",
			1 => "",
		),
		"FILE_404" => "",	// Страница для показа (по умолчанию /404.php)
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "Y",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "2",	// Код информационного блока
		"IBLOCK_TYPE" => "videos",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MEDIA_PROPERTY" => "",	// Свойство для отображения медиа
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK" => "",	// Url для построения ссылок (по умолчанию - автоматически)
		"PAGER_BASE_LINK_ENABLE" => "Y",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "Y",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_PARAMS_NAME" => "arrPager",	// Имя массива с переменными для построения ссылок
		"PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "Y",	// Выводить всегда
		"PAGER_TEMPLATE" => "",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "2",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "DESCRIPTION",
			2 => "",
		),
		"SEARCH_PAGE" => "/search/",	// Путь к странице поиска
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "Y",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "Y",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "Y",	// Показ специальной страницы
		"SLIDER_PROPERTY" => "",	// Свойство с изображениями для слайдера
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"USE_RATING" => "N",	// Разрешить голосование
		"USE_SHARE" => "N",	// Отображать панель соц. закладок
		"COMPONENT_TEMPLATE" => "bootstrap_v4"
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
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");


?><p>
	 <?$APPLICATION->IncludeComponent("bitrix:blog", "one_blog1", Array(
	"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_POST" => "Y",
		"BLOG_COUNT" => "20",	// Количество блогов, выводимых на страницу
		"BLOG_COUNT_MAIN" => "6",	// Количество блогов, выводимых на главной странице блогов
		"BLOG_PROPERTY" => "",	// Показывать свойства в блоге
		"BLOG_PROPERTY_LIST" => "",	// Показывать пользовательские свойства блога в информации о блоге
		"BLOG_URL" => "admin-blog-s1",	// Символическое имя блога
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TIME_LONG" => "60480000",	// Время кеширования остальных страниц
		"CACHE_TYPE" => "A",	// Тип кеширования
		"COMMENTS_COUNT" => "25",	// Количество комментариев к сообщению на странице
		"COMMENT_ALLOW_IMAGE_UPLOAD" => "A",	// Разрешить загрузку изображений в комментариях
		"COMMENT_ALLOW_VIDEO" => "N",	// Разрешить вставку видео в комментарии
		"DATE_TIME_FORMAT" => "d.m.Y H:i:s",	// Формат показа даты и времени
		"DO_NOT_SHOW_MENU" => "Y",	// Не показывать верхнее меню блога
		"DO_NOT_SHOW_SIDEBAR" => "Y",	// Не показывать правую колонку блога
		"MESSAGE_COUNT" => "10",	// Количество сообщений, выводимых на страницу
		"MESSAGE_COUNT_MAIN" => "6",	// Количество сообщений, выводимых на главной странице блогов
		"MESSAGE_LENGTH" => "100",	// Длина выводимых сообщений на главной странице блогов (символов)
		"NAME_TEMPLATE" => "",	// Отображение имени
		"NAV_TEMPLATE" => "arrows",	// Имя шаблона для постраничной навигации
		"NOT_USE_COMMENT_TITLE" => "Y",	// Не использовать тему для комментариев
		"PATH_TO_SMILE" => "/bitrix/images/blog/smile/",	// Путь к папке со смайликам относительно корня сайта
		"PERIOD_DAYS" => "30",	// Количество дней для выбора популярных сообщений и блогов
		"POST_PROPERTY" => "",	// Показывать пользовательские свойства сообщения
		"POST_PROPERTY_LIST" => "",	// Показывать пользовательские свойства сообщения в блоге
		"SEF_FOLDER" => "/",	// Каталог ЧПУ (относительно корня сайта)
		"SEF_MODE" => "Y",	// Включить поддержку ЧПУ
		"SET_NAV_CHAIN" => "N",	// Добавлять блог в цепочку навигации
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_LOGIN" => "Y",	// Показывать логин, если не задано имя
		"THEME" => "blue",	// Тема шаблона
		"USER_PROPERTY" => "",	// Показывать доп. свойства в профиле
		"USER_PROPERTY_NAME" => "",	// Название закладки с доп. свойствами
		"USE_ASC_PAGING" => "N",	// Использовать прямую постраничную навигацию для комментариев
		"COMPONENT_TEMPLATE" => "one_blog",
		"SMILES_COUNT" => "4",	// Количество постоянно отображаемых смайлов
		"IMAGE_MAX_WIDTH" => "600",	// Максимальная ширина изображения (по умолчанию 600)
		"IMAGE_MAX_HEIGHT" => "600",	// Максимальная высота изображения (по умолчанию 600)
		"EDITOR_RESIZABLE" => "Y",	// Разрешить изменять размер визуального редактора
		"EDITOR_DEFAULT_HEIGHT" => "300",	// Высота визуального редактора по умолчанию (пикселей)
		"EDITOR_CODE_DEFAULT" => "N",	// По умолчанию показывать невизуальный режим редактора
		"USER_CONSENT" => "N",	// Запрашивать согласие
		"USER_CONSENT_ID" => "0",	// Соглашение
		"USER_CONSENT_IS_CHECKED" => "Y",	// Галка по умолчанию проставлена
		"USER_CONSENT_IS_LOADED" => "N",	// Загружать текст сразу
		"SEO_USE" => "Y",	// Использование SEO
		"COMMENT_PROPERTY" => "",	// Показывать пользовательские свойства комментария
		"SHOW_RATING" => "",	// Включить рейтинг
		"RATING_TYPE" => "",	// Вид кнопок рейтинга
		"ALLOW_POST_CODE" => "Y",	// Использовать символьный код сообщений как идентификатор
		"USE_GOOGLE_CODE" => "Y",	// Использовать внешний сервис для перевода кода сообщений
		"USE_SHARE" => "N",	// Отображать панель соц. закладок
		"COMMENTS_LIST_VIEW" => "N",	// Выводить комментарии плоским списком
		"AJAX_PAGINATION" => "N",	// Использовать AJAX для постраничной навигации в комментариях
		"COMMENT_EDITOR_RESIZABLE" => "Y",	// Разрешить изменять размер визуального редактора в комментариях
		"COMMENT_EDITOR_DEFAULT_HEIGHT" => "200",	// Высота визуального редактора по умолчанию (пикселей) в комментариях
		"COMMENT_EDITOR_CODE_DEFAULT" => "N",	// По умолчанию показывать невизуальный режим редактора в комментариях
		"SHOW_SPAM" => "N",	// Показывать администраторам ссылку на все комментарии пользователя
		"NO_URL_IN_COMMENTS" => "",	// Запретить вставку ссылок в комментариях
		"NO_URL_IN_COMMENTS_AUTHORITY" => "",	// Минимальный авторитет, с которым пользователи могут вставлять ссылки в комментариях
		"GROUP_ID" => array(
			0 => "",
			1 => "",
		),
		"SHOW_NAVIGATION" => "Y",
		"PERIOD_NEW_TAGS" => "",
		"PERIOD" => "",
		"COLOR_TYPE" => "Y",
		"WIDTH" => "100%",
		"SEO_USER" => "N",
		"ALLOW_POST_MOVE" => "N",
		"SEF_URL_TEMPLATES" => array(
			"index_" => "index.php",
			"group" => "group/#group_id#.php",
			"blog" => "",
			"user" => "user/#user_id#.php",
			"user_friends" => "friends/#user_id#.php",
			"search" => "search.php",
			"user_settings" => "#blog#/user_settings.php",
			"user_settings_edit" => "#blog#/user_settings_edit.php?id=#user_id#",
			"group_edit" => "#blog#/group_edit.php",
			"blog_edit" => "blog_edit/",
			"category_edit" => "#blog#/category_edit.php",
			"post_edit" => "edit/#post_id#/",
			"draft" => "draft/",
			"moderation" => "moderation/",
			"trackback" => POST_FORM_ACTION_URI."&blog=#blog#&id=#post_id#&page=trackback",
			"post" => "#post_id#/",
			"post_rss" => "rss/#post_id#",
			"rss" => "rss/",
			"rss_all" => "rss2/",
		),
		"VARIABLE_ALIASES" => array(
			"user_settings_edit" => array(
				"user_id" => "id",
			),
			"trackback" => array(
				"blog" => "blog",
				"post_id" => "id",
			),
		)
	),
	false
);?>
</p>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
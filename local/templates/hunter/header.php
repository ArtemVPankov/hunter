<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Page\Asset;

?>

    <?$APPLICATION->ShowHead();?>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?$APPLICATION->ShowTitle();?></title>

    <?php Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/css/bootstrap-grid.css') ?>
    <?php Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/css/styles.css?v=' . date('YmdHis')) ?>
    <?php Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/css/slick.css') ?>
    <?php Asset::getInstance()->addCss( SITE_TEMPLATE_PATH . '/css/slick-theme.css') ?>

    <?php Asset::getInstance()->addJs( SITE_TEMPLATE_PATH . '/js/scripts.js?v=' . date('YmdHis')) ?>
    <?php Asset::getInstance()->addJs( SITE_TEMPLATE_PATH . '/js/jquery.js') ?>
    <?php Asset::getInstance()->addJs( SITE_TEMPLATE_PATH . '/js/slick.js') ?>

</head>
<body class="body">
<div id="panel">
    <?$APPLICATION->ShowPanel();?>
</div>

<div class="top-panel">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 left-block">
                <div class="lang-switch">
                    <a href="#!">English</a>
                </div>
                <div class="currency">
                    <a href="#!">&#36;</a>
                    <a href="#!">&euro;</a>
                    <a href="#!">&pound;</a>
                </div>
            </div>

            <div class="col-xs-12 col-sm-6 right-block justify-content-end">
                <div class="top-nav">

                    <?$APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "top_panel_nav",
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "left",
                            "USE_EXT" => "N"
                        )
                    );?>

                </div>
                <div class="my-account">
                    <a href="#!">
                        <span>
                             My account
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<header class="site-header">
    <div class="container-fluid logo-block">
        <div class="container">
            <div class="row no-gutters">
                <a href="/" class="logo">
                    <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "inc",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => SITE_TEMPLATE_PATH . "/includes/logo.php",
                            ]
                    ) ?>
                </a>
                <div class="search-form">
                    <form action="" class="form" action="back.php" mathod="get">
                        <fieldset class="fieldset">
                            <input type="text" name="search" class="text-input" placeholder="Поиск...">

                            <input type="submit" class="btn" value="">

                        </fieldset>
                    </form>
                </div>
                <div class="contacts">
                    <span class="tel">
                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            [
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_TEMPLATE_PATH . "/includes/phone_number.php",
                            ]
                        ) ?>
                    </span>
                    <a href="#!" class="request-call">Request call</a>
                </div>
                <div class="mini-cart">
                    <a href="#!">
                        <span>Cart is empty</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?$APPLICATION->IncludeComponent("bitrix:menu", "main_nav", Array(
	    "ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "top",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>

</header>

<main class="site-main">
    <?$APPLICATION->IncludeComponent(
        "bitrix:breadcrumb",
        "",
        Array(),
        false
    );?>

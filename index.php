<?php
//
// PHASE: BOOTSTRAP
//
define('ebny_INSTALL_PATH', dirname(__FILE__));
define('ebny_SITE_PATH', ebny_INSTALL_PATH . '/site');

require(ebny_INSTALL_PATH.'/src/CEbny/bootstrap.php');

$eb = CEbny::Instance();

//
// PHASE: FRONTCONTROLLER ROUTE
//
$eb->FrontControllerRoute();


//
// PHASE: THEME ENGINE RENDER
//
$eb->ThemeEngineRender();


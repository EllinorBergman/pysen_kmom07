<?php
/**
 * All requests routed through here. This is an overview of what actaully happens during
 * a request.
 *
 * @package PysenCore
 */

// ---------------------------------------------------------------------------------------
//
// PHASE: BOOTSTRAP
//
define('PYSEN_INSTALL_PATH', dirname(__FILE__));
define('PYSEN_SITE_PATH', PYSEN_INSTALL_PATH . '/site');

require(PYSEN_INSTALL_PATH.'/src/bootstrap.php');

$py = CPysen::Instance();


// ---------------------------------------------------------------------------------------
//
// PHASE: FRONTCONTROLLER ROUTE
//
$py->FrontControllerRoute();


// ---------------------------------------------------------------------------------------
//
// PHASE: THEME ENGINE RENDER
//
$py->ThemeEngineRender();

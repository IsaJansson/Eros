<?php
error_reporting(-1);
ini_set('display_errors', 1);
ini_set('output_buffering', 0);

/*definera sökväg*/
define('EROS_INSTALL_PATH', __DIR__ . '/..');
define('EROS_THEME_PATH', EROS_INSTALL_PATH . '/theme/render.php');

/* inkludera bootstrap-funktionen */
include(EROS_INSTALL_PATH . '/src/bootstrap.php');

/* starta en session */
session_name(preg_replace('/[:\.\/-_]/', '', __DIR__));
session_start();

/* skapa Eros variabeln */
$eros = array();

/* inställningar för sidan */
$eros['lang']	='sv';
$eros['title_append'] = ' | Eros en webbtemplate';

/* Tema relaterade inställningar */
$eros['stylesheets'] = array('css/style.css');
$eros['favicon'] = 'favicon.ico';

/* settings for javasqrip */
$eros['modernizer'] = 'js/modernizer.js';
$eros['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$anax['jquery'] = null; // To disable jQuery

/** Google analytics. */

$eros['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google analytics
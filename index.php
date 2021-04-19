<?php
error_reporting(-1);
ini_set('display_errors', 1);
session_start();

define('MODULES_DIR', 'modules'.DIRECTORY_SEPARATOR);
define('LIB_DIR', 'lib'.DIRECTORY_SEPARATOR);
define('APL_DIR', 'apl'.DIRECTORY_SEPARATOR);

require_once "config.php";
require_once "db_config.php";
require_once LIB_DIR."classes/db.class.php";
require_once("smarty_lib/libs/Smarty.class.php");

DB::$user = DB_USER;
DB::$password = DB_PASS;
DB::$dbName = DB_NAME;
DB::$encoding = DB_ENCODING;

$smarty = new Smarty();

$smarty->setTemplateDir('templates/');
$smarty->setCompileDir('templates_c/');
$smarty->setConfigDir('configs/');
$smarty->setCacheDir('cache/');

$pageModul = ( isset($_GET["page"]) ) ? filter_var($_GET["page"], FILTER_SANITIZE_STRING) : "home" ;

if (file_exists( MODULES_DIR . $pageModul.".php")) {
	include MODULES_DIR . $pageModul.".php";
}
else{
	include MODULES_DIR . "home.php";
}


$smarty->display($tpl.'.tpl');
?>

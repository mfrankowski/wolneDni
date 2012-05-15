<?php

require('functions.php');
require('./smarty/Smarty.class.php');

session_start();

$functions = new Functions();

foreach($_COOKIE as $key => $value) { $_COOKIE[$key] = clear($value); }
foreach($_GET as $key => $value) { $_GET[$key] = clear($value); }
foreach($_POST as $key => $value) { $_POST[$key] = clear($value); }
foreach($_SESSION as $key => $value) { $_SESSION[$key] = @clear($value); }

 
$tpl = new Smarty;
$tpl -> template_dir = './templates/';
$tpl -> compile_dir = './templates_c/';

$tpl -> display('header.tpl');

$module = $_GET['module'];

if(file_exists('class/'.$module.'.php')) {
	require_once 'class/'.$module.'.php';
	$module = new $module;
	$module->load_module();
} 

/* do dopisania glowna strona
   else {
	include 'modules/main.php';
	$module = new Main;
	$module->main();
}
*/



if(islogged() == 1) $tpl->assign('logged', 1);
$tpl -> display('footer.tpl');

?>

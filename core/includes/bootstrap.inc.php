<?php

	
// Load site Config 
define('CONFIG', ROOT . '/server/default/config.php');
require_once CONFIG;

$inc = array("database" , "function");

foreach ($inc as $value) {
    require_once($value . '.inc.php');
}


// input patch from other modules or other things and uotpout relative efect 

  $base_url = url();
  $parts = parse_url($base_url);
  $main_url = substr($base_url, 0, strlen($base_url) - strlen($parts['path']));
  $request_path = request_uri(TRUE);
  $base_path_len = strlen(rtrim(dirname($_SERVER['SCRIPT_NAME']), '\/'));
  $path = substr(urldecode($request_path), $base_path_len + 1);
  $base_url_dir = substr($base_url, 0, strlen($base_url) - strlen($path));
  $theme_folder = '/main/style/' . "$theme[site]";
  $theme_patch= "$base_url_dir" . "$theme_folder";


$module_folder = '/core/modules';

$modules_enabled = array("pages", "menu");
/* find all include file of enabled modules */
foreach($modules_enabled as $key => $value){ 
    require_once($module_folder . '/'. $value . '/' . $value . '.module.php');
}


require_once ROOT . $module_folder . '/pages/pages.module.php';
require_once ROOT . $theme_folder . '/template/pages.tpl.php';

?>

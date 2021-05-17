<?php
define('SMARTY_DIR', '../../../Smarty/smarty-3.1.39/libs/');

require_once(SMARTY_DIR . 'Smarty.class.php');

echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6' crossorigin='anonymous'>";

$smarty = new Smarty();
$dir = "C:/laragon/www/Formation/PHP/exercice/smarty/GTA_v3/smarty/";
$smarty->template_dir = "$dir"."templates/";
$smarty->compile_dir = "$dir"."templates_c/";
$smarty->config_dir = "$dir"."configs/";
$smarty->cache_dir = "$dir"."cache/";

?>
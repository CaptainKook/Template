<?php
// Style Windows
session_start();

include 'basics.php';

$smarty->assign('_SESSION',$_SESSION);


$smarty->display('index.tpl');



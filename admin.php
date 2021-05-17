<?php
  session_start();
  require_once "class/db.php";
  require_once "class/user.php";
  require_once 'config.php';

  include 'basics.php';

  if(!isset($_SESSION["user"])){
    header("location:login.php?fail=true");   
  }

  if(isset($_POST['saveUpdate'])){
    $edit = user::editUser($_POST['id'],$_POST['pseudo'],$_POST['mail']);
    
      $smarty->assign('edit',$edit->rowCount());
  }
  
  if(isset($_POST['remove'])){
    database::removeUser($_POST['id']);
  }
  $smarty->assign('_SESSION',$_SESSION);

  $smarty->assign('_POST',$_POST);
  $smarty->assign('_GET',$_GET);
  $smarty->assign('users',user::getAll());

  $smarty->display('admin.tpl');

?>
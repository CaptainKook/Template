<?php
    session_start();
    require_once "class/db.php";
    require_once "class/user.php";
    require_once 'config.php';
  
    include 'basics.php';

    if(isset($_POST['signin'])){
      $errors = user::check($_POST);
      if(empty($errors)){
        $signin = database::createUser($_POST);
        if ($signin->rowCount()>0){
          $smarty->assign('new_account',$_POST);
          unset($_POST['show_signin']);
        }else{
          $smarty->assign('fail_creat',"hop");
        }
      }
    }
    if(isset($_POST['login'])){
      if(empty($_POST['identifiant']) or empty($_POST['mdp'])){
        header("location:login.php");
      }else{
        $auth = database::authUser($_POST['identifiant'],$_POST['mdp']);
        if (!empty($auth)){
            $_SESSION['user']=$auth;
        }else{
          if(!isset($_SESSION["fail"])){
            $_SESSION["fail"] = 0;
          }
          $_SESSION["fail"] ++;
          $smarty->assign('fail_connect',true);
        }
      }
    }

    if(isset($_POST['logout'])){  
      unset($_SESSION["user"]);
      header("location:index.php");
    }
  
$smarty->assign('_SESSION',$_SESSION);

$smarty->assign('_POST',$_POST);
$smarty->assign('_GET',$_GET);
if (!empty ($errors)) {
  $smarty->assign('errors',$errors);
}
$smarty->display('login.tpl');
?>


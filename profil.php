<?php
    session_start();

    include 'basics.php';

    if(isset($_POST['logout'])){
      
      unset($_SESSION["user"]);
      header("location:login.php");
    }
    $smarty->assign('_SESSION',$_SESSION);
    
    $smarty->display('profil.tpl');
?>
    

    
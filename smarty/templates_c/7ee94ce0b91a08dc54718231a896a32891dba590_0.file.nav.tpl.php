<?php
/* Smarty version 3.1.39, created on 2021-05-12 10:09:27
  from 'C:\laragon\www\Formation\PHP\exercice\smarty\GTA_v3\smarty\templates\nav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_609ba9570239c3_42697310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ee94ce0b91a08dc54718231a896a32891dba590' => 
    array (
      0 => 'C:\\laragon\\www\\Formation\\PHP\\exercice\\smarty\\GTA_v3\\smarty\\templates\\nav.tpl',
      1 => 1620814165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609ba9570239c3_42697310 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="navbar navbar-dark bg-dark navbar-expand-sm">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="images/top-logo.png" alt="ONE MILLION LINES "></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#who">Who we are</a>
            </li>
            <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['user']))) {?>
                <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['user']['grade'] == "admin") {?>
                    <li class='nav-item'><a class='nav-link' href='admin.php'> Administration </a></li>
                <?php }?>
                    <li class='nav-item'><a class='nav-link' href='profil.php'><?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['user']['pseudo'];?>
</a><li>
               
            <?php } else { ?>
                <li class='nav-item'><a class='nav-link' href='login.php'>Connexion</a></li>
            <?php }?>
            </ul>
        </div>
    </div>
</nav><?php }
}

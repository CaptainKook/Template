<?php
/* Smarty version 3.1.39, created on 2021-05-17 07:21:54
  from 'C:\laragon\www\Formation\PHP\exercice\smarty\GTA_v3\smarty\templates\profil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a2199253d050_48740453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c07f1077e6175fc0a614eff4f642ab27ce5120b9' => 
    array (
      0 => 'C:\\laragon\\www\\Formation\\PHP\\exercice\\smarty\\GTA_v3\\smarty\\templates\\profil.tpl',
      1 => 1621236112,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a2199253d050_48740453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_184052824860a21992535286_98947797', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_184052824860a21992535286_98947797 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_184052824860a21992535286_98947797',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class ="container-fluid text-center">
    <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value["user"]))) {?>
      <br>Pseudo : <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value["user"]["pseudo"];?>

      <br>Identifiant : <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value["user"]["identifiant"];?>

      <?php if (!empty($_smarty_tpl->tpl_vars['_SESSION']->value["user"]["mail"])) {?>
         <br>E-Mail : <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value["user"]["mail"];?>

      <?php }?>
      <form method="post" name = "logout">
        <button type="submit" class="btn btn-primary mt-3" name = "logout">Déconnexion</button>
      </form>
    <?php } else { ?>
      Vous etes déconnectez !
    <?php }?>
    </div>
</div>
<?php
}
}
/* {/block 'body'} */
}

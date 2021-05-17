<?php
/* Smarty version 3.1.39, created on 2021-05-17 08:02:11
  from 'C:\laragon\www\Formation\PHP\exercice\smarty\GTA_v3\smarty\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a223035852e3_25506764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0804642b367b95590a723ff383f6ed8723b1b356' => 
    array (
      0 => 'C:\\laragon\\www\\Formation\\PHP\\exercice\\smarty\\GTA_v3\\smarty\\templates\\admin.tpl',
      1 => 1621238529,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a223035852e3_25506764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122351911160a22303576c28_44716300', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_122351911160a22303576c28_44716300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_122351911160a22303576c28_44716300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="main container-fluid text-center">
    <h1>Administration</h1>
        <?php if ((isset($_smarty_tpl->tpl_vars['_POST']->value['saveUpdate']))) {?>
          <?php if (!empty($_smarty_tpl->tpl_vars['edit']->value)) {?>
            Modification enregistré
          <?php } else { ?>
            Modification échoué
          <?php }?>
        
        <?php }?>
        <div class="no-wrap">
          <?php if ((isset($_smarty_tpl->tpl_vars['_POST']->value['update'])) && (isset($_smarty_tpl->tpl_vars['_POST']->value['key']))) {?>
            <form method='post'>
            <?php $_smarty_tpl->_assignInScope('key', $_smarty_tpl->tpl_vars['_POST']->value['key']);?>
              <input type='hidden' value=<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->tpl_vars['key']->value]->id;?>
 name = 'id'>
              <div class="">
                <label for="pseudo">Pseudo</label><br>
                <input class="text-center" name="pseudo" value="<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->tpl_vars['key']->value]->pseudo;?>
">
              </div>
              <div class="">
                <label for="mail">Mail</label><br>
                <input type="text" class="text-center" name="mail" value ="<?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->tpl_vars['key']->value]->mail;?>
">
              </div>
              <input type='submit' class ='bg-secondary rounded border m-3' value='enregistrer' name = 'saveUpdate'>
            </form>
          <?php }?>
        </div>
      <div class="d-flex flex-wrap justify-content-around ">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user', false, 'k');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
          <div class ="border rounder m-2 p-4 ">
            <br><?php echo $_smarty_tpl->tpl_vars['user']->value->pseudo;?>
 
            <i class='fas fa-pencil-alt fa-2x'></i>
            
            <form method='post'>
            
                <input type='hidden' value=<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
 name = 'id'>
                <input type='submit' class ='bg-secondary border rounded' value='supprimer' name = 'remove'>
            </form>
            
            <form method='post'>
                <input type='hidden' value=<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 name = 'key'>
                <input type='submit' class ='bg-secondary border rounded' value='modifier' name = 'update'>
            </form>
            
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
  </div>
<?php
}
}
/* {/block 'body'} */
}

<?php
/* Smarty version 3.1.39, created on 2021-05-17 12:40:21
  from 'C:\laragon\www\Formation\PHP\exercice\smarty\GTA_v3\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a26435940c14_88221947',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c89a6289d1f6bc17d50210d7e9c877c69a4e59f8' => 
    array (
      0 => 'C:\\laragon\\www\\Formation\\PHP\\exercice\\smarty\\GTA_v3\\smarty\\templates\\index.tpl',
      1 => 1621255220,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a26435940c14_88221947 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48225741860a26435940358_28141815', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_48225741860a26435940358_28141815 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_48225741860a26435940358_28141815',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 class ="mt-3">Lorem Ipsum</h1>
    <P>"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit..." </p>
    <P>"There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain..."</p>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porta in risus ut ultrices. Sed iaculis, lacus sed tempus cursus, orci tortor tempor dui, vel scelerisque elit odio imperdiet nibh. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In ac viverra nulla. Pellentesque feugiat vehicula dapibus. Ut sed convallis nunc. Vestibulum aliquet gravida nisi ac tincidunt. Etiam volutpat urna lobortis auctor commodo.</p>
    <p>Donec a nisi ac mauris mattis fermentum in eu arcu. Suspendisse quis ullamcorper massa. Pellentesque lacinia, quam a viverra hendrerit, nibh quam rutrum dolor, iaculis aliquam leo orci a mi. Aliquam erat volutpat. Cras vel turpis eu velit ultricies vehicula nec in leo. Praesent ut erat orci. Integer nisi nunc, maximus id justo bibendum, sodales suscipit tellus. Curabitur mauris ex, luctus et fermentum et, pellentesque nec nisl. Duis ut dignissim lectus, sit amet gravida magna. In ornare blandit leo, non aliquet lectus vulputate eu. Morbi aliquet velit risus, vel ultricies ante varius ut.</p>

<?php
}
}
/* {/block 'body'} */
}

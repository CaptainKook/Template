<?php
/* Smarty version 3.1.39, created on 2021-05-17 12:37:12
  from 'C:\laragon\www\Formation\PHP\exercice\smarty\GTA_v3\smarty\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60a26378436db7_12702477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4df05c51b20b74b13a598b6098a108bd5b2f92c' => 
    array (
      0 => 'C:\\laragon\\www\\Formation\\PHP\\exercice\\smarty\\GTA_v3\\smarty\\templates\\login.tpl',
      1 => 1621255029,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60a26378436db7_12702477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148586929060a2637841df00_48473525', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_148586929060a2637841df00_48473525 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_148586929060a2637841df00_48473525',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="main container-fluid text-center">
      <?php if (!empty($_smarty_tpl->tpl_vars['errors']->value) && !(isset($_smarty_tpl->tpl_vars['_POST']->value['show_signin']))) {?>
        <div class = "error bg-danger rounded border pt-3">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
            <p><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</p>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
      <?php }?>

      
      <?php if (!empty($_smarty_tpl->tpl_vars['new_account']->value)) {?>
        Bienvenu <?php echo $_smarty_tpl->tpl_vars['new_account']->value['pseudo'];?>
<br> 
        Votre compte a été crée avec succes ! <br>
        Votre identifiant : <?php echo $_smarty_tpl->tpl_vars['new_account']->value['identifiant'];?>

      <?php }?>

      <?php if (!empty($_smarty_tpl->tpl_vars['fail_creat']->value)) {?>
        Echec de création du compte, Pseudo ou Identifiant déja utilisé !
      <?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['fail_connect']->value))) {?>
        Connexion echouée, identifiant et/ou mot de passe incorrect !
      <?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value["user"]))) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['_POST']->value['logout']))) {?>
            Déconnexion
        <?php } else { ?>
            <p class="mt-3"> Vous etes déja connecté !</p>
            <form method="post" name = "logout" action="login.php" class ="col-2 offset-5 mt-3" >
            <button type="submit" class="btn btn-primary" name = "logout">Déconnexion</button>
            </form>
        <?php }?>
      <?php }?>
      <?php if ((isset($_smarty_tpl->tpl_vars['_POST']->value['show_signin'])) || (isset($_smarty_tpl->tpl_vars['_POST']->value['signin'])) && empty($_smarty_tpl->tpl_vars['new_account']->value)) {?>
        <form method="post">
          <div class="form-group m-2">
            <label for="pseudo">Pseudo (5 caracteres minimum)</label>
            <input type="text" name="pseudo" class="form-control" id="pseudo"  <?php if (!empty($_smarty_tpl->tpl_vars['_POST']->value["pseudo"])) {?> value='<?php echo $_smarty_tpl->tpl_vars['_POST']->value['pseudo'];?>
'<?php }?> aria-describedby="Pseudo" placeholder="Pseudo d'affichage">
          </div>
          <div class="form-group m-2">
            <label for="identifiant">Identifiant de connexion (5 caracteres minimum)</label>
            <input type="text" name="identifiant" class="form-control" id="identifiant" aria-describedby="Identifiant"
            <?php if (!empty($_smarty_tpl->tpl_vars['_POST']->value["identifiant"])) {?> value='<?php echo $_smarty_tpl->tpl_vars['_POST']->value['identifiant'];?>
' <?php } else { ?> placeholder='Identifiant'<?php }?> >
          </div>
          <div class="form-group m-2">
            <label for="exampleInputPassword1">Mot de passe (5 caracteres minimum)</label>
            <input type="password" name = "mdp" class="form-control" id="exampleInputPassword1"
            <?php if (!empty($_smarty_tpl->tpl_vars['_POST']->value["mdp"])) {?> value='<?php echo $_smarty_tpl->tpl_vars['_POST']->value['mdp'];?>
' <?php } else { ?> placeholder='Mot de passe'<?php }?> >
          </div>
          <div class="form-group m-2">
            <label for="exampleInputPassword1">Mot de passe (vérification)</label>
            <input type="password" name = "mdp2" class="form-control" id="exampleInputPassword2" 
          <?php if (!empty($_smarty_tpl->tpl_vars['_POST']->value["mdp2"])) {?> value='<?php echo $_smarty_tpl->tpl_vars['_POST']->value['mdp2'];?>
' <?php } else { ?> placeholder='Mot de passe'<?php }?> >
          </div>
          <button type="submit" class="btn btn-primary" name = "signin">Valider</button>
        </form>
      <?php }?>
      <?php if (!(isset($_smarty_tpl->tpl_vars['_SESSION']->value["user"])) && !(isset($_smarty_tpl->tpl_vars['_POST']->value["signin"])) && !(isset($_smarty_tpl->tpl_vars['_POST']->value["show_signin"])) || ((isset($_smarty_tpl->tpl_vars['_POST']->value["signin"])) && !empty($_smarty_tpl->tpl_vars['new_account']->value))) {?>
        
        <div class ="col-8 offset-2">
          <form method="post">
            <div class="form-group m-2">
              <label for="identifiant">Identifiant</label>
              <input type="text" name="identifiant" class="form-control" id="identifiant" aria-describedby="Identifiant" placeholder="Identifiant"
              <?php if (!empty($_smarty_tpl->tpl_vars['new_account']->value)) {?> value ="<?php echo $_smarty_tpl->tpl_vars['new_account']->value['identifiant'];?>
"<?php }?>>
            </div>
            <div class="form-group m-2">
              <label for="exampleInputPassword1">Mot de passe</label>
              <input type="password" name = "mdp" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe"
              <?php if (!empty($_smarty_tpl->tpl_vars['new_account']->value)) {?> value ="<?php echo $_smarty_tpl->tpl_vars['new_account']->value['mdp'];?>
"<?php }?>>
            </div>
            <div class="m-2">
              <input type="checkbox" name ="stayOn" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Rester conncecté</label>
            </div>
            <button type="submit" class="btn btn-primary" name = "login">Connexion</button>
            <button type="submit" class="btn btn-primary" name = "show_signin">Inscription</button>
          </form>
        </div>
      <?php }?>

      
      <?php if ((isset($_smarty_tpl->tpl_vars['fail_connect']->value))) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value["fail"]))) {?>
          <br>Tentative de connexion : <?php echo $_smarty_tpl->tpl_vars['_SESSION']->value["fail"];?>

        <?php }?>
      <?php }?>

  </div>
<?php
}
}
/* {/block 'body'} */
}

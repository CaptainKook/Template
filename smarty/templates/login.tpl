{extends file="layout.tpl"}
{block name=body}
    <div class="main container-fluid text-center">
      {if !empty($errors) && !isset($_POST['show_signin'])}
        <div class = "error bg-danger rounded border pt-3">
          {foreach $errors as $value}
            <p>{$value}</p>
          {/foreach}
        </div>
      {/if}

      
      {if !empty($new_account)}
        Bienvenu {$new_account['pseudo']}<br> 
        Votre compte a été crée avec succes ! <br>
        Votre identifiant : {$new_account['identifiant']}
      {/if}

      {if !empty($fail_creat)}
        Echec de création du compte, Pseudo ou Identifiant déja utilisé !
      {/if}

      {if isset($fail_connect)}
        Connexion echouée, identifiant et/ou mot de passe incorrect !
      {/if}

      {if isset($_SESSION["user"])}
        {if isset($_POST['logout'])}
            Déconnexion
        {else}
            <p class="mt-3"> Vous etes déja connecté !</p>
            <form method="post" name = "logout" action="login.php" class ="col-2 offset-5 mt-3" >
            <button type="submit" class="btn btn-primary" name = "logout">Déconnexion</button>
            </form>
        {/if}
      {/if}
      {if isset($_POST['show_signin']) or isset($_POST['signin']) and empty($new_account)}
        <form method="post">
          <div class="form-group m-2">
            <label for="pseudo">Pseudo (5 caracteres minimum)</label>
            <input type="text" name="pseudo" class="form-control" id="pseudo"  {if !empty($_POST["pseudo"])} value='{$_POST['pseudo']}'{/if} aria-describedby="Pseudo" placeholder="Pseudo d'affichage">
          </div>
          <div class="form-group m-2">
            <label for="identifiant">Identifiant de connexion (5 caracteres minimum)</label>
            <input type="text" name="identifiant" class="form-control" id="identifiant" aria-describedby="Identifiant"
            {if !empty($_POST["identifiant"])} value='{$_POST['identifiant']}' {else} placeholder='Identifiant'{/if} >
          </div>
          <div class="form-group m-2">
            <label for="exampleInputPassword1">Mot de passe (5 caracteres minimum)</label>
            <input type="password" name = "mdp" class="form-control" id="exampleInputPassword1"
            {if !empty($_POST["mdp"])} value='{$_POST['mdp']}' {else} placeholder='Mot de passe'{/if} >
          </div>
          <div class="form-group m-2">
            <label for="exampleInputPassword1">Mot de passe (vérification)</label>
            <input type="password" name = "mdp2" class="form-control" id="exampleInputPassword2" 
          {if !empty($_POST["mdp2"])} value='{$_POST['mdp2']}' {else} placeholder='Mot de passe'{/if} >
          </div>
          <button type="submit" class="btn btn-primary" name = "signin">Valider</button>
        </form>
      {/if}
      {if !isset($_SESSION["user"]) and !isset($_POST["signin"]) and !isset($_POST["show_signin" ]) or (isset($_POST["signin"]) and !empty($new_account))}
        
        <div class ="col-8 offset-2">
          <form method="post">
            <div class="form-group m-2">
              <label for="identifiant">Identifiant</label>
              <input type="text" name="identifiant" class="form-control" id="identifiant" aria-describedby="Identifiant" placeholder="Identifiant"
              {if !empty($new_account)} value ="{$new_account['identifiant']}"{/if}>
            </div>
            <div class="form-group m-2">
              <label for="exampleInputPassword1">Mot de passe</label>
              <input type="password" name = "mdp" class="form-control" id="exampleInputPassword1" placeholder="Mot de passe"
              {if !empty($new_account)} value ="{$new_account['mdp']}"{/if}>
            </div>
            <div class="m-2">
              <input type="checkbox" name ="stayOn" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Rester conncecté</label>
            </div>
            <button type="submit" class="btn btn-primary" name = "login">Connexion</button>
            <button type="submit" class="btn btn-primary" name = "show_signin">Inscription</button>
          </form>
        </div>
      {/if}

      
      {if isset($fail_connect)}
        {if isset($_SESSION["fail"])}
          <br>Tentative de connexion : {$_SESSION["fail"]}
        {/if}
      {/if}

  </div>
{/block}
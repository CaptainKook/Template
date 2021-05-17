{extends file="layout.tpl"}
{block name=body}
  <div class ="container-fluid text-center">
    {if isset($_SESSION["user"])}
      <br>Pseudo : {$_SESSION["user"]["pseudo"]}
      <br>Identifiant : {$_SESSION["user"]["identifiant"]}
      {if !empty($_SESSION["user"]["mail"])}
         <br>E-Mail : {$_SESSION["user"]["mail"]}
      {/if}
      <form method="post" name = "logout">
        <button type="submit" class="btn btn-primary mt-3" name = "logout">Déconnexion</button>
      </form>
    {else}
      Vous etes déconnectez !
    {/if}
    </div>
</div>
{/block}
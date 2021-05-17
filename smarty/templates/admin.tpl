{extends file="layout.tpl"}
{block name=body}
  <div class="main container-fluid text-center">
    <h1>Administration</h1>
        {if isset($_POST['saveUpdate'])}
          {if !empty($edit)}
            Modification enregistré
          {else}
            Modification échoué
          {/if}
        
        {/if}
        <div class="no-wrap">
          {if isset($_POST['update']) && isset($_POST['key'])}
            <form method='post'>
            {$key = $_POST['key']}
              <input type='hidden' value={$users[$key]->id} name = 'id'>
              <div class="">
                <label for="pseudo">Pseudo</label><br>
                <input class="text-center" name="pseudo" value="{$users[$key]->pseudo}">
              </div>
              <div class="">
                <label for="mail">Mail</label><br>
                <input type="text" class="text-center" name="mail" value ="{$users[$key]->mail}">
              </div>
              <input type='submit' class ='bg-secondary rounded border m-3' value='enregistrer' name = 'saveUpdate'>
            </form>
          {/if}
        </div>
      <div class="d-flex flex-wrap justify-content-around ">
        {foreach from=$users key =$k item= $user}
          <div class ="border rounder m-2 p-4 ">
            <br>{$user->pseudo} 
            <i class='fas fa-pencil-alt fa-2x'></i>
            
            <form method='post'>
            
                <input type='hidden' value={$user->id} name = 'id'>
                <input type='submit' class ='bg-secondary border rounded' value='supprimer' name = 'remove'>
            </form>
            
            <form method='post'>
                <input type='hidden' value={$k} name = 'key'>
                <input type='submit' class ='bg-secondary border rounded' value='modifier' name = 'update'>
            </form>
            
          </div>
        {/foreach}
      </div>
  </div>
{/block}
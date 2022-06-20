{extends file="main.tpl"}
{block name=intro}
    <div class="jumbotron top-space">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{$conf->action_root}main">Strona główna</a></li>
                <li class="active">{$page_title}</li>
            </ol>
            <h2 class="text-center thin">Profil użytkownika <b>{$profile['Login']}</b></h2>
            
               
                <div class="panel panel-default">
                    <div class="panel-heading resume-heading">
                        <div class="row">
                           
                                 
                                </div>
                                
                                    <ul class="list-group">
                                        <li class="list-group-item">Nazwa: {$profile['Login']}</li>
                                        <li class="list-group-item">Grupa:
                                            {if {$profile['Nazwa_rola']=='admin'}}<span class="admin">Administratorzy</span>{/if}
                                            {if {$profile['Nazwa_rola']=='moderator'}}<span class="moderator">Moderatorzy</span>{/if}
                                            {if {$profile['Nazwa_rola']=='user'}}<span class="user">Użytkownicy</span>{/if}
                                            {if {$profile['Nazwa_rola']=='zbanowany'}}<span class="zbanowany">Zbanowani</span>{/if}
                                        </li>
                                        
                                        
                                        {if core\RoleUtils::inRole("admin") || core\RoleUtils::inRole("moderator")}
                                            <li class="list-group-item">Id: {$profile['Id_user']}</li>
                                            
                                            <li class="list-group-item">Adres email: {$profile['Email']}</li>
                                            <li class="list-group-item">
                                                <a href="{$conf->action_root}manageUsers/1/edit/{$profile['id']}"><button class="btn btn-primary">Edytuj użytkownika</button></a>
                                            </li>
                                        {/if}
                                    </ul>
                                
                         
                    
                    
                             
                 

                </div>
               
            </div>
      </div>
  </div>
  </div>
{/block}
{extends file="main.tpl"}
{block name=intro}
    <div class="jumbotron top-space">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{$conf->action_root}main">Strona główna</a></li>
                <li class="active">{$page_title}</li>
            </ol>
            <h2 class="text-center thin">Sprzęt</b></h2>
            
                <div class="panel panel-default">
                    <div class="panel-heading resume-heading">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-xs-12 col-sm-6">
                                
                                <div class="col-xs-12 col-sm-6">
                                    <ul class="list-group" id="height">
                                        <li class="list-group-item">Producent: {$place['Producent']}</li>
                                        <li class="list-group-item">Model: {$place['Model']}</li>
                                        
                                        <li class="list-group-item">Cena dzień: {$place['Cena_dzien']} złotych</li>
                                        
                                        <li class="list-group-item">Rozmiar: {$place['rozmiar']} </li>
                                      
                                        <li class="list-group-item">Typ: {$place['Nazwa_typ']} </li>
                       
                                     {if \core\RoleUtils::inRole('admin')}
                                        
				     {elseif \core\RoleUtils::inRole('user')}
	                          <li><a class="btn" href="{$conf->action_root}SprzetGet">Wypożycz</a></li>
			           {/if}

                                      
                                    
                                     
 
                                    </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
           
{/block}
{extends file="main.tpl"}
{block name=intro}
    <header id="head" class="secondary"></header>
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{$conf->action_root}main">Strona główna</a></li>
                <li class="active">{$page_title}</li>
            </ol>
            <h2 class="text-center thin">Wyszukiwarka</h2>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h4>Wyszukiwarka</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form method="GET" action="{$conf->action_root}search">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" list="nameHints" name="producent" class="form-control" placeholder="Producent"
                                               onkeyup="ajaxReloadElement('{$conf->action_root}hint?column=name&value='+this.value, 'nameHints', doNothing)">
                                        <datalist id="nameHints">
                                        </datalist>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" list="addressHints" name="model" class="form-control" placeholder="Model"
                                               onkeyup="ajaxReloadElement('{$conf->action_root}hint?column=address&value='+this.value, 'addressHints', doNothing)">
                                        <datalist id="addressHints">
                                        </datalist>
                                    </div>
                                    
                             
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" value="Szukaj">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h4>Wyszukane</h4>
                    {if isset($query) || count($query) > 0}
                        <ul class="list-group">
                            {if count($query) > 0}
                                {foreach $query as $place}
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="{$conf->action_root}shop/{$place['Id_sprzet']}">{$place['Producent']}</a>
                                            </div>
                                            <div class="col-md-3">
                                                {$place['Model']}
                                            </div>
                                            
                                            
                                            <div class="col-md-1">
                                                 {$place['Rozmiar']}
                                            </div>
                                        </div>
                                    </li>
                                {/foreach}

                            {/if}
                        </ul>
                    {/if}
                    {if !isset($query) || count($query) == 0}
                        <h5>Brak miejsc do wyświetlenia!</h5>
                    {/if}
                </div>
            </div>
</div>
        </div>
    <script>
        function doNothing() {
            return false;
        }
    </script>
{/block}
{extends file="main.tpl"}
{block name=intro}
    <header id="head" class="secondary"></header>
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{$conf->action_root}main">Strona główna</a></li>
                
            </ol>


<div class="bottom-margin">
<form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','{$conf->action_root}placeListPart','table'); return false;">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="miasto" name="miasto" value="{$PlaceForm->miasto}" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	







<div id="table">
{include file="PlaceListTable.tpl"}
</div>






{/block}








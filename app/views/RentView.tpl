{extends file="main.tpl"}
{block name=intro}
    <div class="jumbotron top-space">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{$conf->action_root}main">Strona główna</a></li>
                
            
                <p>Przejrzyj wypożyczenia.</p>
                <table>
                  <thead>
 <li class="list-group-item">
                                        <div class="row">

<div class="col-md-3">
                   <th>Produkt</th>
</div>
  <div class="col-md-3">                   
<th>Zamówienie</th>
</div>
 <div class="col-md-3">                   
<th>ID Sprzętu</th>
</div>
 <div class="col-md-3">                   
<th>ID użytkownika</th>
</div>
   <div class="col-md-3">                  
<th>Modyfikacja</th>
</div>
     </div>
                                    </li>
              </thead>
                  <tbody>
                    {foreach $rent as $row}
              				<tr>
              					<td>{$row["Producent"]}</td>
		       <td>{$row["Model"]}</td>
                       <td>{$row["Id_sprzet"]}</td>
                       <td>{$row["Id_user"]}</td>
              		<td>
			<a href="{$conf->action_url}rentAccept/{$row['Id_sprzet']}/{$row['Id_wypozyczenia']}" class="button alt small">Akceptuj</a>
                        </td>
<td>
			<a href="{$conf->action_url}rentDelete/{$row['Id_sprzet']}/{$row['Id_wypozyczenia']}" class="button alt small">Usuń</a>
                        </td>		
</tr>
			{foreachelse}
						<h2>Pusto</h2>
                      
              			{/foreach}
                  </tbody>
                </table>
              </section>
						</div>
				</div>
        <div class="col-4 col-12-medium">

		
							
                   
	
				</div>
			</div>
</div>
		
	</div>
</div>
{/block}

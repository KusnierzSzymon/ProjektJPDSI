<table class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>Ulica</th>
		<th>Miasto</th>
		<th>Kod pocztowy</th>
		
	</tr>
</thead>
<tbody>
{foreach $wypozyczalnie as $w}
{strip}
	<tr>
		<td>{$w["Ulica"]}</td>
		<td>{$w["Miasto"]}</td>
		<td>{$w["Kod_pocztowy"]}</td>
		
	</tr>
{/strip}
{/foreach}
</tbody>
</table>
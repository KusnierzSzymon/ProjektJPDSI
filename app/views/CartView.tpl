{extends file="main.tpl"}
{block name=intro}
    <div class="jumbotron top-space">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{$conf->action_root}main">Strona główna</a></li>
                <li class="active">{$page_title}</li>
            </ol>
               <h2 class="text-center thin">Koszyk</b></h2>
            
                <p>Przejrzyj zawartość swojego koszyka przed finalizacją zamówienia.</p>
                <table>
                  <thead>
                    <th>Produkt</th>
                    <th>Zamawianie</th>
                    <th>Modyfikacja</th>
                  </thead>
                  <tbody>
                    {foreach $cart as $row}
              				<tr>
              					<td>{$row["Id_sprzet"]}</td>
												<td>{$row["Id_wypozyczenia"]}</td>
                        <td>
														<a href="{$conf->action_url}cartDelete/{$row['Id_sprzet']}" class="button alt small">Usuń</a>
                        </td>
              				</tr>
										{foreachelse}
											<h2>Pusto</h2>
                      <p>Przejdz do listy sprzętu!</p>
              			{/foreach}
                  </tbody>
                </table>
              </section>
						</div>
				</div>
        <div class="col-4 col-12-medium">

					<!-- Sidebar -->
          <form action="{$conf->action_root}search" method="post">
            <div id="sidebar">
							<section class="widget thumbnails">
                  <h2>Zakup</h2>
                  <p>Suma zakupów:&nbsp;<strong>120,00 zł‚</strong></p>
                  <p>Odbierz zarezerwowany sprzęt w naszej wypożyczalni!</p>
  								<div class="grid">
                    <a href="{$conf->action_root}cartFinalize" class="button icon fa-file-alt">Zakup</a>
  								</div>
							</section>
						</div>
          </form>
				</div>
			</div>
		</div>
	</div>
{/block}

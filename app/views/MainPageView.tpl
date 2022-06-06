{extends file="main.tpl"}
{block name=head}
    <header id="head">
        <div class="container">
            <div class="row">
                <h1 class="lead">Wypożyczalnia</h1>
                <p class="tagline">Wypożycz sprzęt narciarski w atrakcyjnych cenach!</p>
                <p><a class="btn btn-default btn-lg" role="button" href="{$conf->action_root}panel">WYPOŻYCZ</a></p>
            </div>
        </div>
    </header>
{/block}

{block name=intro}
    <div class="container text-center">
        <br> <br>
        <h2 class="thin">Sprzęt najwyższej jakości</h2>
        <p class="text-muted">
            Nasze wypożyczalnie oferują sprzęt narciarski nawyżej jakości!<br>
            Posiadamy sprzęt dla początkujących oraz zaawansowanych miłośników sportów zimowych!
        </p>
    </div>
{/block}

{block name=jumbotron}
    <div class="jumbotron top-space">
        <div class="container ">

            <h2 class="text-center thin">Dlaczego akurat my?</h2>

            <div class="row">
                
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Wypożyczalnia online</h4></div>
                    <div class="h-body text-center">
                        <p>Dzięki naszej stronie możesz wypożyczyć sprzęt z domu i odebrać go w jeden z naszych wypożyczalni. </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Duży wybór</h4></div>
                    <div class="h-body text-center">
                        <p>W naszym asortymencie każdy znajdzie coś dla siebie!</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Profesjonalna obłsuga</h4></div>
                    <div class="h-body text-center">
                        <p>Zatrudniamy najlepszych specjalistów, którzy będą w stanie sprostać Państwa oczekiwaniom.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 highlight">
                    <div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Zadowoleni klienci</h4></div>
                    <div class="h-body text-center">
                        <p>Posiadamy duże grono zadowolonych klientów korzystających z usług naszych wypożyczalni. </p>
                    </div>
                </div>
                
            </div> <!-- /row  -->

        </div>
    </div>

    

{/block}
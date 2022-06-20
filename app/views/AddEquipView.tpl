{extends file="main.tpl"}
{block name=intro}
    <header id="head" class="secondary"></header>
    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="{$conf->action_root}main">Strona główna</a></li>
            <li class="active">{$page_title}</li>
        </ol>

        <div class="row">

            <!-- Article main content -->
            <article class="col-xs-12 maincontent">
                <header class="page-header">
                    <h1 class="page-title">Dodaj nowy sprzęt</h1>
                </header>

                <div class="col-md-6 col-sm-8 row">
                    <div class="panel panel-default">
                        <div class="panel-body" id="addingForm">
                         <form action="{$conf->action_root}addEquip" method="post">
                                <div class="top-margin">
                                    <label>Nazwa producenta <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="producent" placeholder="Pełna nazwa" value="{$form->producent}">
                                </div>
                                <div class="top-margin">
                                    <label>Model <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="model" placeholder="Model sprzętu" value="{$form->model}">
                                </div>
                                <div class="top-margin">
                                    <label>Cena za dzień <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="cena_dzien" placeholder="Cena sprzętu za dzień" value="{$form->cena_dzien}">
                                </div>
                                <div class="top-margin">
                                    <label>Rozmiar <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="rozmiar" placeholder="Rozmiar sprzętu" value="{$form->rozmiar}">
                                </div>
                                <div class="top-margin">
                                    <label>Nazwa typu <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="nazwa_typ" placeholder="Nazwa typu sprzętu" value="{$form->nazwa_typ}">
                                </div>
                                <div class="top-margin">
                                    <label>Czy dla dzieci <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="dla_dzieci" placeholder="TAK lub NIE" value="{$form->dla_dzieci}">
                                </div>
                                <div class="top-margin">
                                    <label>Liczba dostępnych <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="liczba_dostepnych" placeholder="Liczba dostepnych sztuk" value="{$form->liczba_dostepnych}">
                                </div>


                                

                                

                                 

                             

                             


                                <hr>

                                <div class="row">
                                    <div class="col-lg-1 text-right">
                                        <button class="btn btn-action" type="submit">Dodaj</button>
                                    </div>
                                </div>
</div>
</div>
         
</div>
</div>
</div>


                   
{/block}
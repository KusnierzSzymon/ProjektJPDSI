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
                    <h1 class="page-title">Dodaj nową wypożyczalnie</h1>
                </header>

                <div class="col-md-6 col-sm-8 row">
                    <div class="panel panel-default">
                        <div class="panel-body" id="addingForm">
                         <form action="{$conf->action_root}place" method="post">
                                <div class="top-margin">
                                    <label>Ulica <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="ulica" placeholder="Pełna nazwa" value="{$form->ulica}">
                                </div>
                                <div class="top-margin">
                                    <label>Miasto <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="miasto" placeholder="Model sprzętu" value="{$form->miasto}">
                                </div>
                                <div class="top-margin">
                                    <label>Kod pocztowy <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="kod_pocztowy" placeholder="Cena sprzętu za dzień" value="{$form->kod_pocztowy}">
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
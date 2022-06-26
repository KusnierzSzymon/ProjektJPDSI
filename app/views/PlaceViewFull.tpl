<div class="col-md-6 col-sm-8 row">
                    <div class="panel panel-default">
                        <div class="panel-body" id="addingForm">
                         <form action="{$conf->action_root}place" method="post">
                                <div class="top-margin">
                                    <label>Ulica <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="ulica" placeholder="Nazwa ulicy" value="{$form->ulica}">
                                </div>
                                <div class="top-margin">
                                    <label>Miasto <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="miasto" placeholder="Nazwa miasta" value="{$form->miasto}">
                                </div>
                                <div class="top-margin">
                                    <label>Kod pocztowy <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="kod_pocztowy" placeholder="Kod pocztowy miasta(bez - )" value="{$form->kod_pocztowy}">
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
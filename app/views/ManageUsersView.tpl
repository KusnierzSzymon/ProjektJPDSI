{extends file="main.tpl"}
{block name=intro}
    <div class="jumbotron top-space">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="{$conf->action_root}main">Strona główna</a></li>
                <li class="active">{$page_title}</li>
            </ol>
            <h2 class="text-center thin">Użytkownicy</h2>
            {if isset($details)}
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Parametr</th>
                        <th scope="col">Wartość</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach $userDetails as $key => $val}
                        <tr>
                            <td>{$key}</td>
                            <td>{$val}</td>
                        </tr>
                    {/foreach}
                    </tbody>
                </table>
            {/if}

            {if isset($edit)}
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Edycja użytkownika</h3>
                            <p class="text-center text-muted">Jeżeli nie chcesz edytować niektórych pól, pozostaw je bez zmian.</p>
                            <hr>
                            <form method="post" action="{$conf->action_root}userEdit">
                                {foreach $userDetails as $key => $val}
                                    {if $key == 'Id_user'}
                                        <input type="hidden" class="form-control" name="{$key}" value="{$val}">
                                    {/if}
                                    {if $key != 'Id_user' && $key !='Id_rola' && $key != 'Nazwa_rola'}
                                        <div class="form-group">
                                            <label for="{$key}">{$key}</label>
                                            <input class="form-control" name="{$key}" value="{$val}">
                                        </div>
                                    {/if}
                                    {if $key == 'Id_rola'}
                                        <div class="form-group">
                                            <label for="{$key}">Rola</label>
                                            <select class="form-control" name="Id_rola">
                                                {foreach $roles as $rola}
                                                    <option value="{$rola['Id_rola']}"{if $rola['Id_rola'] == $val} selected{/if}>{$rola['Nazwa_rola']}</option>
                                                {/foreach}
                                            </select>
                                        </div>
                                    {/if}
                                {/foreach}
                                <input type="submit" value="Edytuj" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            {/if}
            <table id="usersValues" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Username</th>
                    <th scope="col">Rola</th>
                    <th scope="col">Akcje</th>
                </tr>
                </thead>
                <tbody>
                {foreach $users as $user}
                    <tr>
                        <th scope="row">{$user['Id_user']}</th>
                        <td>{$user['Login']}</td>
                        <td>{$user['Nazwa_rola']}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{$conf->action_root}/profile/{$user['Id_user']}">Profil</a></li>
                                    <li><a class="dropdown-item" href="{$conf->action_root}manageUsers/{$offset}/details/{$user['Id_user']}">Szczegóły</a></li>
                                    <li><a class="dropdown-item" href="{$conf->action_root}manageUsers/{$offset}/edit/{$user['Id_user']}">Edytuj</a></li>
                                    {if core\RoleUtils::inRole("admin")}
                                        <li><a class="dropdown-item" onclick="deleteUser('{$user['Id_user']}')" href="#">Usuń</a></li>
                                    {/if}
                                </ul>
                            </div>
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>

            {if $previous_page > 0}
                <a type="button" class="btn btn-light btn-sm float-right" href="{$conf->action_root}manageUsers/{$previous_page}">Załaduj poprzednie rekordy</a>
            {/if}
            {if $isNextPage}
                <a type="button" class="btn btn-light btn-sm float-right" href="{$conf->action_root}manageUsers/{$next_page}">Załaduj następne rekordy</a>
            {/if}
            <a type="button" class="btn btn-light btn-sm float-right" href="{$conf->action_root}manageUsers/0">Załaduj wszystkich użytkowników</a>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            $('#usersValues').DataTable();
        });
    </script>

    <script>
        function deleteUser(Id_user) {
            if (confirm("Na pewno chcesz usunąć użytkownika? Nie można cofnąć tej operacji")) {
                window.location.href = '{$conf->action_root}manageUsers/{$offset}/delete/'+Id_user;
            }
        }
    </script>
{/block}
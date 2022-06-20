<?php
/* Smarty version 4.1.0, created on 2022-06-20 01:01:05
  from 'C:\xampp\htdocs\wypozyczalnia\app\views\ManageUsersView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62afaab1af1038_43091024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebb0bb1360a510409d62cf71493a38a22d4c419e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\ManageUsersView.tpl',
      1 => 1655679533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62afaab1af1038_43091024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7408544862afaab1adaae5_96407655', 'intro');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_7408544862afaab1adaae5_96407655 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_7408544862afaab1adaae5_96407655',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="jumbotron top-space">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
main">Strona główna</a></li>
                <li class="active"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</li>
            </ol>
            <h2 class="text-center thin">Użytkownicy</h2>
            <?php if ((isset($_smarty_tpl->tpl_vars['details']->value))) {?>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Parametr</th>
                        <th scope="col">Wartość</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userDetails']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                        <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['val']->value;?>
</td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </tbody>
                </table>
            <?php }?>

            <?php if ((isset($_smarty_tpl->tpl_vars['edit']->value))) {?>
                <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h3 class="thin text-center">Edycja użytkownika</h3>
                            <p class="text-center text-muted">Jeżeli nie chcesz edytować niektórych pól, pozostaw je bez zmian.</p>
                            <hr>
                            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
userEdit">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['userDetails']->value, 'val', false, 'key');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                                    <?php if ($_smarty_tpl->tpl_vars['key']->value == 'Id_user') {?>
                                        <input type="hidden" class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
">
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['key']->value != 'Id_user' && $_smarty_tpl->tpl_vars['key']->value != 'Id_rola' && $_smarty_tpl->tpl_vars['key']->value != 'Nazwa_rola') {?>
                                        <div class="form-group">
                                            <label for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['key']->value;?>
</label>
                                            <input class="form-control" name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['val']->value;?>
">
                                        </div>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['key']->value == 'Id_rola') {?>
                                        <div class="form-group">
                                            <label for="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">Rola</label>
                                            <select class="form-control" name="Id_rola">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['roles']->value, 'rola');
$_smarty_tpl->tpl_vars['rola']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rola']->value) {
$_smarty_tpl->tpl_vars['rola']->do_else = false;
?>
                                                    <option value="<?php echo $_smarty_tpl->tpl_vars['rola']->value['Id_rola'];?>
"<?php if ($_smarty_tpl->tpl_vars['rola']->value['Id_rola'] == $_smarty_tpl->tpl_vars['val']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['rola']->value['Nazwa_rola'];?>
</option>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            </select>
                                        </div>
                                    <?php }?>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                <input type="submit" value="Edytuj" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            <?php }?>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                    <tr>
                        <th scope="row"><?php echo $_smarty_tpl->tpl_vars['user']->value['Id_user'];?>
</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['Login'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['user']->value['Nazwa_rola'];?>
</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown">
                                    <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
/profile/<?php echo $_smarty_tpl->tpl_vars['user']->value['Id_user'];?>
">Profil</a></li>
                                    <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manageUsers/<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
/details/<?php echo $_smarty_tpl->tpl_vars['user']->value['Id_user'];?>
">Szczegóły</a></li>
                                    <li><a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manageUsers/<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
/edit/<?php echo $_smarty_tpl->tpl_vars['user']->value['Id_user'];?>
">Edytuj</a></li>
                                    <?php if (core\RoleUtils::inRole("admin")) {?>
                                        <li><a class="dropdown-item" onclick="deleteUser('<?php echo $_smarty_tpl->tpl_vars['user']->value['Id_user'];?>
')" href="#">Usuń</a></li>
                                    <?php }?>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
            </table>

            <?php if ($_smarty_tpl->tpl_vars['previous_page']->value > 0) {?>
                <a type="button" class="btn btn-light btn-sm float-right" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manageUsers/<?php echo $_smarty_tpl->tpl_vars['previous_page']->value;?>
">Załaduj poprzednie rekordy</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['isNextPage']->value) {?>
                <a type="button" class="btn btn-light btn-sm float-right" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manageUsers/<?php echo $_smarty_tpl->tpl_vars['next_page']->value;?>
">Załaduj następne rekordy</a>
            <?php }?>
            <a type="button" class="btn btn-light btn-sm float-right" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manageUsers/0">Załaduj wszystkich użytkowników</a>
        </div>
    </div>
    <?php echo '<script'; ?>
>
        $(document).ready(function () {
            $('#usersValues').DataTable();
        });
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
        function deleteUser(Id_user) {
            if (confirm("Na pewno chcesz usunąć użytkownika? Nie można cofnąć tej operacji")) {
                window.location.href = '<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manageUsers/<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
/delete/'+Id_user;
            }
        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'intro'} */
}

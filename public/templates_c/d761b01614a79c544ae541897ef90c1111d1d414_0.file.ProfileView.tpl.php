<?php
/* Smarty version 4.1.0, created on 2022-06-07 05:57:42
  from 'C:\xampp\htdocs\wypozyczalnia\app\views\ProfileView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629eccb6c3b106_96583331',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd761b01614a79c544ae541897ef90c1111d1d414' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\ProfileView.tpl',
      1 => 1654574260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629eccb6c3b106_96583331 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161453884629eccb6c311c8_08945035', 'intro');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_161453884629eccb6c311c8_08945035 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_161453884629eccb6c311c8_08945035',
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
            <h2 class="text-center thin">Profil użytkownika <b><?php echo $_smarty_tpl->tpl_vars['profile']->value['Login'];?>
</b></h2>
            <div class="col-md-12">
                <!-- resumt -->
                <div class="panel panel-default">
                    <div class="panel-heading resume-heading">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-xs-12 col-sm-4">
                                    <figure>
                                        
                                    </figure>
                                </div>
                                <div class="col-xs-12 col-sm-8">
                                    <ul class="list-group">
                                        <li class="list-group-item">Nazwa: <?php echo $_smarty_tpl->tpl_vars['profile']->value['Login'];?>
</li>
                                        <li class="list-group-item">Grupa:
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['profile']->value['Nazwa_rola'] == 'admin';
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?><span class="admin">Administratorzy</span><?php }?>
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['profile']->value['Nazwa_rola'] == 'moderator';
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?><span class="moderator">Moderatorzy</span><?php }?>
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['profile']->value['Nazwa_rola'] == 'user';
$_prefixVariable3 = ob_get_clean();
if ($_prefixVariable3) {?><span class="user">Użytkownicy</span><?php }?>
                                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['profile']->value['Nazwa_rola'] == 'zbanowany';
$_prefixVariable4 = ob_get_clean();
if ($_prefixVariable4) {?><span class="banned">Zbanowani</span><?php }?>
                                        </li>
                                       
                                        
                                        <?php if (core\RoleUtils::inRole("admin") || core\RoleUtils::inRole("moderator")) {?>
                                            <li class="list-group-item">Id: <?php echo $_smarty_tpl->tpl_vars['profile']->value['Id_user'];?>
</li>
                                           
                                            <li class="list-group-item">Adres email: <?php echo $_smarty_tpl->tpl_vars['profile']->value['Email'];?>
</li>
                                            
                                        <?php }?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                   
<?php
}
}
/* {/block 'intro'} */
}

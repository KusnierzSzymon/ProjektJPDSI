<?php
/* Smarty version 4.1.0, created on 2022-06-20 01:56:18
  from 'C:\xampp\htdocs\wypozyczalnia\app\views\PanelView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62afb7a2e6ba37_09482570',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a2dcc2333c8e6e5661149491a8a12e2853b53d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\PanelView.tpl',
      1 => 1655682977,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62afb7a2e6ba37_09482570 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86321995362afb7a2e5abd8_19003948', 'intro');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_86321995362afb7a2e5abd8_19003948 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_86321995362afb7a2e5abd8_19003948',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="head" class="secondary"></header>
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
main">Strona główna</a></li>
                <li class="active"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</li>
            </ol>
            <h2 class="text-center thin">Wyszukiwarka</h2>

            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h4>Wyszukiwarka</h4>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form method="GET" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" list="nameHints" name="producent" class="form-control" placeholder="Producent"
                                               onkeyup="ajaxReloadElement('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
hint?column=name&value='+this.value, 'nameHints', doNothing)">
                                        <datalist id="nameHints">
                                        </datalist>
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" list="addressHints" name="model" class="form-control" placeholder="Model"
                                               onkeyup="ajaxReloadElement('<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
hint?column=address&value='+this.value, 'addressHints', doNothing)">
                                        <datalist id="addressHints">
                                        </datalist>
                                    </div>
                                    
                             
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary" value="Szukaj">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h4>Wyszukane</h4>
                    <?php if ((isset($_smarty_tpl->tpl_vars['query']->value)) || count($_smarty_tpl->tpl_vars['query']->value) > 0) {?>
                        <ul class="list-group">
                            <?php if (count($_smarty_tpl->tpl_vars['query']->value) > 0) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['query']->value, 'place');
$_smarty_tpl->tpl_vars['place']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['place']->value) {
$_smarty_tpl->tpl_vars['place']->do_else = false;
?>
                                    <li class="list-group-item">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
shop/<?php echo $_smarty_tpl->tpl_vars['place']->value['Id_sprzet'];?>
"><?php echo $_smarty_tpl->tpl_vars['place']->value['Producent'];?>
</a>
                                            </div>
                                            <div class="col-md-3">
                                                <?php echo $_smarty_tpl->tpl_vars['place']->value['Model'];?>

                                            </div>
                                            
                                            
                                            <div class="col-md-1">
                                                 <?php echo $_smarty_tpl->tpl_vars['place']->value['Rozmiar'];?>

                                            </div>
                                        </div>
                                    </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <?php }?>
                        </ul>
                    <?php }?>
                    <?php if (!(isset($_smarty_tpl->tpl_vars['query']->value)) || count($_smarty_tpl->tpl_vars['query']->value) == 0) {?>
                        <h5>Brak miejsc do wyświetlenia!</h5>
                    <?php }?>
                </div>
            </div>
</div>
        </div>
    <?php echo '<script'; ?>
>
        function doNothing() {
            return false;
        }
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'intro'} */
}

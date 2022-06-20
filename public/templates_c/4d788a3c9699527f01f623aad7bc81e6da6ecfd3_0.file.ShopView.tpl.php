<?php
/* Smarty version 4.1.0, created on 2022-06-20 01:42:42
  from 'C:\xampp\htdocs\wypozyczalnia\app\views\ShopView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62afb47220f0d9_61746438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d788a3c9699527f01f623aad7bc81e6da6ecfd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\ShopView.tpl',
      1 => 1655682161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62afb47220f0d9_61746438 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56765695662afb47220a103_47124624', 'intro');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_56765695662afb47220a103_47124624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_56765695662afb47220a103_47124624',
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
            <h2 class="text-center thin">Sprzęt</b></h2>
            
                <div class="panel panel-default">
                    <div class="panel-heading resume-heading">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-xs-12 col-sm-6">
                                
                                <div class="col-xs-12 col-sm-6">
                                    <ul class="list-group" id="height">
                                        <li class="list-group-item">Producent: <?php echo $_smarty_tpl->tpl_vars['place']->value['Producent'];?>
</li>
                                        <li class="list-group-item">Model: <?php echo $_smarty_tpl->tpl_vars['place']->value['Model'];?>
</li>
                                        
                                        <li class="list-group-item">Cena dzień: <?php echo $_smarty_tpl->tpl_vars['place']->value['Cena_dzien'];?>
 złotych</li>
                                        
                                        <li class="list-group-item">Rozmiar: <?php echo $_smarty_tpl->tpl_vars['place']->value['rozmiar'];?>
 </li>
                                      
                                        <li class="list-group-item">Typ: <?php echo $_smarty_tpl->tpl_vars['place']->value['Nazwa_typ'];?>
 </li>

                                      
                                     <div class="col-lg-4 text-right">
                                        <button class="btn btn-action" type="submit">Wypozycz</button>
                                    </div>  
                                     
 
                                    </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
           
<?php
}
}
/* {/block 'intro'} */
}

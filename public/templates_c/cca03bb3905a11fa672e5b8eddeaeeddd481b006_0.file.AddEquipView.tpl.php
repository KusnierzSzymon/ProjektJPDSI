<?php
/* Smarty version 4.1.0, created on 2022-06-20 00:56:46
  from 'C:\xampp\htdocs\wypozyczalnia\app\views\AddEquipView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62afa9ae3612b9_54008257',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cca03bb3905a11fa672e5b8eddeaeeddd481b006' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\AddEquipView.tpl',
      1 => 1655679404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62afa9ae3612b9_54008257 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_106171859662afa9ae358716_10972261', 'intro');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_106171859662afa9ae358716_10972261 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_106171859662afa9ae358716_10972261',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="head" class="secondary"></header>
    <!-- container -->
    <div class="container">

        <ol class="breadcrumb">
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
main">Strona główna</a></li>
            <li class="active"><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</li>
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
                         <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addEquip" method="post">
                                <div class="top-margin">
                                    <label>Nazwa producenta <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="producent" placeholder="Pełna nazwa" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->producent;?>
">
                                </div>
                                <div class="top-margin">
                                    <label>Model <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="model" placeholder="Model sprzętu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->model;?>
">
                                </div>
                                <div class="top-margin">
                                    <label>Cena za dzień <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="cena_dzien" placeholder="Cena sprzętu za dzień" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->cena_dzien;?>
">
                                </div>
                                <div class="top-margin">
                                    <label>Rozmiar <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="rozmiar" placeholder="Rozmiar sprzętu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->rozmiar;?>
">
                                </div>
                                <div class="top-margin">
                                    <label>Nazwa typu <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="nazwa_typ" placeholder="Nazwa typu sprzętu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nazwa_typ;?>
">
                                </div>
                                <div class="top-margin">
                                    <label>Czy dla dzieci <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="dla_dzieci" placeholder="TAK lub NIE" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dla_dzieci;?>
">
                                </div>
                                <div class="top-margin">
                                    <label>Liczba dostępnych <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="liczba_dostepnych" placeholder="Liczba dostepnych sztuk" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->liczba_dostepnych;?>
">
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


                   
<?php
}
}
/* {/block 'intro'} */
}

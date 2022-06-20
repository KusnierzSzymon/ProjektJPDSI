<?php
/* Smarty version 4.1.0, created on 2022-06-20 03:16:23
  from 'C:\xampp\htdocs\wypozyczalnia\app\views\PlaceView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62afca6783bf61_81120858',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0cf20b93a062268a9553dda550cc66e6e51aec02' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\PlaceView.tpl',
      1 => 1655687781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62afca6783bf61_81120858 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59861499862afca678374c9_54438232', 'intro');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_59861499862afca678374c9_54438232 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_59861499862afca678374c9_54438232',
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
                    <h1 class="page-title">Dodaj nową wypożyczalnie</h1>
                </header>

                <div class="col-md-6 col-sm-8 row">
                    <div class="panel panel-default">
                        <div class="panel-body" id="addingForm">
                         <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
place" method="post">
                                <div class="top-margin">
                                    <label>Ulica <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="ulica" placeholder="Pełna nazwa" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ulica;?>
">
                                </div>
                                <div class="top-margin">
                                    <label>Miasto <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="miasto" placeholder="Model sprzętu" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->miasto;?>
">
                                </div>
                                <div class="top-margin">
                                    <label>Kod pocztowy <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="kod_pocztowy" placeholder="Cena sprzętu za dzień" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kod_pocztowy;?>
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

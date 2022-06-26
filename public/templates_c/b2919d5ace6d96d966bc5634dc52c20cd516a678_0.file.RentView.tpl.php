<?php
/* Smarty version 4.1.0, created on 2022-06-26 20:51:45
  from 'C:\xampp\htdocs\wypozyczalnia\app\views\RentView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62b8aac1a90e09_18360500',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2919d5ace6d96d966bc5634dc52c20cd516a678' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\RentView.tpl',
      1 => 1656269504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b8aac1a90e09_18360500 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97467938762b8aac1a83a90_97906374', 'intro');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_97467938762b8aac1a83a90_97906374 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_97467938762b8aac1a83a90_97906374',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="jumbotron top-space">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
main">Strona główna</a></li>
                
            
                <p>Przejrzyj wypożyczenia.</p>
                <table>
                  <thead>
 <li class="list-group-item">
                                        <div class="row">

<div class="col-md-3">
                   <th>Produkt</th>
</div>
  <div class="col-md-3">                   
<th>Zamówienie</th>
</div>
 <div class="col-md-3">                   
<th>ID Sprzętu</th>
</div>
 <div class="col-md-3">                   
<th>ID użytkownika</th>
</div>
   <div class="col-md-3">                  
<th>Modyfikacja</th>
</div>
     </div>
                                    </li>
              </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rent']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
              				<tr>
              					<td><?php echo $_smarty_tpl->tpl_vars['row']->value["Producent"];?>
</td>
		       <td><?php echo $_smarty_tpl->tpl_vars['row']->value["Model"];?>
</td>
                       <td><?php echo $_smarty_tpl->tpl_vars['row']->value["Id_sprzet"];?>
</td>
                       <td><?php echo $_smarty_tpl->tpl_vars['row']->value["Id_user"];?>
</td>
              		<td>
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rentAccept/<?php echo $_smarty_tpl->tpl_vars['row']->value['Id_sprzet'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['Id_wypozyczenia'];?>
" class="button alt small">Akceptuj</a>
                        </td>
<td>
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
rentDelete/<?php echo $_smarty_tpl->tpl_vars['row']->value['Id_sprzet'];?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['Id_wypozyczenia'];?>
" class="button alt small">Usuń</a>
                        </td>		
</tr>
			<?php
}
if ($_smarty_tpl->tpl_vars['row']->do_else) {
?>
						<h2>Pusto</h2>
                      
              			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </tbody>
                </table>
              </section>
						</div>
				</div>
        <div class="col-4 col-12-medium">

		
							
                   
	
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

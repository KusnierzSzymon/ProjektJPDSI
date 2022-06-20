<?php
/* Smarty version 4.1.0, created on 2022-06-21 00:02:39
  from 'C:\xampp\htdocs\wypozyczalnia\app\views\CartView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62b0ee7fc5f103_79257694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48f58b1b392b8be758c7e41039cc5ad6adc9049a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\CartView.tpl',
      1 => 1655762558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b0ee7fc5f103_79257694 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148651188562b0ee7fc54656_21713243', 'intro');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_148651188562b0ee7fc54656_21713243 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_148651188562b0ee7fc54656_21713243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="jumbotron top-space">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
main">Strona główna</a></li>
                
            
                <p>Przejrzyj zawartość swojego koszyka przed finalizacją zamówienia.</p>
                <table>
                  <thead>
                    <th>Produkt</th>
                    <th>Zamawianie</th>
                    <th>Modyfikacja</th>
                  </thead>
                  <tbody>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cart']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
              				<tr>
              					<td><?php echo $_smarty_tpl->tpl_vars['row']->value["Id_sprzet"];?>
</td>
		       <td><?php echo $_smarty_tpl->tpl_vars['row']->value["Id_wypozyczenia"];?>
</td>
                        <td>
			<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
cartDelete/<?php echo $_smarty_tpl->tpl_vars['row']->value['Id_sprzet'];?>
" class="button alt small">Usuń</a>
                        </td>
              				</tr>
			<?php
}
if ($_smarty_tpl->tpl_vars['row']->do_else) {
?>
						<h2>Pusto</h2>
                      <p>Przejdz do listy sprzętu!</p>
              			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                  </tbody>
                </table>
              </section>
						</div>
				</div>
        <div class="col-4 col-12-medium">

		
							
                    <h2>Zakup</h2>
                  <p>Suma zakupów:&nbsp;<strong>120,00 zł‚</strong></p>
                  <p>Odbierz zarezerwowany sprzęt w naszej wypożyczalni!</p>
  								
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
cartFinalize" class="button icon fa-file-alt">Zakup</a>
  								
	
				</div>
			
		
	</div>
<?php
}
}
/* {/block 'intro'} */
}

<?php
/* Smarty version 4.1.0, created on 2022-06-20 19:49:40
  from 'C:\xampp\htdocs\wypozyczalnia\app\views\CartView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62b0b334a620c6_78391267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48f58b1b392b8be758c7e41039cc5ad6adc9049a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\CartView.tpl',
      1 => 1655747379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b0b334a620c6_78391267 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139075870562b0b334a51517_68411228', 'intro');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_139075870562b0b334a51517_68411228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_139075870562b0b334a51517_68411228',
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
               <h2 class="text-center thin">Koszyk</b></h2>
            
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

					<!-- Sidebar -->
          <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
search" method="post">
            <div id="sidebar">
							<section class="widget thumbnails">
                  <h2>Zakup</h2>
                  <p>Suma zakupów:&nbsp;<strong>20,00 zł‚</strong></p>
                  <p>PamiÄ™taj: klikniÄ™cie Zakup spowoduje jedynie rezerwacjÄ™ wybranych produktĂłw. MoĹĽna bÄ™dzie je odebraÄ‡ osobiĹ›cie w odpowiednich wypoĹĽyczalniach.</p>
  								<div class="grid">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
cartFinalize" class="button icon fa-file-alt">Zakup</a>
  								</div>
							</section>
						</div>
          </form>
				</div>
			</div>
		</div>
	</div>
<?php
}
}
/* {/block 'intro'} */
}

<?php
/* Smarty version 4.1.0, created on 2022-06-26 22:03:29
  from 'C:\xampp\htdocs\wypozyczalnia\app\views\PlaceListTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62b8bb91403a53_38112398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dff706cac09ef6bd928c7c5c27e6ca8399c63ed' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\PlaceListTable.tpl',
      1 => 1656272603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b8bb91403a53_38112398 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>Ulica</th>
		<th>Miasto</th>
		<th>Kod pocztowy</th>
		
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['wypozyczalnie']->value, 'w');
$_smarty_tpl->tpl_vars['w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['w']->value["Ulica"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["Miasto"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['w']->value["Kod_pocztowy"];?>
</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table><?php }
}

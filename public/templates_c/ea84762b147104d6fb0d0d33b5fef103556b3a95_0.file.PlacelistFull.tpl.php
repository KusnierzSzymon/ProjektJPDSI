<?php
/* Smarty version 4.1.0, created on 2022-06-26 22:03:29
  from 'C:\xampp\htdocs\wypozyczalnia\app\views\PlacelistFull.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62b8bb913a09b9_44438927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea84762b147104d6fb0d0d33b5fef103556b3a95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\PlacelistFull.tpl',
      1 => 1656273792,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:PlaceListTable.tpl' => 1,
  ),
),false)) {
function content_62b8bb913a09b9_44438927 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137641024762b8bb91399364_94194508', 'intro');
?>








<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'intro'} */
class Block_137641024762b8bb91399364_94194508 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_137641024762b8bb91399364_94194508',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header id="head" class="secondary"></header>
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
main">Strona główna</a></li>
                
            </ol>


<div class="bottom-margin">
<form id="search-form" class="pure-form pure-form-stacked" onsubmit="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
placeListPart','table'); return false;">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="miasto" name="miasto" value="<?php echo $_smarty_tpl->tpl_vars['PlaceForm']->value->miasto;?>
" /><br />
		<button type="submit" class="pure-button pure-button-primary">Filtruj</button>
	</fieldset>
</form>
</div>	







<div id="table">
<?php $_smarty_tpl->_subTemplateRender("file:PlaceListTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>






<?php
}
}
/* {/block 'intro'} */
}

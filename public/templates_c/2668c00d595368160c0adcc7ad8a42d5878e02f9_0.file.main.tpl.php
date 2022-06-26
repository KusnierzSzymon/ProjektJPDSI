<?php
/* Smarty version 4.1.0, created on 2022-06-26 19:51:46
  from 'C:\xampp\htdocs\wypozyczalnia\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62b89cb24449b3_89801130',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2668c00d595368160c0adcc7ad8a42d5878e02f9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\wypozyczalnia\\app\\views\\templates\\main.tpl',
      1 => 1656265896,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b89cb24449b3_89801130 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<title>Wypożyczalnia</title>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Wypożycz sprzęt narciarski w atrakcyjnych cenach!">
	<meta name="author"      content="Szymon Kusnierz">

	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/alertify.css">
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images;?>
/gt.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/main.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->styles;?>
/additional.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->scripts;?>
/alertify.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->scripts;?>
/ajax-functions.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="home">
		<!-- Fixed navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >
			<div class="container">
				<div class="navbar-header">
					<!-- Button for smallest screens -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
main">
						<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->images;?>
/gt.png">
						Wypożyczalnia
					</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav pull-right">
						<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
main">Strona główna</a></li>
						<?php if (!core\RoleUtils::inRole("logged")) {?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">Zaloguj</a></li>
							<li><a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register">Rejestracja</a></li>
						<?php }?>
						<?php if (core\RoleUtils::inRole("logged")) {?>
							<li class="dropdown">
								<a class="dropdown-toggle btn" data-toggle="dropdown">Narzędzia <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
panel">Panel główny</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
profile">Mój profil</a></li>
									        <?php if (core\RoleUtils::inRole("user")) {?>
											<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
cartList">Koszyk</a></li></li>
										<?php }?>
                                                                                <?php if (core\RoleUtils::inRole("admin") || core\RoleUtils::inRole("moderator")) {?>
										<li class="divider"></li>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
addEquip">Dodaj sprzęt</a></li>
                                                                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
manageUsers">Moderuj użytkowników</a></li>
										<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
place">Dodaj wypożyczalnie</a></li>
                                                                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
rentList">Wypozyczenia</a></li>
										<li class="divider"></li>
									<?php }?>
									<?php if (core\RoleUtils::inRole("admin")) {?>
								
										
										
									<?php }?>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a></li>
								</ul>
							</li>
						<?php }?>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
		<!-- /.navbar -->
	</div>

	<!-- Head -->
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_59930206962b89cb2436b14_93456396', 'head');
?>


	<!-- Intro -->
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_121810140362b89cb2437339_34755717', 'intro');
?>


	<!-- Jumbotron -->
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_124069100662b89cb2437887_70503615', 'jumbotron');
?>


	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53869297362b89cb2437d65_11133975', 'generated');
?>


	<footer id="footer" class="top-space always-bottom">
		<div class="footer1">
			<div class="container">
				<div class="row">

					<div class="col-md-3 widget">
						<h3 class="widget-title">Kontakt</h3>
						<div class="widget-body">
							<a href="mailto:#">szymon200022@onet.pl</a><br><br/>

							<a href="https://github.com/KusnierzSzymon">https://github.com/KusnierzSzymon</a> <br/> <br/>

							<p>Projektowanie Aplikacji Webowych, grupa 4</p>
						</div>
					</div>

					<div class="col-md-3 widget">

					</div>

					<div class="col-md-6 widget">
						<h3 class="widget-title">O stronie</h3>
						<div class="widget-body">
							<p>Strona stworzona na potrzeby przedmiotów Języki programowania dynamicznych stron internetowych I oraz Projektowanie bazodanowych aplikacji webowych.</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

		<div class="footer2">
			<div class="container">
				<div class="row">

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
main">Strona główna</a> |
								<?php if (!core\RoleUtils::inRole("logged")) {?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
login">Zaloguj</a> |
									<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
register">Zarejestruj</a>
								<?php }?>
								<?php if (core\RoleUtils::inRole("logged")) {?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Wyloguj</a>
								<?php }?>
							</p>
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2022, Szymon Kuśnierz. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a>
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144305824962b89cb243a0b6_02981800', 'alerts');
?>


	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->scripts;?>
/headroom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->scripts;?>
/jQuery.headroom.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->scripts;?>
/template.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
/* {block 'head'} */
class Block_59930206962b89cb2436b14_93456396 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_59930206962b89cb2436b14_93456396',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head'} */
/* {block 'intro'} */
class Block_121810140362b89cb2437339_34755717 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'intro' => 
  array (
    0 => 'Block_121810140362b89cb2437339_34755717',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'intro'} */
/* {block 'jumbotron'} */
class Block_124069100662b89cb2437887_70503615 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'jumbotron' => 
  array (
    0 => 'Block_124069100662b89cb2437887_70503615',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'jumbotron'} */
/* {block 'generated'} */
class Block_53869297362b89cb2437d65_11133975 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'generated' => 
  array (
    0 => 'Block_53869297362b89cb2437d65_11133975',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'generated'} */
/* {block 'alerts'} */
class Block_144305824962b89cb243a0b6_02981800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'alerts' => 
  array (
    0 => 'Block_144305824962b89cb243a0b6_02981800',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
				<?php echo '<script'; ?>
 type="text/javascript">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
					alertify.error("<?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
");
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php echo '</script'; ?>
>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
				<?php echo '<script'; ?>
 type="text/javascript">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
					alertify.success("<?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
");
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php echo '</script'; ?>
>
			<?php }?>
	<?php
}
}
/* {/block 'alerts'} */
}

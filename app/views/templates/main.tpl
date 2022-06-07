<!DOCTYPE HTML>
<html lang="pl">
<head>
	<title>Wypożyczalnia</title>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Wypożycz sprzęt narciarski w atrakcyjnych cenach!">
	<meta name="author"      content="Szymon Kusnierz">

	<link rel="stylesheet" type="text/css" href="{$conf->styles}/alertify.css">
	<link rel="shortcut icon" href="{$conf->images}/gt.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="{$conf->styles}/bootstrap.min.css">
	<link rel="stylesheet" href="{$conf->styles}/font-awesome.min.css">
	<link rel="stylesheet" href="{$conf->styles}/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="{$conf->styles}/main.css">
	<link rel="stylesheet" href="{$conf->styles}/additional.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">

	<script type="text/javascript" src="{$conf->scripts}/alertify.js"></script>
	<script type="text/javascript" src="{$conf->scripts}/ajax-functions.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
</head>
<body>
	<div class="home">
		<!-- Fixed navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >
			<div class="container">
				<div class="navbar-header">
					<!-- Button for smallest screens -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<a class="navbar-brand" href="{$conf->action_root}main">
						<img src="{$conf->images}/gt.png">
						Wypożyczalnia
					</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav pull-right">
						<li class="active"><a href="{$conf->action_root}main">Strona główna</a></li>
						{if !core\RoleUtils::inRole("logged")}
							<li><a href="{$conf->action_root}login">Zaloguj</a></li>
							<li><a class="btn" href="{$conf->action_root}register">Rejestracja</a></li>
						{/if}
						{if core\RoleUtils::inRole("logged")}
							<li class="dropdown">
								<a class="dropdown-toggle btn" data-toggle="dropdown">Narzędzia <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li><a href="{$conf->action_root}panel">Panel główny</a></li>
									<li><a href="{$conf->action_root}profile">Mój profil</a></li>
									{if core\RoleUtils::inRole("admin") || core\RoleUtils::inRole("moderator")}
										<li class="divider"></li>
										<li><a href="{$conf->action_root}addEquip">Dodaj sprzęt</a></li>
                                                                                <li><a href="{$conf->action_root}manageUsers">Moderuj użytkowników</a></li>
										
										<li class="divider"></li>
									{/if}
									{if core\RoleUtils::inRole("admin")}
								
										
										
									{/if}
									<li><a href="{$conf->action_root}logout">Wyloguj</a></li>
								</ul>
							</li>
						{/if}
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>
		<!-- /.navbar -->
	</div>

	<!-- Head -->
	{block name=head}{/block}

	<!-- Intro -->
	{block name=intro}{/block}

	<!-- Jumbotron -->
	{block name=jumbotron}{/block}

	{block name=generated}{/block}

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
								<a href="{$conf->action_root}main">Strona główna</a> |
								{if !core\RoleUtils::inRole("logged")}
									<a href="{$conf->action_root}login">Zaloguj</a> |
									<a href="{$conf->action_root}register">Zarejestruj</a>
								{/if}
								{if core\RoleUtils::inRole("logged")}
									<a href="{$conf->action_root}logout">Wyloguj</a>
								{/if}
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

	{block name=alerts}
			{if $msgs->isError()}
				<script type="text/javascript">
				{foreach $msgs->getMessages() as $msg}
					alertify.error("{$msg->text}");
				{/foreach}
				</script>
			{/if}

			{if $msgs->isInfo()}
				<script type="text/javascript">
					{foreach $msgs->getMessages() as $msg}
					alertify.success("{$msg->text}");
					{/foreach}
				</script>
			{/if}
	{/block}

	<script src="{$conf->scripts}/headroom.min.js"></script>
	<script src="{$conf->scripts}/jQuery.headroom.min.js"></script>
	<script src="{$conf->scripts}/template.js"></script>

</body>
</html>
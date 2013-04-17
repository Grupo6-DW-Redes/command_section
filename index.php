<!doctype html>

<html lang="pt-br">

  <head>
	
		<meta charset="UTF-8">
		<title>NetApp</title>
		<link rel="stylesheet" href="estilo.css">
	
		<style>

			form div {
				border: 1px solid #000;
				width: 30%;
				border-radius: 10px;
				padding: 10px;
				margin-bottom: 10px;
			}
			div#container {
				margin: auto;
				background: #A4DDED;
				border-radius: 10px;
				padding: 15px;
				min-height: 80%;
			}
			div#content{
				padding: 20px;
			}
			html,body{
				height: 100%;
			}

		</style>

	</head>

	<body>
	
		<div id="container">
			<div id='cssmenu'>
				<ul>
			   		<?
			   		$page = "ping";
			   		if(isset($_GET['page'])){
			   				$page = $_GET['page'];
			   		}
			   		?>
			   		<li <?=($page=="ping")?"class='active'":""?>><a href='<?=$_SERVER['PHP_SELF']?>?page=ping'><span>Ping</span></a></li>
			   		<li <?=($page=="nslookup")?"class='active'":""?>><a href='<?=$_SERVER['PHP_SELF']?>?page=nslookup'><span>DNS</span></a></li>
			   		<li <?=($page=="netstat")?"class='active'":""?>><a href='<?=$_SERVER['PHP_SELF']?>?page=netstat'><span>Conexões</span></a></li>
			   		<li <?=($page=="route")?"class='active'":""?>><a href='<?=$_SERVER['PHP_SELF']?>?page=route'><span>Rotas</span></a></li>
			   		<li <?=($page=="about")?"class='active'":""?> class='last'><a href='<?=$_SERVER['PHP_SELF']?>?page=about'><span>About</span></a></li>
				</ul>
			</div>
			<div id="content">
				<?if(@$_GET['page'] == "ping")
				 	include "ping.php";
				 else if(@$_GET['page'] == "nslookup")
				 	include "nslookup.php";
				 else if(@$_GET['page'] == "netstat")
				 	include "netstat.php";
				 else if(@$_GET['page'] == "route")
				 	include "route.php";
				 else if(@$_GET['page'] == "about")
				 	include "about.php"; 
				 else include "ping.php";
				 ?>
			</div>
		</div>
	
	</body>

</html>

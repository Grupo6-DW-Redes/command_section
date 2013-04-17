<?
  $nslookup = "";
	if(isset($_GET['host'])){
		$comando = "nslookup {$_GET['host']}";
		$nslookup = iconv("cp850", "utf-8", shell_exec($comando));
	}
?>

<html lang="pt-br">
	
	<head>
		
		<meta charset="UTF-8">
		<title></title>
		
		<style type="text/css">

			#cabecalho {
				background-color: RoyalBlue;
				color: white;
				text-transform: uppercase;
				font-size: 18px;
				font-family: Arial,Helvetica,sans-serif;
			}

			#destacar {
				background-color: LightGreen;
			}

		</style>
		
	</head>
	
	<body>
		
		<p id="cabecalho">Seu servidor DNS está bem configurado?? Confira aqui.</p>
								
		<br>
		
		<form action="<?=$_SERVER['PHP_SELF']?>">
						
			<input type="hidden" name="page" value="nslookup">
			
			<div id="destacar">
				<input type="text" name="host" id="host" placeholder="Host ou IP"><br>
			</div>
			
			<input type="submit" value="Encontre-o para mim!!">
			
		</form>
		
		<pre><?=$nslookup?></pre>

	</body>
	
</html>

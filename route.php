<?  
	$route = iconv("cp850", "utf-8", shell_exec("route print"));
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

		</style>
		
	</head>
	
	<body>
		
		<p id="cabecalho">Lista de Interfaces e Tabelas de Rotas do PC.</p>
				
		<form action="<?=$_SERVER['PHP_SELF']?>">
																	
		</form>
		
		<pre><?=$route?></pre>
		
	</body>
	
</html>

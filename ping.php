<?
  $ping = "";
	if(isset($_GET['host'])){
		$comando = "ping {$_GET['host']}";
		if(@in_array("repeticao", $_GET['acao']))
			$comando .= " -n {$_GET['repeticao']} ";
		if(@in_array("intervalo", $_GET['acao']))
			$comando .= " -w {$_GET['intervalo']} ";
		// cp850 - IBM850
		// cp65001 - utf-8
		$ping = iconv("cp850", "utf-8", shell_exec($comando));
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

			.destacar {
				background-color: LightGreen;
			}

		</style>
		
	</head>

	<body>
		
		<p id="cabecalho">Verifique se seu computador tem comunicação interna e externa</p>
								
		<br>
		
		<form action="<?=$_SERVER['PHP_SELF']?>">
									
			<input type="hidden" name="page" value="ping">
			
			<div class="destacar">
				<input type="text" name="host" id="host" placeholder="Host"><br>
			</div>
			
			<br>
			
			<div class="destacar">
				Repetição <input type="checkbox" name="acao[]" value="repeticao"><br>
				<input type="radio" name="repeticao" id="rep5" value="5">
				<label for="rep5">5</label>
				<input type="radio" name="repeticao" id="rep10" value="10">
				<label for="rep10">10</label>
				<input type="radio" name="repeticao" id="rep20" value="20">
				<label for="rep20">20</label>
			</div>
			
			<br>
			
			<div class="destacar">
				Intervalo <input type="checkbox" name="acao[]" value="intervalo"><br>
				<input type="radio" name="intervalo" id="int1" value="1">
				<label for="int1">1s</label>
				<input type="radio" name="intervalo" id="int2" value="2">
				<label for="int2">2s</label>
				<input type="radio" name="intervalo" id="int3" value="3">
				<label for="int3">3s</label>
			</div>
			
			<br>
			
			<input type="submit" value="Ping">
			
		</form>
		
		<pre><?=$ping?></pre>
	
	</body>

</html>

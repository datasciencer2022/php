<html>
<?php 

	$dtIni = strtotime($_GET['dtIni']);
	$dtFim = strtotime($_GET['dtFim']);
	$dias = resolve($dtIni, $dtFim);
?>
	<head>
		<title>Cálculo da Soma de 2 Números</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<center>
			<h1>Entre <?php echo(date("d/m/Y",$dtIni)) ;?> e <?php echo(date("d/m/Y",$dtFim))?></h1>
			<h2> Tem <?php echo ("$dias"); ?> dias</h2>
		</center>
	</body>
</html>
<?php
	function resolve($dtIni, $dtFim){
		$dias = 0;



		return $dias;
	}
?>

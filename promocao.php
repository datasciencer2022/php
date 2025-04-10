<html>
<?php 
	function calcNovoSal($salAtual){
		$novoSal = $salAtual;

		return $novoSal;
	}
	
	$salAtual = $_GET['salAtual'];

	$resp = calcNovoSal($salAtual);


?>
	<head>
		<title>Promoção</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<center>
			<h2>Salário atual: R$ <?php echo number_format($salAtual, 2, ',', '.');?></h2>
			<h2>Salário novo: R$ <?php echo number_format($resp, 2, ',', '.');?></h2>
		</center>
	</body>
</html>

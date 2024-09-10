<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesa</title>
<?php  include ('comanda.php') ?>
<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<form name ="form" method="post" action="">
        <h1>Cafeteria do Programador</h1>
		<!-- Input que receberá o primeiro valor a ser calculado -->
		Numero da mesa:<input type="text" name="mesa" placeholder="" /></br>
        Quantidade de pessoas:<input type="text" name="v1" placeholder="" /></br>
        Valor da conta:<input type="text" name="v2" placeholder="" /></br>
		<input type="submit" name="Calcular" value="Calcular" />
	</form>
	<?php
	# Instancia a classe CALCULADORA()
        $mesa = new mesa();
        
        # Executa o meto Calcular
        echo $mesa->calcular();
	?>
</body>
</html>
	
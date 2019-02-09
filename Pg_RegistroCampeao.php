<!DOCTYPE html>
<html>
	<head>	
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	
	<body>

		<?php
			include 'BDManager.php';
			$b = new BDManager();
			$Ligas = $b->CarregarLigas();
			$ListaClubes = $b->CarregarClubes();
		?>

		<div class="container">
			<nav class="navbar navbar-default">
  				<div class="container-fluid">
    				<div class="navbar-header">
      					<a class="navbar-brand" href="#">WebSiteName</a>
    				</div>
    				<ul class="nav navbar-nav">
     					<li><a href="index.php">Inicio</a></li>
						<li><a href="Pg_RegistroClube.php">Registrar novo clube</a></li> 
						<li><a href="Pg_Mural.php">Mural dos campeões</a></li> 
						<li class="active"><a href="Pg_RegistroCampeao.php"> Registrar novo campeão </a></li>
						<li><a href="Pg_HistoricoPartidas.php">Histórico de partidas</a></li>
						<li><a href="Pg_RegistroPartida.php">Registrar partida </a></li>
    				</ul>
  				</div>
			</nav>

		<form method="get" action="Frm_Processor_RegistradorDeCampeoes.php">

			Selecione a liga
			<select name="liga-disputada">
				<?php foreach($Ligas as $l) : ?>
					<option value="<?=$l->CodigoLiga?>"><?=$l->NomeDaLiga?></option>
				<?php endforeach; ?>
			</select>

			Selecione o time campeão
			<select name="time-campeao">
				<?php foreach ($ListaClubes as $clube) : ?>
					<option value="<?=$clube->ChavePrimaria?>"><?=$clube->Nome?></option>
				<?php endforeach; ?>
			</select>

			Selecione a temporada
			<select name="temporada">
				<option value="2028">2028</option>
				<option value="2029">2029</option>
				<option value="2029">2029</option>
				<option value="2030">2030</option>
				<option value="2031">2031</option>
			</select>
			<input type="submit" value="Registrar">
		</form>
	</div>
	</body>
</html>	
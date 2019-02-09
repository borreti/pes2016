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
			$ListaClubes = $b->CarregarClubes();
			$Ligas = $b->CarregarLigas();

			$clubesArg = array();
			$clubesBra = array();
			$clubesIng = array();
			$clubesFra = array();
			$clubesEsp = array();
			$clubesIta = array();

			$ligasArg = array();
			$ligasBra = array();
			$ligasIng = array();
			$ligasFra = array();
			$ligasEsp = array();
			$ligasIta = array();
			$ligasInternacionais = array();


			foreach($ListaClubes as $clube)
			{
				switch ($clube->Nacionalidade) {
					case 'BRASIL':
						$clubesBra[] = $clube;
						break;

					case 'ARGENTINA':
						$clubesArg[] = $clube;
						break;

					case 'ESPANHA':
						$clubesEsp[] = $clube;
						break;

					case 'FRANCA':
						$clubesFra[] = $clube;
						break;

					case 'INGLATERRA':
						$clubesIng[] = $clube;
						break;

					case 'ITALIA':
						$clubesIta[] = $clube;
						break;
				}
			}

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
						<li class="active"><a href="Pg_Mural.php">Mural dos campeões</a></li> 
						<li><a href="Pg_RegistroCampeao.php"> Registrar novo campeão </a></li>
						<li><a href="Pg_HistoricoPartidas.php">Histórico de partidas</a></li>
						<li><a href="Pg_RegistroPartida.php">Registrar partida </a></li>
    				</ul>
  				</div>
			</nav>

			<?php foreach($Ligas as $l) : ?>
				<div class="div-campeoes">
					<center><h2><?=$l->NomeDaLiga?></h2></center>
					<?php foreach($l->ListaCampeoes as $campeao) : ?>
						<div class="box-team">
							<h3><?=$campeao->Nome?></h3>
							<hr>
							<img width="256" height="256" src="<?=$campeao->Escudo?>">
							<hr>
							<h4><?=$campeao->Temporada?></h4>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endforeach; ?>
		</div>
	</body>
</html>	

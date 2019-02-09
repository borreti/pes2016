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
			$Partidas = $b->CarregarPartidas();

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

			foreach ($Ligas as $liga) {
				switch ($liga->Nacionalidade) {
					case 'BRASIL':
						$ligasBra[] = $liga;
						break;

					case 'ARGENTINA':
						$ligasArg[] = $liga;
						break;

					case 'ESPANHA':
						$ligasEsp[] = $liga;
						break;

					case 'FRANCA':
						$ligasFra[] = $liga;
						break;

					case 'INGLATERRA':
						$ligasIng[] = $liga;
						break;

					case 'ITALIA':
						$ligasIta[] = $liga;
						break;

					case 'INTERNACIONAL':
						$ligasInternacionais[] = $liga;
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
						<li><a href="Pg_Mural.php">Mural dos campeões</a></li> 
						<li><a href="Pg_RegistroCampeao.php"> Registrar novo campeão </a></li>
						<li class="active"><a href="Pg_HistoricoPartidas.php">Histórico de partidas</a></li>
						<li><a href="Pg_RegistroPartida.php">Registrar partida </a></li>
    				</ul>
    			</div>
    		</nav>
    				<?php foreach($Partidas as $p) : ?>
    					<div class = "box-game">
    						<?php 
    							$timeCasa = Clube::LocalizarClube($ListaClubes, $p->time_casa);
    							$timeFora = Clube::LocalizarClube($ListaClubes, $p->time_fora);
    							$ligaDisputada = Liga::LocalizarLiga($Ligas, $p->ligaDisputada);
    							$timeVencedor = Clube::LocalizarClube($ListaClubes, $p->time_vencedor);
    						?>
    						<div class="info-team">
    							<h2><?=$timeCasa->Nome?></h2>
    							<hr>
    							<img width="256px" height="256px" src="<?=$timeCasa->Escudo?>">
    							<hr>
    							<p><h2><?=$p->gol_time_casa?></h2></p>
    						</div>

    						<div class="sub-info-partida">
    							<h2>#<?=$p->codigo?></h2>
    							<hr>
    							<img src="X.png">
    							<hr>
    							<?=$ligaDisputada->NomeDaLiga?>
    							<hr>
    							<h2><?=$timeVencedor->Nome?></h2>
    						</div>

    						<div class="info-team">
    							<h2> <?=$timeFora->Nome?> </label> </h2>
    							<hr>
    							<img width="256px" height="256px" src="<?=$timeFora->Escudo?>">
    							<hr>
    							<p><h2><?=$p->gol_time_fora?></h2></p>
    						</div>

    						</div>

    					<?php endforeach; ?>
    				</div>
  				</div>
			</nav>
		</div>
	</body>
</html>	
<!DOCTYPE html>
<html>

	<head>	
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  		<script type="text/javascript">
  			function AlterarImagem(valor){
  				alert(valor.value);
  			}

  			function SelecaoClube(elementoHtml){
  				var idElemento;

  				var nacionalidade = elementoHtml.name.slice(15,18);
  				var territorio = elementoHtml.name.slice(5,14);

  				idElemento = "img-" + territorio + "-" + nacionalidade;

  				var valorElementoHtml = elementoHtml.value;
  				var indexEscudo = valorElementoHtml.lastIndexOf("-");
  				var sourceEscudo = valorElementoHtml.slice(0, indexEscudo);
  				document.getElementById(idElemento).src = sourceEscudo;
  			}
  		</script>

	</head>
	
	<body>	
	
		<?php
			include 'Class_Controle.php';
			
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
						<li><a href="Pg_RegistroCampeao.php">Registrar novo campeão</a></li>
						<li><a href="Pg_HistoricoPartidas.php">Histórico de partidas</a></li>
						<li class="active"><a href="Pg_RegistroPartida.php">Registrar partida </a></li>
    				</ul>
  				</div>
			</nav>

			<ul class="nav nav-tabs">
    			<li class="active"><a data-toggle="tab" href="#italia">Itália</a></li>
    			<li><a data-toggle="tab" href="#argentina">Argentina</a></li>
    			<li><a data-toggle="tab" href="#brasil">Brasil</a></li>
    			<li><a data-toggle="tab" href="#espanha">Espanha</a></li>
    			<li><a data-toggle="tab" href="#franca">França</a></li>
    			<li><a data-toggle="tab" href="#inglaterra">Inglaterra</a></li>
    			<li><a data-toggle="tab" href="#competicao-internacional">Competições internacionais</a></li>
  			</ul>

  			<div class="tab-content">
    			<div id="italia" class="tab-pane fade in active">
    				<center>
    					<form method="get" action="Frm_Processor_RegistradorDePartidasITA.php">
    						<div class="box-team">
								<h4>Time Casa</h4>
								<hr>

								<img width="256px" height="256px" id="img-time-casa-ITA" src="">

								<hr>

								<select required onchange="SelecaoClube(this)" name="info-time-casa-ITA">
									<option value=""></option>			
									<?php foreach($clubesIta as $ClubeLoop) : ?>
									<?php
										$valueClube = $ClubeLoop->Escudo . "-" . $ClubeLoop->ChavePrimaria;
									?>			
										<option value="<?=$valueClube?>"><?=$ClubeLoop->Nome?></option>			
									<?php endforeach; ?>
								</select>

								<hr>

								<input class="form-control" type="text" placeholder="Gols" name="gols-time-casa-ITA">
							</div>

							<div class="box-team">
								<h4>Time Fora</h4>
								<hr>

								<img width="256px" height="256px" id="img-time-fora-ITA" src="">

								<hr>

								<select required onchange="SelecaoClube(this)" name="info-time-fora-ITA">			<option value=""></option>
									<?php foreach($clubesIta as $ClubeLoop) : ?>
									<?php
										$valueClube = $ClubeLoop->Escudo . "-" . $ClubeLoop->ChavePrimaria;
									?>			
										<option value="<?=$valueClube?>"><?=$ClubeLoop->Nome?></option>			
									<?php endforeach; ?>
								</select>

								<hr>

								<input class="form-control" type="text" placeholder="Gols" name="gols-time-fora-ITA">
							</div>
							<div>
								Tipo de jogo
								<select name="tipo-jogo-ITA">
									<option value>AMISTOSO</option>
									<?php foreach($ligasIta as $ligaItalia) : ?>
										<option value="<?=$ligaItalia->CodigoLiga?>"><?=$ligaItalia->NomeDaLiga?></option>
									<?php endforeach; ?>
								</select>
								<input type="submit" value="Registrar">
							</div>
						</form>   
					</center>				
    			</div>

    			<div id="argentina" class="tab-pane fade">
      				<center>
    					<form method="get" action="Frm_Processor_RegistradorDePartidasARG.php">
    						<div class="box-team">
								<h4>Time Casa</h4>
								<hr>

								<img width="256px" height="256px" id="img-time-casa-ARG" src="">

								<hr>

								<select required onchange="SelecaoClube(this)" name="info-time-casa-ARG">			<option value=""></option>
									<?php foreach($clubesArg as $ClubeLoop) : ?>
									<?php
										$valueClube = $ClubeLoop->Escudo . "-" . $ClubeLoop->ChavePrimaria;
									?>			
										<option value="<?=$valueClube?>"><?=$ClubeLoop->Nome?></option>			
									<?php endforeach; ?>
								</select>

								<hr>

								<input class="form-control" type="text" placeholder="Gols" name="gols-time-casa-ARG">
							</div>

							<div class="box-team">
								<h4>Time Fora</h4>

								<hr>

								<img width="256px" height="256px" id="img-time-fora-ARG" src="">

								<hr>

								<select required onchange="SelecaoClube(this)" name="info-time-fora-ARG">			<option value=""></option>
									<?php foreach($clubesArg as $ClubeLoop) : ?>
									<?php
										$valueClube = $ClubeLoop->Escudo . "-" . $ClubeLoop->ChavePrimaria;
									?>			
										<option value="<?=$valueClube?>"><?=$ClubeLoop->Nome?></option>			
									<?php endforeach; ?>
								</select>
								<hr>
								<input class="form-control" type="text" placeholder="Gols" name="gols-time-fora-ARG">
							</div>
							Tipo de jogo
							<select name="tipo-jogo-ARG">
								<option value>AMISTOSO</option>
								<?php foreach($ligasArg as $ligaArgentina) : ?>
									<option value="<?=$ligaArgentina->CodigoLiga?>"><?=$ligaArgentina->NomeDaLiga?></option>
								<?php endforeach; ?>
							</select>
							<input type="submit" value="Registrar">
						</form>   
					</center>			
    			</div>


    			<div id="brasil" class="tab-pane fade">
      				<center>
    					<form method="get" action="Frm_Processor_RegistradorDePartidasBRA.php">
    						<div class="box-team">
								<h4>Time Casa</h4>

								<hr>

								<img width="256px" height="256px" id="img-time-casa-BRA" src="">

								<hr>

								<select required onchange="SelecaoClube(this)" name="info-time-casa-BRA">			<option value=""></option>
									<?php foreach($clubesBra as $ClubeLoop) : ?>
									<?php
										$valueClube = $ClubeLoop->Escudo . "-" . $ClubeLoop->ChavePrimaria;
									?>			
										<option value="<?=$valueClube?>"><?=$ClubeLoop->Nome?></option>			
									<?php endforeach; ?>
								</select>

								<input class="form-control" type="text" placeholder="Gols" name="gols-time-casa-BRA">
							</div>
							<div class="box-team">
								<h4>Time Fora</h4>

								<hr>

								<img width="256px" height="256px" id="img-time-fora-BRA" src="">

								<hr>


								<select required onchange="SelecaoClube(this)" name="info-time-fora-BRA">			<option value=""></option>
									<?php foreach($clubesBra as $ClubeLoop):?>
									<?php
										$valueClube = $ClubeLoop->Escudo . "-" . $ClubeLoop->ChavePrimaria;
									?>			
										<option value="<?=$valueClube?>"><?=$ClubeLoop->Nome?></option>			
									<?php endforeach; ?>
								</select>

								<input class="form-control" type="text" placeholder="Gols" name="gols-time-fora-BRA">
							</div>
							Tipo de jogo
							<select name="tipo-jogo-BRA">
								<option value>AMISTOSO</option>
								<?php foreach($ligasBra as $ligaBrasil) : ?>
									<option value="<?=$ligaBrasil->CodigoLiga?>"><?=$ligaBrasil->NomeDaLiga?></option>
								<?php endforeach; ?>
							</select>
							<input type="submit" value="Registrar">
						</form>   
					</center>	
    			</div>

    			<div id="espanha" class="tab-pane fade">
      				<center>
    					<form method="get" action="Frm_Processor_RegistradorDePartidasESP.php">
    						<div class="box-team">
								<h4>Time Casa</h4>
								<hr>

								<img width="256px" height="256px" id="img-time-casa-ESP" src="">

								<hr>

								<select required onchange="SelecaoClube(this)" name="info-time-casa-ESP">			<option value=""></option>
									<?php foreach($clubesEsp as $ClubeLoop) : ?>
									<?php
										$valueClube = $ClubeLoop->Escudo . "-" . $ClubeLoop->ChavePrimaria;
									?>			
										<option value="<?=$valueClube?>"><?=$ClubeLoop->Nome?></option>			
									<?php endforeach; ?>
								</select>
								<input class="form-control" type="text" placeholder="Gols" name="gols-time-casa-ESP">
							</div>
							<div class="box-team">
								<h4>Time Fora</h4>
								<hr>

								<img width="256px" height="256px" id="img-time-fora-ESP" src="">

								<hr>

								<select required onchange="SelecaoClube(this)" name="info-time-fora-ESP">			<option value=""></option>
									<?php foreach($clubesEsp as $ClubeLoop) : ?>
									<?php
										$valueClube = $ClubeLoop->Escudo . "-" . $ClubeLoop->ChavePrimaria;
									?>			
										<option value="<?=$valueClube?>"><?=$ClubeLoop->Nome?></option>			
									<?php endforeach; ?>
								</select>
								<input class="form-control" type="text" placeholder="Gols" name="gols-time-fora-ESP">
							</div>
							Tipo de jogo
							<select name="tipo-jogo-ESP">
								<option value>AMISTOSO</option>
								<?php foreach($ligasEsp as $ligaEspanha) : ?>
									<option value="<?=$ligaEspanha->CodigoLiga?>"><?=$ligaEspanha->NomeDaLiga?></option>
								<?php endforeach; ?>
							</select>
							<input type="submit" value="Registrar">
						</form>   
					</center>	
    			</div>

    			<div id="franca" class="tab-pane fade">
      				<center>
    					<form method="get" action="Frm_Processor_RegistradorDePartidasFRA.php">
    						<div class="box-team">
								<h4>Time Casa</h4>
								<hr>

								<img width="256px" height="256px" id="img-time-casa-FRA" src="">

								<hr>

								<select required onchange="SelecaoClube(this)" name="info-time-casa-FRA">			<option value=""></option>
									<?php foreach($clubesFra as $ClubeLoop) : ?>
									<?php
										$valueClube = $ClubeLoop->Escudo . "-" . $ClubeLoop->ChavePrimaria;
									?>			
										<option value="<?=$valueClube?>"><?=$ClubeLoop->Nome?></option>			
									<?php endforeach; ?>
								</select>
								<input class="form-control" type="text" placeholder="Gols" name="gols-time-casa-FRA">
							</div>
							<div class="box-team">
								<h4>Time Fora</h4>
								<hr>

								<img width="256px" height="256px" id="img-time-fora-FRA" src="">

								<hr>

								<select required onchange="SelecaoClube(this)" name="info-time-fora-FRA">			<option value=""></option>
									<?php foreach($clubesFra as $ClubeLoop) : ?>
									<?php
										$valueClube = $ClubeLoop->Escudo . "-" . $ClubeLoop->ChavePrimaria;
									?>			
										<option value="<?=$valueClube?>"><?=$ClubeLoop->Nome?></option>			
									<?php endforeach; ?>
								</select>
								<input class="form-control" type="text" placeholder="Gols" name="gols-time-fora-FRA">
							</div>
							Tipo de jogo
							<select name="tipo-jogo-FRA">
								<option value>AMISTOSO</option>
								<?php foreach($ligasFra as $ligaFranca) : ?>
									<option value="<?=$ligaFranca->CodigoLiga?>"><?=$ligaFranca->NomeDaLiga?></option>
								<?php endforeach; ?>
							</select>
							<input type="submit" value="Registrar">
						</form>   
					</center>	
    			</div>

    			<div id="inglaterra" class="tab-pane fade">
      				<center>
    					<form method="get" action="Frm_Processor_RegistradorDePartidasING.php">
    						<div class="box-team">
								<h4>Time Casa</h4>
								<select name="info-time-casa-ING">			
									<?php foreach($clubesIng as $ClubeLoop) : ?>			
										<option value="<?=$ClubeLoop->ChavePrimaria?>"><?=$ClubeLoop->Nome?></option>			
									<?php endforeach; ?>
								</select>
								<input class="form-control" type="text" placeholder="Gols" name="gols-time-casa-ING">
							</div>
							<div class="box-team">
								<h4>Time Fora</h4>
								<select name="info-time-fora-ING">			
									<?php foreach($clubesIng as $ClubeLoop) : ?>			
										<option value="<?=$ClubeLoop->ChavePrimaria?>"><?=$ClubeLoop->Nome?></option>			
									<?php endforeach; ?>
								</select>
								<input class="form-control" type="text" placeholder="Gols" name="gols-time-fora-ING">
							</div>
							Tipo de jogo
							<select name="tipo-jogo-ING">
								<option value>AMISTOSO</option>
								<?php foreach($ligasIng as $ligaInglaterra) : ?>
									<option value="<?=$ligaInglaterra->CodigoLiga?>"><?=$ligaInglaterra->NomeDaLiga?></option>
								<?php endforeach; ?>
							</select>
							<input type="submit" value="Registrar">
						</form>   
					</center>	
    			</div>

    			<div id="competicao-internacional" class="tab-pane fade">
      				<center>
    					<form method="get" action="Frm_Processor_RegistradorDePartidas.php">
    						<div class="box-team">
								<h4>Time Casa</h4>
								<select name="info-time-casa">			
									<?php foreach($ListaClubes as $ClubeLoop) : ?>			
										<option value="<?=$ClubeLoop->ChavePrimaria?>"><?=$ClubeLoop->Nome?></option>			
									<?php endforeach; ?>
								</select>
								<input class="form-control" type="text" placeholder="Gols" name="gols-time-casa">
							</div>
							<div class="box-team">
								<h4>Time Fora</h4>
								<select name="info-time-fora">			
									<?php foreach($ListaClubes as $ClubeLoop) : ?>			
										<option value="<?=$ClubeLoop->ChavePrimaria?>"><?=$ClubeLoop->Nome?></option>			
									<?php endforeach; ?>
								</select>
								<input class="form-control" type="text" placeholder="Gols" name="gols-time-fora">
							</div>
							Tipo de jogo
							<select name="tipo-jogo">
								<option value>AMISTOSO</option>
								<?php foreach($ligasInternacionais as $ligaInt) : ?>
									<option value="<?=$ligaInt->CodigoLiga?>"><?=$ligaInt->NomeDaLiga?></option>
								<?php endforeach; ?>
							</select>
							<input type="submit" value="Registrar">
						</form>   
					</center>	
    			</div>
  			</div>
		</div>

	</body>
</html>	


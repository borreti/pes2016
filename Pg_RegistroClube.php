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
		<div class="container">
			<nav class="navbar navbar-default">
  				<div class="container-fluid">
    				<div class="navbar-header">
      					<a class="navbar-brand" href="#">WebSiteName</a>
    				</div>
    				<ul class="nav navbar-nav">
     					<li><a href="index.php">Inicio</a></li>
						<li class="active"><a href="Pg_RegistroClube.php">Registrar novo clube</a></li> 
						<li><a href="Pg_Mural.php">Mural dos campeões</a></li> 
						<li><a href="Pg_RegistroCampeao.php"> Registrar novo campeão </a></li>
						<li><a href="Pg_HistoricoPartidas.php">Histórico de partidas</a></li>
						<li><a href="Pg_RegistroPartida.php">Registrar partida </a></li>
    				</ul>
  				</div>
			</nav>

			<form method="get" action="Frm_Processor_RegistradorDeClubes.php">
				<div>
					<center><h3><span class="titulo-reg-clube">Informações do clube</span></h3>
						<hr class="lines">
					 <span class="label-registro-clube">Nome do clube</span>
					 <input type="text" class="input-nome-clube" aria-describedby="basic-addon1">
					<div class="form-group">
						<span class="label-registro-clube">Nacionalidade</span>
						<select class="select-nacionalidade" name="Nacionalidade">
							<option value="ARGENTINA">Argentina</option>
							<option value="ALEMANHA">Alemanha</option>
							<option value="BRASIL">Brasil</option>
							<option value="CHILE">Chile</option>
							<option value="ESPANHA">Espanha</option>
							<option value="FRANCA">França</option>
							<option value="HOLANDA">Holanda</option>
							<option value="INGLATERRA">Inglaterra</option>
							<option value="ITALIA">Itália</option>
							<option value="JAPAO">Japão</option>
							<option value="PORTUGAL">Portugal</option>
						</select>
					</div>
					<hr class="lines">
					<input class="input-reg-partida" type="submit" value="Registrar o novo clube">
					</center>
				</div>
			</form>
		</div>
	</body>
</html>	
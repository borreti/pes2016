<?php
	include 'BDManager.php';
	
	$vencedor;

	$golsTC = $_GET['gols-time-casa-ING'];
	$golsTF = $_GET['gols-time-fora-ING'];
	$str_timeCasa = $_GET['info-time-casa-ING'];
	$str_timeFora = $_GET['info-time-fora-ING'];
	$tipoDeJogo = $_GET['tipo-jogo-ING'];


	$ar1 = str_split($str_timeCasa);
	$ar2 = str_split($str_timeFora);

	$timeCasa = "";
	$timeFora = "";

	$char = "";
	$count = 0;

	while ($char != '-'){
		$char =	$ar1[$count];
		$count++;
	}

	for ($i = $count; $i < count($ar1); $i++)
		$timeCasa .= $ar1[$i];

	$count = 0;
	$char = "";

	while ($char != '-'){
		$char =	$ar2[$count];
		$count++;
	}

	for ($i = $count; $i < count($ar2); $i++)
		$timeFora .= $ar2[$i];
	
	if($golsTC > $golsTF)
		$vencedor = $timeCasa;
	
	else if ($golsTF > $golsTC)
		$vencedor = $timeFora;

	else
		$vencedor = 0;
	
	if ($timeCasa != $timeFora)
	{
	$b = new BDManager();
	$b->RegistrarPartida($timeCasa, $golsTC, $timeFora, $golsTF, $vencedor, $tipoDeJogo);
	header("location: Info_PartidaRegistrada_Sucesso.php");
	}
	
	else
	{
		header("location: Info_PartidaRegistrada_Falha.php");
	}
	
?>
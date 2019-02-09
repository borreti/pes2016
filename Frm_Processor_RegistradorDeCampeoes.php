<?php
	include 'BDManager.php';
	$b = new BDManager();

	$codigo = "null";

	if ($_GET['codigo-partida'] != "")
		$codigo = $_GET['codigo-partida'];

	$b->RegistrarCampeao($_GET['temporada'], $_GET['liga-disputada'], $_GET['time-campeao']);
    header("location: Info_CampeaoRegistrado");
?>
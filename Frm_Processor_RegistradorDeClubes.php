<?php
	include 'BDManager.php';
	$b = new BDManager();

	$nome = $_GET['nome-clube'];
	$clube = $_GET['Nacionalidade'];

	$b->RegistrarClube($_GET['nome-clube'], $_GET['Nacionalidade']);
	header("location: Info_ClubeRegistrado.php");
?>
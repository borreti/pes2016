<?php

	include 'Clube.php';
	include 'Class_Liga.php';
	include 'Class_Partida.php';

class BDManager {
	private $user = 'root';
	private $pw = '';
	private $adress = '127.0.0.1';
	private $mysqli;
	private $StartDBQuery = 'USE DB_PES2016;';
	
	public function __construct()
	{
	$this->mysqli = new mysqli($this->adress, $this->user, $this->pw, "db_pes2016");
	}
	
	public function CarregarClubes()
	{
		$data =	$this->mysqli->query("SELECT Nome, Escudo, ChavePrimaria, Nacionalidade FROM Tbl_Clubes ORDER BY Nome;");
        $arrayClubes = array();		
		
		while ($coluna = $data->fetch_assoc())
			$arrayClubes[] = new Clube($coluna['Nome'], $coluna['Escudo'], $coluna['ChavePrimaria'], $coluna['Nacionalidade']);
		
		return $arrayClubes;
	}

	public function CarregarLigas()
	{
		$data =	$this->mysqli->query("SELECT CodigoLiga, NomeDaLiga, Nacionalidade, Tipo FROM Tbl_Ligas;");
        $arrayLigas = array();		
        $contador = 0;

		while($coluna = $data->fetch_assoc()){
			$arrayLigas[$contador] = new Liga($coluna['CodigoLiga'], $coluna['NomeDaLiga'], $coluna['Nacionalidade'], $coluna['Tipo']);
			$data1 = $this->mysqli->query("SELECT tbl_clubes.Nome, tbl_clubes.Escudo, tbl_campeoes.CodigoClubeCampeao, tbl_ligas.NomeDaLiga,tbl_ligas.CodigoLiga, tbl_campeoes.Temporada 
				FROM ((tbl_clubes 
				INNER JOIN tbl_campeoes ON tbl_clubes.ChavePrimaria = tbl_campeoes.CodigoClubeCampeao)
				INNER JOIN tbl_ligas ON tbl_campeoes.CodigoLigaDisputada = tbl_ligas.CodigoLiga) WHERE CodigoLigaDisputada =" . $arrayLigas[$contador]->CodigoLiga . " ORDER BY tbl_campeoes.Temporada;" );
			 while($row = $data1->fetch_assoc())
			 	$arrayLigas[$contador]->AdicionarCampeao($row['Nome'], $row['Temporada'], $row['Escudo']);

			 $contador++;
		}
		
		return $arrayLigas;
	}

	public function CarregarPartidas()
	{
		$data = $this->mysqli->query("SELECT Codigo, TimeCasa, TimeFora, GTc, GTf, Vencedor, TipoDeJogo FROM Tbl_Partidas ORDER BY Codigo DESC LIMIT 10;");
		$arrayPartidas = array();

		while ($coluna = $data->fetch_assoc())
			$arrayPartidas[] = new Partida($coluna['TimeCasa'], $coluna['TimeFora'], $coluna['GTc'], $coluna['GTf'], $coluna['Vencedor'], $coluna['TipoDeJogo'], $coluna['Codigo']);

		return $arrayPartidas;
	}
	
	public function RegistrarPartida($timeCasa, $golsTimeCasa, $timeFora, $golsTimeFora, $vencedor, $tipoDaPartida)
	{
		try
		{
		$this->mysqli->query("INSERT INTO Tbl_Partidas VALUES (default," . $timeCasa . ", ". $timeFora . ", " . $golsTimeCasa .
		", " . $golsTimeFora . ", " . $vencedor . ", " . $tipoDaPartida .  ");");
		}

		catch(Exception $e)
		{
			$e->GetMessage();
		}
	}

	public function RegistrarClube($nomeDoClube, $nacionalidade)
	{
		$vetorChar = str_split($nomeDoClube);

		$referenciaEscudo = "";
		foreach ($vetorChar as $c) {
			if($c != ' ')
				$referenciaEscudo .= $c;
			else
				$referenciaEscudo .='_';
		}

		$referenciaEscudo .=".png";

		$this->mysqli->query("INSERT INTO Tbl_Clubes VALUES (default, '" . $nomeDoClube . "', '" . $referenciaEscudo . "', '" . $nacionalidade . "');");
	}

	public function RegistrarCampeao($temporada, $codigoLiga, $vencedor)
	{
		$this->mysqli->query("INSERT INTO Tbl_Campeoes (CodigoTitulo, Temporada, CodigoLigaDisputada, CodigoClubeCampeao) VALUES (default, " . $temporada . ", " . $codigoLiga . ", " . $vencedor . ");");
	}
}

?>
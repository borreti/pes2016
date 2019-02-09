<?php

include 'Class_Campeao.php';

class Liga{
	private $CodigoLiga;
	private $NomeDaLiga;
	private $Nacionalidade;
	private $Tipo;
	private $ListaCampeoes;

	public function __construct($codigo, $nome, $nac, $tipo)
	{
		$this->CodigoLiga = $codigo;
		$this->NomeDaLiga = $nome;
		$this->Nacionalidade = $nac;
		$this->Tipo = $tipo;
		$this->ListaCampeoes = array();
	}

	public function __set($property, $value) {
		if(property_exists(get_class($this), $property)) {
			$this->$property = $value;
		}
	}

	public function __get($property) {
		if(property_exists(get_class($this), $property)) {
			return $this->$property;
		}
	}

	public function AdicionarCampeao($nome, $temporada, $escudo){
		$this->ListaCampeoes [] = new Campeao($nome, $temporada, $escudo);
	}

	public static function LocalizarLiga($arrayLigas, $chave)
	{
		foreach ($arrayLigas as $liga)
		{
			if ($liga->CodigoLiga == $chave)
				return $liga;
		}
		return null;
	}
}

?>
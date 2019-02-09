<?php

class Clube{
	private $Nome;
	private $Escudo;
	private $ChavePrimaria;
	private $Nacionalidade;

	
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
	
	public function __construct($nome, $escudo, $chave, $nacionalidade)
	{
		$this->Nome = $nome;
		$this->Escudo = "escudos/" . $escudo;
		$this->ChavePrimaria = $chave;
		$this->Nacionalidade = $nacionalidade;
	}

	public static function LocalizarClube($arrayClubes, $chave)
	{
		foreach ($arrayClubes as $clube) {
			if ($clube->ChavePrimaria == $chave)
				return $clube;
		}

		return null;
	}
}

?>
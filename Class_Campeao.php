<?php

class Campeao{
	private $Nome;
	private $Escudo;
	private $Temporada;

	public function __construct($Nome, $temp, $esc){
		$this->Nome = $Nome;
		$this->Temporada = $temp;
		$this->Escudo = "escudos/" . $esc;
	}


	public function __get($property){
		if (property_exists(get_class($this), $property))
		return	$this->$property;
	}

	public function __set($property, $value){
		if(property_exists(get_class($this), $property))
			$this->$property = $value;
	}
}

?>
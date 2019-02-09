<?php

class Partida{
	private $time_fora;
	private $time_casa;
	private $gol_time_casa;
	private $gol_time_fora;
	private $time_vencedor;
	private $ligaDisputada;
	private $codigo;

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

	public function __construct($tc, $tf, $gtc, $gtf, $vencedor, $tipo, $codigo){
		$this->time_casa = $tc;
		$this->time_fora = $tf;
		$this->gol_time_casa = $gtc;
		$this->gol_time_fora = $gtf;
		$this->time_vencedor = $vencedor;
		$this->ligaDisputada = $tipo;
		$this->codigo = $codigo;
	}
}

?>
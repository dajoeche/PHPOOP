<?php

class P_MesAnimal
{
  use MArray;
  
  public $itemsTabla;
  public $mes;
  public $dia;
  public $resultado;
  public $tabla;
  public $fila;
  public $bandera='OFF';
 
    function ejecutar() {
		$this->configurarFuncionRetornoExtraerFila("iterarMes");
		$this->extraerFila($this->mes);
    }  
    
    public function iterarMes($semana) {
		$this->configurarFuncionRetornoExtraerColumna('iterarSemana');
		$this->extraerColumna($semana);
		$this->guardarFila();
		$this->borrarFila();	
	}    
    
    public function guardarFila() {
		$this->tabla[] = $this->fila;
	}    
    
    public function borrarFila() {
		$this->fila=array();
	}    
    
    public function iterarSemana($dia) {
		$this->setDia($dia);
		$this->configurarFuncionRetornoIterarArray('iterarResultado');
		$this->iterarArray($this->resultado);	
		$this->setSalidas();
		$this->reiniciarBandera();
	}    
    
    public function setSalidas() {
		
		if ($this->bandera=='ON'){
			$this->salioUnaVez();
			
		} elseif($this->bandera=='RE') {
			$this->salioDosVeces();
			
		} elseif($this->bandera=='TR') {
			$this->salioTresVeces();
			
		} else {
			$this->noSalio();
		}
	} 
    
    public function salioUnaVez() {
		$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"amarillo"));
	} 
    
    public function salioDosVeces() {
		$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"gris"));
	} 
    
    public function salioTresVeces() {
		$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"mora"));
	} 
    
    public function noSalio() {
		$this->fila[] = substr($this->dia,-2);
	} 
    
    public function reiniciarBandera() {
		$this->setBandera('OFF');
	} 
    
    public function iterarResultado($resultado) {
		if ($this->dia==$resultado[1] and $this->bandera<>'ON' and $this->bandera<>'RE' and $this->bandera<>'TR'){
			$this->setBanderaSalioUnaVez();
		} elseif ($this->dia==$resultado[1] and $this->bandera=='ON'){
			$this->setBaderaSalioDosVeces();
		} elseif ($this->dia==$resultado[1] and $this->bandera=='RE'){
			$this->setBaderaSalioTresVeces('TR');
		}    
	}
	
    public function setBanderaSalioUnaVez() {
		$this->setBandera('ON');
	}   
	
    public function setBaderaSalioDosVeces() {
		$this->setBandera('RE');
	}
	
    public function setBaderaSalioTresVeces() {
		$this->setBandera('TR');
	}   
		
    public function setDia($dia) { $this->dia = $dia; }
    public function setMes($mes) { $this->mes = $mes; }
    public function setBandera($bandera) { $this->bandera = $bandera; }
    public function setResultado($resultado) { $this->resultado = $resultado; }
}

?>

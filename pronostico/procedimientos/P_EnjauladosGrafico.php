<?php

class P_EnjauladosGrafico extends P_ResultadosGrafico
{
  use MArray, Utilitario;
  
  public $color = 'gris';
  public $limite = 59;
  public $enjaulados;

 
    function __construct($fecha, $loteria, $sorteo) { 
		$this->fecha=$fecha;
		$this->loteria=$loteria;
		$this->sorteo=$sorteo;
		//$this->manana=$manana;
		//$this->crearObjeto();	
		//echo "<pre>";	
		//print_r($this->listado);   
		if ($this->sorteo==13){
			$this->enjaulados = new M_EnjauladosDiario($fecha,$this->loteria,$this->sorteo);
		}else {
			$this->enjaulados = new M_EnjauladosLimit($fecha,$this->loteria,$this->sorteo,$this->limite);
		}
		//echo "<pre>";	
		//print_r($this->enjaulados->tabla);
		
		$this->configurarFuncionRetornoIterarArray("iterarResultado");
		$this->iterarArray($this->enjaulados->tabla);	
			
 
		$this->tabla=$this->listado; 		
    }  

 
}

?>

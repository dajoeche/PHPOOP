<?php

class Descripcion
{
  use Utilitario, MArray;

  public $actual=array();
  public $anterior=array();
  public $sorteo;
  public $hora;
  public $fila;
  public $tabla;

 
    function __construct($sorteo) {
		$this->sorteo=$sorteo;
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		$this->configurarFuncionRetornoExtraerFila("obtenerAnimal");
		$this->extraerFila($this->sorteo);
		
    }
        
    public function obtenerAnimal($animal) { //echo "<pre>";
		
		//echo $animal[0]." ". $this->getPosicionAnimal($animal[0]);
		$animal[]=$this->getPosicionAnimal($animal[0]);
		$this->tabla[] = $animal;
		//print_r($animal);
		/*$this->actual=$animal;
		if (isset($this->anterior[1])){
			//echo $animal[0].'<br>';
			$resta = $this->anterior[3] - $this->actual[3]+31;
			if ($resta>37){
				$resta = $resta - 15;
			}
			echo $this->actual[3].' '.$this->anterior[3].' '.$resta.'<br>'; */
		//}
		
		//$this->anterior=$this->actual;
		//$this->actual=array();
    }    

}

?>

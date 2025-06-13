<?php

class DiasSinSalir
{
  use Utilitario, MArray;

  public $actual=array();
  public $anterior=array();
  public $sorteo;
  public $dias;
  public $hora;
  public $fila;
  public $tabla;

 
    function __construct($sorteo,$hora) {
		$this->sorteo=$sorteo;
		$this->hora=$hora;
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		$this->configurarFuncionRetornoExtraerFila("obtenerDias");
		$this->extraerFila($this->sorteo);
		
    }
        
    public function obtenerDias($animal) { //echo "<pre>";
		
		//echo $animal[0].' '.$animal[7]."<br>";
		$this->dias = new ObtenerDiasSinSalir($animal[0], $animal[7], $this->hora, 'LAC');
		
		$animal[]=$this->dias->tabla[0][0];
		$this->tabla[] = $animal;
		//echo '<pre>';
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

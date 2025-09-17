<?php

class TablaRepetidoDiario extends TablaBaseFechaLoteria
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $repetidoDiario;
  public $loteria;
  public $sorteo;
  public $nombreObjeto='M_RepetidoDiario';
  public $titulo =  "Repetido Diario";
  public $captionTabla =  "Repetido Diario";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Veces","Numero","Animal","Fecha"));
  public $itemsTabla =  array(array("Alfreds Futterkiste", "Maria Anders", "Germany"),
                              array("Centro Comercial Moctezuma","Francisco Chang", "Mexico"),
							  array("Ernst Handel","Roland Mendel", "Austria"),
							  array("Island Trading","Helen Bennett", "UK"),
							  array("Laughing Bacchus Winecellars","Yoshi Tannamuri", "Canada"),
							  array("Magazzini Alimentari Riuniti","Giovanni Rovelli", "Italy"),
                                );
   /* function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
		if (isset($_POST["fecha"])){ 
				$fecha = $_POST["fecha"]; 
				$this->loteria = $_POST["loteria"];		
		   } 
		else {
				$fecha = date("Y-m-d"); 
	            $this->loteria = 'LAC';	         		         	
		     }     
		$this->titulo = $this->titulo.' '.$fecha.' - '.$this->getLoteria($this->loteria);
		$date = new DateTime($fecha);
		//$date->modify("-1 day");
		$fecha = $date->format("Y-m-d");
		//$this->titulo = $this->titulo.' '.$fecha.' '.$this->loteria;
		$this->repetidoDiario = new M_RepetidoDiario($fecha,$this->loteria);

		 $this->itemsTabla=$this->repetidoDiario->tabla;
    }  */  

}

?>

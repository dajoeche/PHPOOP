<?php

class TablaDescartes extends TituloTabla
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $loteria;
  public $animal;
  public $sorteos;
  public $titulo =  "Descartes";
  public $captionTabla =  "Descartes";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array();
  public $itemsTabla;
 
    function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
		if (isset($_POST["fecha"])){ 
				$fecha = $_POST["fecha"]; 
				$loteria = $_POST["loteria"]; 
				$sorteo = $_POST["sorteo"]; 

		   } 
		else {
				$fecha = date("Y-m-d");   
				$loteria = 'LAC';    	
				$sorteo = '1';    	  	
 	
		     } 
		     
		$this->titulo = $this->titulo.' '.$fecha.' '.$this->getLoteria($loteria).' '.$this->getSorteo($sorteo);
		

		$this->sorteos = new Descartes($fecha, $loteria, $sorteo);
		//$this->encabezadoTabla = $this->encabezadoTabla;
		//echo '<pre>';
		//print_r($this->sorteos->encabezadoTabla);
		$this->itemsTabla=$this->sorteos->tabla;
    }     

}

?>

<?php

class TablaSorteos extends TituloTabla
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $loteria;
  public $animal;
  public $sorteos;
  public $titulo =  "Sorteos";
  public $captionTabla =  "Sorteos";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Sorteo"));
  public $itemsTabla;
 
    function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
		if (isset($_POST["fecha"])){ 
				$fecha = $_POST["fecha"]; 
				$loteria = $_POST["loteria"]; 
				$animal = $_POST["animal"]; 
		   } 
		else {
				$fecha = date("Y-m-d");   
				$loteria = 'LAC';    	
				$animal = '00';    	
		     } 
		$this->titulo = $this->titulo.' '.$fecha.' '.$loteria;
		$this->sorteos = new Sorteos($fecha, $loteria,$animal);
		$this->encabezadoTabla = $this->sorteos->encabezadoTabla;
		//echo '<pre>';
		//print_r($this->sorteos->encabezadoTabla);
		$this->itemsTabla=$this->sorteos->tabla;
    }     

}

?>

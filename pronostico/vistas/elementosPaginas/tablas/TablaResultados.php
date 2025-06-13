<?php

class TablaResultados extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $resultados;
  public $loteria;
  public $titulo =  "Resultados";
  public $captionTabla =  "Resultados";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Sorteo", "Numero","Nombre Animal","Suma De","Color","Posicion","Sector","Fila"));
  public $itemsTabla;
 
    function __construct() {
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
		//$this->titulo = $this->titulo.' '.$fecha;
		$this->resultados = new Resultados($fecha, $this->loteria);
		 $this->itemsTabla=$this->resultados->tabla;
    }    

}

?>

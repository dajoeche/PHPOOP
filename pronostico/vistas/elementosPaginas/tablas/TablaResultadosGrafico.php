<?php

class TablaResultadosGrafico extends TituloTabla
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $loteria;
  public $animal;
  public $resultados;
  public $titulo =  "Grafico";
  public $captionTabla =  "Descartes";
  public $atributosTabla =  array("id"=>"tablon");
  public $encabezadoTabla =  array();
  public $itemsTabla;
 
    function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
		if (isset($_POST["fecha"])){ 
				$fecha = $_POST["fecha"]; 
				$loteria = $_POST["loteria"]; 

		   } 
		else {
				$fecha = date("Y-m-d");   
				$loteria = 'LAC';    	   	
 	
		     } 
		     
		$this->titulo = $this->titulo.' '.$fecha.' '.$this->getLoteria($loteria);
		

		$this->resultados = new ResultadosGrafico($fecha, $loteria);
		//$this->encabezadoTabla = $this->encabezadoTabla;
		//echo '<pre>';
		//print_r($this->sorteos->encabezadoTabla);
		$this->itemsTabla=$this->resultados->tabla;
    }     

}

?>

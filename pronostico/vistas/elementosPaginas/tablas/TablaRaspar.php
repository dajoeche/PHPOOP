<?php
date_default_timezone_set('America/Caracas');
class TablaRaspar extends TituloTabla
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $loteria;
  public $fecha;
  public $racha;
  public $obtenerPagina;
  public $sorteo;
  public $titulo =  "Raspar";
  public $captionTabla =  "Raspar";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Loteria","08:00","09:00","10:00","11:00","12:00","01:00","02:00","03:00","04:00","05:00","06:00","07:00"));
  public $itemsTabla;
 
    function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
        $this->obtenerHoy();
        $this->crearInstanciaObjeto();	
        $this->titulo = $this->titulo.' / '.$this->fecha.' / '.date("H:i:s");
        $this->itemsTabla=$this->obtenerPagina->tabla;
        
		
    }
         
    function obtenerHoy() {
		if (isset($_POST["fecha"])){ 
				$this->fecha = $_POST["fecha"]; 
		   } 
		else {
				$this->fecha = date("Y-m-d");     	
		     } 		     
    }
    
    function crearInstanciaObjeto() {
		$this->obtenerPagina = new ObtenerPagina($this->fecha);		      
    }
    
}

?>

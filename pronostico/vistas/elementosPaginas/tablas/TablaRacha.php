<?php
date_default_timezone_set('America/Caracas');
class TablaRacha extends TituloTabla
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $loteria;
  public $fecha;
  public $racha;
  public $animales;
  public $sorteo;
  public $titulo =  "Racha";
  public $captionTabla =  "Racha";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Racha","Numero","Nombre Animal"));
  public $itemsTabla;
 
    function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
		if (isset($_POST["loteria"])){ 
				$this->loteria = $_POST["loteria"];	
				$this->fecha = $_POST["fecha"];	
		   } 
		else {
	            $this->loteria = 'LAC';	    
	            $this->fecha  = date('Y-m-d');   	
		     } 
		$this->titulo = $this->titulo.' - '.$this->getLoteria($this->loteria).' - '.$this->fecha;
		//$date = new DateTime($fecha);
		//$date->modify("-1 day");
		//$fecha = $date->format("Y-m-d");
		//$this->titulo = $this->titulo.' '.$fecha;
		$this->animales = new Animales($this->loteria);
		$this->racha = new Racha($this->animales->tabla, $this->loteria, $this->fecha);
		
		 $this->itemsTabla=$this->racha->tabla;
    }     

}

?>

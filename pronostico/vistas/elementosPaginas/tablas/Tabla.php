<?php

class Tabla extends TituloTabla
{
	use Utilitario;

  public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $pruebaSecuenciaSorteo;
  public $nombreObjeto='PruebaSecuenciaSorteo';
  public $limiteSecuencia=39;
  public $loteria;
  public $objeto;
  public $animal;
  public $fecha;
  public $ayer;
  public $sorteo;
  public $titulo =  "Titulo";
  public $captionTabla =  "Titulo";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("","Numero","Nombre Animal", "Sector", "Fila", "Color", "Suma De", "Fecha"));
  public $itemsTabla;
  
 
    function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {  

		if (isset($_POST["fecha"])){ 
			$this->setDatosPost();
		   } 
		else {
      	    $this->setDatosPorDefecto();   	
		     }    
       
		$this->crearInstanciaObjeto();
		$this->inicializarVariablesObjeto();
		$this->objeto->ejecutar();
		$this->setTituloTabla();
		$this->guardarResultadoTabla();
		
    } 

    public function setDatosPost() {
		$this->fecha = $_POST["fecha"]; 
		$this->loteria = $_POST["loteria"];	
	}
	
    public function setDatosPorDefecto() {
		$this->fecha = date("Y-m-d"); 
	    $this->loteria = 'LAC';	      
	}  
			
    public function crearInstanciaObjeto() {
		$this->objeto = new $this->nombreObjeto(); 
	}    

    public function inicializarVariablesObjeto() {
		$this->objeto->setFecha($this->fecha);
		$this->objeto->setLoteria($this->loteria);				
	}
  
    public function setTituloTabla() {
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria);
	}
	
    public function guardarResultadoTabla() { 
		$this->itemsTabla=$this->objeto->tabla;
	}
		
}

?>

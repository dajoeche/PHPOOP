<?php

class TablaPruebaSecuenciaSorteo extends TituloTabla
{
	use Utilitario;

  public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $pruebaSecuenciaSorteo;
  public $limiteSecuencia=39;
  public $loteria;
  public $animal;
  public $fecha;
  public $ayer;
  public $sorteo;
  public $titulo =  "Prueba Secuencia Sorteo";
  public $captionTabla =  "Secuencia";
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

		$this->obtenerDiaAnterior();         
		$this->crearInstanciaObjeto();
		$this->inicializarVariablesObjeto();
		$this->pruebaSecuenciaSorteo->ejecutar();
		$this->setTituloTabla();
		$this->guardarResultadoTabla();
		
    } 

    public function setDatosPost() {
		$this->fecha = $_POST["fecha"]; 
		$this->loteria = $_POST["loteria"];	
		$this->sorteo = $_POST["sorteo"];	
	}
	
    public function setDatosPorDefecto() {
		$this->fecha = date("Y-m-d"); 
	    $this->loteria = 'LAC';	   
	    $this->sorteo = '1';	   
	}  
			
    public function crearInstanciaObjeto() {
		$this->pruebaSecuenciaSorteo = new PruebaSecuenciaSorteo(); 
	}    

    public function inicializarVariablesObjeto() {
		$this->pruebaSecuenciaSorteo->setFecha($this->fecha);
		$this->pruebaSecuenciaSorteo->setLoteria($this->loteria);		
		$this->pruebaSecuenciaSorteo->setSorteo($this->sorteo);			
	}
  
    public function setTituloTabla() {
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria).' - '.$this->getSorteo($this->sorteo);
	}
	
    public function guardarResultadoTabla() { 
		$this->itemsTabla=$this->pruebaSecuenciaSorteo->tabla;
	}
		
}

?>

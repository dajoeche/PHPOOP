<?php

class TablaSalioAyer extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $resultados;
  public $loteria;
  public $fecha;
  public $ayer;
  public $sorteo;
  public $salioAyer;
  public $sumadeObjeto;
  public $titulo =  "Salio Ayer";
  public $captionTabla =  "SalioAyer";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Número", "Animal","Sorteo"));
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
		$this->salioAyer->ejecutar();
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

    public function obtenerDiaAnterior() {
		$this->ayer = $this->getAyer($this->fecha);
	}
		
    public function crearInstanciaObjeto() {
		$this->salioAyer = new M_SalioAyer(); 
	}

    public function inicializarVariablesObjeto() {
		$this->salioAyer->setFecha($this->fecha);
		$this->salioAyer->setAyer($this->ayer);
		$this->salioAyer->setLoteria($this->loteria);		
	}

    public function setTituloTabla() {
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria);
	}
	
    public function guardarResultadoTabla() {
		$this->itemsTabla=$this->salioAyer->tabla;
	}
}	
?>

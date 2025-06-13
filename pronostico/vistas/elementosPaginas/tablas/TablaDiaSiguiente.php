<?php

class TablaDiaSiguiente extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $resultados;
  public $resultadosManana;
  public $loteria='LAC';
  public $fechaInicio;
  public $fecha;
  public $manana;
  public $comparar;
  public $titulo =  "Dia Siguiente";
  public $captionTabla =  "Dia Siguiente";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Numero","Animal", "Fecha","Sorteo"));
  public $itemsTabla;
 
    function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {


		if (isset($_POST["loteria"])){ 
				$this->loteria = $_POST["loteria"];	
		   } 
		else {         	
	            $this->loteria = 'LAC';	         	
		     } 
		     
		$this->fechaInicio='2025-01-02';		
		//$this->fecha=date('Y-m-d');		
		$this->fecha=date('Y-m-d');		
		$date = new DateTime($this->fechaInicio);
		$this->comparar = new PrimerSorteo();	
		while ($this->fechaInicio < $this->fecha){
			//echo $this->fechaInicio.' '.$this->fecha.' '.'<br>';
			
			$this->resultados = new Resultado($this->fechaInicio, $this->loteria);
			$date->modify("+1 day");
			$this->fechaInicio = $date->format("Y-m-d");				
			//echo $this->fechaInicio.' '.$this->fecha.' '.'<br>';
			$this->resultadosManana = new Resultado($this->fechaInicio, $this->loteria);
			$this->comparar->setHoy($this->resultados->tabla);
			$this->comparar->setManana($this->resultadosManana->tabla);	
			$this->comparar->comparar();
		}

		//echo $this->comparar->contador;
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria);
		$this->itemsTabla=$this->comparar->tabla;
		//echo "<pre>";
		//print_r($this->comparar->tabla);
    }    

}

?>

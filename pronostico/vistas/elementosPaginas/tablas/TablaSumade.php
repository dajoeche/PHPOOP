<?php

class TablaSumade extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $resultados;
  public $loteria;
  public $fecha;
  public $ayer;
  public $sorteo;
  public $sumade;
  public $sumadeObjeto;
  public $titulo =  "Suma De";
  public $captionTabla =  "SumaDe";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Repeticiones", "Suma De"));
  public $itemsTabla;
 
    function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
		if (isset($_POST["fecha"])){ 
				$this->fecha = $_POST["fecha"]; 
				$this->loteria = $_POST["loteria"];	
				$this->sorteo = $_POST["sorteo"];	
				//$this->sumade = $_POST["sumade"];	
		   } 
		else {
				$this->fecha = date("Y-m-d"); 
	            $this->loteria = 'LAC';	         	
	            $this->sorteo = '1';	         	
	            //$this->sumade = '0';	         	
		     } 
		     
		$this->ayer = $this->getAyer($this->fecha);     
		$this->sumade = new SumadePorSorteo($this->loteria, $this->sorteo, $this->ayer);     
		$this->titulo = $this->titulo.' '.$this->fecha.' - '.$this->getLoteria($this->loteria).' - '.$this->getSorteo($this->sorteo).' - '.$this->sumade->sumade;
		$this->sumadeObjeto = new SumaDe($this->fecha, $this->loteria, $this->sorteo, $this->sumade->sumade);
		$this->itemsTabla=$this->sumadeObjeto->tabla;
    }    

}

?>

<?php

class TablaSecuencia extends TablaBaseFechaLoteriaSorteoLimite
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $animalPorSorteo;
  public $limiteSecuencia=39;
  public $limite;
  public $nombreObjeto='P_Secuencia';
  public $loteria;
  public $animal;
  public $fecha;
  public $ayer;
  public $sorteo;
  public $titulo =  "Secuencia";
  public $captionTabla =  "Secuencia";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Repetido", "Numero","Nombre Animal","Sector","Fila"));
  public $itemsTabla;
 
 
    public function setDatosPost() { 
		$this->fecha = $_POST["fecha"]; 
		$this->loteria = $_POST["loteria"];	
		$this->sorteo = $_POST["sorteo"];	
		$this->limite = $this->limiteSecuencia;	
	}
	
    public function setDatosPorDefecto() { 
		$this->fecha = date("Y-m-d"); 
	    $this->loteria = 'LAC';	      
	    $this->sorteo = '1';	      
	    $this->limite = $this->limiteSecuencia;	      
	}  

}

?>

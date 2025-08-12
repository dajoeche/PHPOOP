<?php

class TablaPorSorteo extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $porsorteo;
  public $descripcion;
  public $diasSinSalir;
  public $loteria;
  public $sorteo;
  public $tipo;
  public $titulo =  "Por Sorteo";
  public $captionTabla =  "Por Sorteo";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array( "Numero","Nombre Animal","Suma De","Color","Posicion","Sector","Fila","Fecha","Descripcion","Dias Sin Salir"));
  public $itemsTabla;
 
    function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
		if (isset($_POST["loteria"])){ 
				$this->loteria = $_POST["loteria"];	
				$this->sorteo = $_POST["sorteo"];	
				$this->tipo = $_POST["tipo"];	
		   } else {
	            $this->loteria = 'LAC';	         	
	            $this->sorteo = '1';	         	
	            $this->tipo = '1';	         	
		     } 
		$this->titulo = $this->titulo.' - '.$this->getLoteria($this->loteria).' - '.$this->getSorteo($this->sorteo);
		$this->porsorteo = new PorSorteo($this->loteria, $this->sorteo);
		$this->descripcion = new Descripcion($this->porsorteo->tabla);
		if($this->tipo == '1'){
			$this->diasSinSalir = new DiasSinSalir($this->descripcion->tabla,$this->sorteo);	
		} else {
			$this->diasSinSalir = new DiasSinSalirDiario($this->descripcion->tabla, $this->loteria);
			$this->encabezadoTabla =  array(array( "","Numero","Nombre Animal","Suma De","Color","Posicion","Sector","Fila","Fecha","Descripcion","Dias Sin Salir","Sorteo"));
		}
		
		$this->itemsTabla=$this->diasSinSalir->tabla;
    }    

}

?>

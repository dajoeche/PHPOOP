<?php

class TablaPorFila extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $pronosticarPorFila;
  public $loteria;
  public $titulo =  "Pronostico Por Fila";
  public $captionTabla =  "Pronostico Por Categoria";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Repetidos", "Fila"));
  public $itemsTabla =  array(array("Alfreds Futterkiste", "Maria Anders", "Germany"),
                              array("Centro Comercial Moctezuma","Francisco Chang", "Mexico"),
							  array("Ernst Handel","Roland Mendel", "Austria"),
							  array("Island Trading","Helen Bennett", "UK"),
							  array("Laughing Bacchus Winecellars","Yoshi Tannamuri", "Canada"),
							  array("Magazzini Alimentari Riuniti","Giovanni Rovelli", "Italy"),
                                );
    function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		if (isset($_POST["fecha"])){ 
				$fecha = $_POST["fecha"]; 
				$this->loteria = $_POST["loteria"];	
		   } 
		else {
				$fecha = date("Y-m-d"); 
	            $this->loteria = 'LAC';	         	
		     }     
		$fecha = $this->getAyer($fecha);
		$this->titulo = $this->titulo.' '.$fecha.' - '.$this->getLoteria($this->loteria);
		//$fecha = date("Y-m-d"); 
		//echo $fecha;
		$this->pronosticarPorFila = new PronosticarPorFila($fecha,$this->loteria);
		$this->itemsTabla=$this->pronosticarPorFila->tabla;
    }    

}

?>

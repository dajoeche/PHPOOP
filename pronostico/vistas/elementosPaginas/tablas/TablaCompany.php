<?php

class TablaCompany extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $pronosticarCategoria;
  public $loteria;
  public $titulo =  "Pronostico Por Categoria";
  public $captionTabla =  "Pronostico Por Categoria";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Repetidos", "Categoria"));
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
		$this->titulo = $this->titulo.' '.$fecha.' - '.$this->getLoteria($this->loteria);
		$date = new DateTime($fecha);
		$date->modify("-1 day");
		$fecha = $date->format("Y-m-d");
		//$fecha = date("Y-m-d"); 
		//echo $fecha;
		$this->pronosticarCategoria = new PronosticarCategoria($fecha,$this->loteria);
		$this->itemsTabla=$this->pronosticarCategoria->tabla;
    }    

}

?>

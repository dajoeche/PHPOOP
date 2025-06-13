<?php

class TablaEspejo extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $fecha;
  public $espejo;
  public $loteria;
  public $sorteo;
  public $resultado;
  public $animal;
  public $titulo =  "Espejo";
  public $captionTabla =  "Espejo";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Repetidos", "Numero","Animal","Categoria","Fila"));
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
				$this->fecha = $_POST["fecha"]; 
				$this->loteria = $_POST["loteria"];	
				$this->animal = $_POST["animal"];	
				$this->sorteo = $_POST["sorteo"];	
				
		   } 
		else {
				$this->fecha = date("Y-m-d"); 
	            $this->loteria = 'LAC';	         	         	
	            $this->animal = '00';	         	         	
	            $this->sorteo = '1';	         	         	
		     }     
		$this->titulo = $this->titulo.' '.$this->fecha.' '.$this->getLoteria($this->loteria).' '.$this->getAnimal($this->animal).' '.$this->getSorteo($this->sorteo);
		$this->espejo = new Espejo($this->fecha,$this->loteria,$this->animal,$this->sorteo);
		$this->itemsTabla=$this->espejo->tabla;
    }    

}

?>

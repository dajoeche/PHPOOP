<?php

class TablaEnjaulados extends TituloTabla
{

  public $etiquetaTitulo = "EtiquetaH1Html";
  public $enjaulados;
  public $titulo =  "Enjaulados";
  public $captionTabla =  "Enjaulados";
  public $atributosTabla =  array("id"=>"customers");
  public $encabezadoTabla =  array(array("Dias Sin Salir", "Ultima Fecha","Numero","Animal"));
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
		$this->enjaulados = new Enjaulados('2025-04-21');
		 $this->itemsTabla=$this->enjaulados->tabla;
    }    

}

?>

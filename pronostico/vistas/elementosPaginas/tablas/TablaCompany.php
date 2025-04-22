<?php

class TablaCompany extends TituloTabla
{

  public $etiquetaTitulo = "EtiquetaH1Html";
  public $pronosticarCategoria;
  public $titulo =  "Pronostico Por Categoria";
  public $captionTabla =  "Pronostico Por Categoria";
  public $atributosTabla =  array("id"=>"customers");
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
		$this->pronosticarCategoria = new PronosticarCategoria('2025-04-21');
		 $this->itemsTabla=$this->pronosticarCategoria->tabla;
    }    

}

?>

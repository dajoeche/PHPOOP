<?php

class TablaLeyendaDescartes extends TituloTabla
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH1Html";
  public $secuencia;
  public $loteria;
  public $animal;
  public $sorteos;
  public $titulo =  "Leyenda Descartes";
  public $captionTabla =  "Descartes";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Color", "Descripcion"));
  public $itemsTabla= array(
								array(array("dato"=>"     ","atributos"=>array("class"=>"amarillo")),' Salida dia anterior'),
								array(array("dato"=>"     ","atributos"=>array("class"=>"red")),' Enjaulados por sorteo'),
								array(array("dato"=>"     ","atributos"=>array("class"=>"mora")),' Enjaulados diario'),
								array(array("dato"=>"     ","atributos"=>array("class"=>"marron")),' Ultimas 10 salidas por sorteo'),
								array(array("dato"=>"     ","atributos"=>array("class"=>"verde")),' Secuencia'),
								array(array("dato"=>"     ","atributos"=>array("class"=>"aqua")),' Salidas de Hoy'),
								array(array("dato"=>"     ","atributos"=>array("class"=>"naranja")),' Secuencia Sorteo'),
							);
 
    function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
		$this->itemsTabla=$this->itemsTabla;
    }     

}

?>

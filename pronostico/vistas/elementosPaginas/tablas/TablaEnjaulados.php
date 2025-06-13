<?php

class TablaEnjaulados extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $enjaulados;
  public $loteria;
  public $sorteo;
  public $titulo =  "Enjaulados";
  public $captionTabla =  "Enjaulados";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Dias Sin Salir", "Ultima Fecha","Numero","Animal","Sector"));
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
				$this->sorteo = $_POST["sorteo"];	
		   } 
		else {
				$fecha = date("Y-m-d"); 
	            $this->loteria = 'LAC';	         	
	            $this->sorteo = '1';	         	
		     }     
		$this->titulo = $this->titulo.' '.$fecha.' - '.$this->getLoteria($this->loteria).' - '.$this->getSorteo($this->sorteo);
		$date = new DateTime($fecha);
		//$date->modify("-1 day");
		$fecha = $date->format("Y-m-d");
		//$this->titulo = $this->titulo.' '.$fecha.' '.$this->loteria;
		if ($this->sorteo==13){
			$this->enjaulados = new EnjauladosDiario($fecha,$this->loteria,$this->sorteo);
		}else {
			$this->enjaulados = new Enjaulados($fecha,$this->loteria,$this->sorteo);
		}
		 $this->itemsTabla=$this->enjaulados->tabla;
    }    

}

?>

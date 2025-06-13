<?php

class TablaPorFechas extends TituloTabla
{
  use Utilitario;
  public $etiquetaTitulo = "EtiquetaH1Html";
  public $resultado;
  public $loteria;
  public $tipo;
  public $porFechas;
  public $titulo =  "Pronostico Por Fechas De Ultima Salida";
  public $captionTabla =  "porFechas ";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Sorteo","Repeticiones", "Numero","Nombre Animal","Suma De","Color","Posicion","Ultima Fecha","Dias Sin Salir","Sector","Fila"));
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
				$this->tipo = $_POST["tipo"];	
		   } 
		else {
				$fecha = date("Y-m-d"); 
	            $this->loteria = 'LAC';	         	
	            $this->tipo = '1';	         	
		     } 
		
		$date = new DateTime($fecha);
		$date->modify("-1 day");
		//$fecha = $date->format("Y-m-d");
		$this->titulo = $this->titulo.' '.$fecha.' - '.$this->getLoteria($this->loteria);
		$this->resultado = new Resultado($fecha,$this->loteria);
		//$fecha = date("Y-m-d"); 
		//$date = new DateTime($fecha);
		//$date->modify("-1 day");
		//$fecha = $date->format("Y-m-d");
		if($this->tipo == '1'){
			$this->porFechas =  new PorFechas($fecha, $this->resultado->tabla);
		} else {
			$this->porFechas =  new PorFechasDiario($fecha, $this->resultado->tabla);
		}
		
		$this->itemsTabla=$this->porFechas->tabla;
		
    }    

}

?>

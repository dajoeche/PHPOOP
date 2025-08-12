<?php

class TablaCruce extends TituloTabla
{
	use Utilitario;

 public $etiquetaTitulo = "EtiquetaH1Html";
  public $cruce;
  public $lac;
  public $lgr;
  public $sp;
  public $rla;
  public $lai;
  public $ltr;
  public $caz;
  public $tabla;
  public $sorteo;
  public $titulo =  "Cruce";
  public $captionTabla =  "Cruce";
  public $atributosTabla =  array("id"=>"miTabla");
  public $encabezadoTabla =  array(array("Sorteo", "Lotto Activo", "La Granjita","Selva Plus","Ruleta Activa","Lotto Activo Internacional","Lotto Rey","Cazaloton"));
  public $itemsTabla;
 
    function __construct() {
		$this->crearObjeto();		      
    }  
    
    public function crearObjeto() {
		
		if (isset($_POST["fecha"])){ 
				$fecha = $_POST["fecha"]; 

		   } 
		else {
				$fecha = date("Y-m-d"); 
     	
		     } 
		$this->titulo = $this->titulo.' '.$fecha;
		$this->lac = new Cruce($fecha, 'LAC');
		$this->lgr = new Cruce($fecha, 'LGR');
		$this->sp = new Cruce($fecha, 'SLP');
		$this->rla = new Cruce($fecha, 'RLA');
		$this->rla = new Cruce($fecha, 'RLA');
		$this->lai = new Cruce($fecha, 'LAI');
		$this->ltr = new Cruce($fecha, 'LTR');
		$this->caz = new Cruce($fecha, 'CAZ');
		$this->rla->tabla[0][] = '-';
		array_unshift($this->rla->tabla, '-');
		array_unshift($this->caz->tabla, '-');
		 for($i=0;$i<12;$i++){
			 if (isset($this->lac->tabla[$i][0])){
			    $this->tabla[$i][]=$this->getSorteo($i+1);
				$this->tabla[$i][]=$this->lac->tabla[$i][0];
				$this->tabla[$i][]=$this->lgr->tabla[$i][0];
				$this->tabla[$i][]=$this->sp->tabla[$i][0];
				$this->tabla[$i][]=$this->rla->tabla[$i][0];
				$this->tabla[$i][]=$this->lai->tabla[$i][0];
				$this->tabla[$i][]=$this->ltr->tabla[$i][0];
				$this->tabla[$i][]=$this->caz->tabla[$i][0];
			}
		 }

		 //echo '<pre>';
		 //print_r($this->tabla);
		 $this->itemsTabla=$this->tabla;
    }     

}

?>

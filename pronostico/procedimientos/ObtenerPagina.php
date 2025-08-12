<?php

//include ("ExtraerDatos.php");
//include ("LottoActivo.php");
//include ("LaGranjita.php");
//include ("Cazaloton.php");
//include ("LottoActivoInternacional.php");
//include ("SelvaPlus.php");
//include ("LottoRey.php");
//include ("RuletaActiva.php");

class ObtenerPagina
{
	
	public $paginaRaspada='https://loteriadehoy.com/animalitos/resultados/*/#0';
	public $direccion='';
	public $fecha;
	public $tabla= array();
	public $html='';

    function __construct($fecha) {

	    $this->asignarFecha($fecha);
	    $date = new DateTime($this->fecha);
		for ($i = 1; $i <= 1; $i++) {
			$this->armarDireccion();
			$this->obtenerPagina();	
			

			//echo $this->fecha."<br>";
			//echo date("H:i:s")."<br>";



			$lottoActivo = new LottoActivo($this->html, $this->fecha);

			array_push($this->tabla, $lottoActivo->resultados);

			$laGranjita = new LaGranjita($this->html, $this->fecha);
			
			array_push($this->tabla, $laGranjita->resultados);

			$cazaloton = new Cazaloton($this->html, $this->fecha);
			
			array_push($this->tabla, $cazaloton->resultados);

			$lottoActivoInternacional = new LottoActivoInternacional($this->html, $this->fecha);
			
			array_push($this->tabla, $lottoActivoInternacional->resultados);

			$selvaPlus = new SelvaPlus($this->html, $this->fecha);
			
			array_push($this->tabla, $selvaPlus->resultados);

			$lottoRey = new LottoRey($this->html, $this->fecha);
			
			array_push($this->tabla, $lottoRey->resultados);

			$ruletaActiva = new RuletaActiva($this->html, $this->fecha);
			
			array_push($this->tabla, $ruletaActiva->resultados);
			
			$date->modify("+1 day");
			$this->fecha = $date->format("Y-m-d");

		}				      
    }
    	
 
    public function asignarFecha($fecha) {
		$this->fecha = $fecha;
    }
       
    public function armarDireccion() {
        $this->direccion = str_replace('*', $this->fecha,  $this->paginaRaspada);
    }
        
    public function obtenerPagina() {
        $this->html = file_get_contents($this->direccion);
    }
}
?>

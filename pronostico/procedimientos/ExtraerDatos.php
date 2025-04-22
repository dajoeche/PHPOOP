<?php

include ("GestionarDB.php");
class ExtraerDatos extends GestionarDB
{
	public $matches=array();
	public $codigoSorteo=0;
	public $codigoLoteria='LAC';
	public $paginaRaspada='https://loteriadehoy.com/animalitos/resultados/*/#0';
	public $direccion='';
	public $html='';
	public $delimitadorSuperior='class="lottoactivo"';
	public $delimitadorInferior='<div class="title-center">';
	public $captura = array();
	public $caracteresEspeciales = "/[\r\n|\n|\r]+/";
	public $saltoPagina = array("\r", "\n","<br>",' ');
	public $cadenaInicio = array('<h4class="mt-3negro">','<h4class="mt-3rojo">','<h4class="mt-3verde">');
	public $inicioDato = 'FAO';
	public $cadenaFin = '</h4>';
	public $finDato = 'FEO';
	public $dato;
	public $numeroAnimal;
	public $resultados=array();
	public $valor;

    function __construct($html,$fecha) {
		$this->asignarFecha($fecha);
		$this->asignarHtml($html);
		$this->eliminarParteSuperior();
		$this->eliminarParteInferior();
		$this->eliminarCaracteresEspeciales();
		$this->eliminarSaltoPagina();
		$this->marcarInicioDato();
		$this->marcarFinDato();
		$this->extraerDato();
		$this->crearArrayResultados();
		//$this-> mostrarVar();  
		echo $this->name."<br>";
		$this->conectar();
		$this->checarEstatusConexion();
		$this->buscarNumeroRegistro();
		$this->obtenerNumeroRegistro();
		$this->guardarResultado();
		//echo $db->numeroRegistro;
		echo "----------------------------------------------------------<br>";
		$this->close();	
			      
    }
  
    public function asignarFecha($fecha) {
		$this->fecha = $fecha;
    }
    
    public function asignarHtml($html) {
		$this->html = $html;
    }
            
    public function eliminarParteSuperior() {
        $this->capturaSinParteSuperior = explode($this->delimitadorSuperior,$this->html);
    }
        
    public function eliminarParteInferior() {
        $this->capturaSinParteInferior = explode($this->delimitadorInferior, $this->capturaSinParteSuperior[1]);
    }
            
    public function eliminarCaracteresEspeciales() {
         $this->captura = preg_replace($this->caracteresEspeciales, PHP_EOL, $this->capturaSinParteInferior[0]);
    }
            
    public function eliminarSaltoPagina() {
         $this->captura = str_replace($this->saltoPagina, '', $this->captura);
    }
            
    public function marcarInicioDato() {
         $this->captura = str_replace($this->cadenaInicio,$this->inicioDato ,  $this->captura);
    }
            
    public function marcarFinDato() {
         $this->captura = str_replace($this->cadenaFin,$this->finDato ,  $this->captura);
    }
            
    public function extraerDato() {
         preg_match_all('/(FAO)(.*)(FEO)/Um', preg_quote($this->captura),$this->dato);
    }
            
    public function extraerNumeroAnimal($valore) {
			preg_match_all('/\d+/',$valore,$this->numeroAnimal);
    }
            
    public function guardarResultados() {
			array_push($this->resultados,$this->numeroAnimal[0][0]);
    }
            
    public function crearArrayResultados() {
		foreach ($this->dato[2] as $valor){
		   $this->extraerNumeroAnimal($valor);
		   $this->guardarResultados();
		}
    }
}
?>

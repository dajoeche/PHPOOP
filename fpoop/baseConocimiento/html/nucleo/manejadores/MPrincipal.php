<?php

trait MPrincipal
{

    public $nombreObjeto = "Default";
    public $atributos = "Default";
    public $atributosAdicionales = "Default";
    public $elementos = "Default";
    public $elementosDefecto = "Default";
    public $elementosAdicionales = "Default";
    public $codigoPrincipal = "";
    public $codigoAdicional = "";
    public $funcionRetornoIterar = "crearOption";
    public $funcionRetornoExtraer = "gestionarOptgroup";
    private $objeto;

    public function configurarNombreObjeto($nombreObjeto)
    {
      $this->nombreObjeto = $nombreObjeto;
    }

    public function configurarElementos($elementos)
    {
      $this->elementos = $elementos;
    }

    public function configurarAtributos($atributos)
    {
      $this->atributos = $atributos;
    }

    public function configurarCodigoAdicional($codigo)
    {
      $this->codigoAdicional = $codigo;
    }

    public function generarPrincipal()
    {
      $this->crearInstancia();
      $this->configurarElementosObjeto();
      $this->configurarElementosDefecto();
      $this->configurarElementosAdicionales();
      $this->configurarAtributosObjeto();
      $this->configurarAtributosDefecto();
      $this->configurarAtributosAdicionales();
      $this->configurarCodigoAdicionalObjeto();
      $this->guardarCodigoPrincipal();

      return $this->codigoPrincipal;
    }

    public function crearInstancia()
    { //echo $this->nombreObjeto."<br>";
      $this->objeto = new $this->nombreObjeto();
      //$this->nombreObjeto == "CajaTexto" ? print_r($this->objeto) : $cd ="";
    }

    public function configurarElementosObjeto()
    {
      $this->objeto->configurarElementos($this->elementos);
    }

    public function configurarElementosDefecto()
    {
      $this->elementosDefecto==="Default" ? $cd ='' : $this->objeto->configurarElementosDefecto($this->elementosDefecto);
    }

    public function configurarElementosAdicionales()
    {
      $this->elementosAdicionales==="Default" ? $cd ='' : $this->objeto->configurarElementosAdicionales($this->elementosAdicionales);
    }

    public function configurarAtributosObjeto()
    { 
      $this->objeto->configurarAtributos($this->atributos);
    }

    public function configurarAtributosDefecto()
    {
      isset($this->atributosDefecto) ? $this->objeto->configurarAtributosDefecto($this->atributosDefecto) : $cd='';
    }

    public function configurarAtributosAdicionales()
    {
      $this->atributosAdicionales==="Default" ? $cd ='' : $this->objeto->configurarAtributosAdicionales($this->atributosAdicionales) ;
    }

    function configurarCodigoAdicionalObjeto()
    {
      $this->objeto->configurarCodigoAdicional($this->codigoAdicional);
    }

    public function guardarCodigoPrincipal()
    {
      $this->codigoPrincipal = $this->objeto->crear();
    }

    public function iterar($array)
    {
      array_walk($array,array($this,$this->funcionRetornoIterar));
    }

    public function extraer($array)
    {
      foreach ($array as &$valor)
      {
        $s = $this->funcionRetornoExtraer;
        self::$s($valor);
      }
    }

}

?>

<?php

trait MPrincipal
{

    public $nombreObjeto = "Default";
    public $atributos = "Default";
    public $elementos = "Default";
    public $codigoPrincipal = "";
    public $codigoAdicional = "";
    public $funcionRetornoIterar = "crearOption";
    public $funcionRetornoExtraer = "gestionarOptgroup";

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
      $this->configurarAtributosObjeto();
      $this->configurarCodigoAdicionalObjeto();
      $this->guardarCodigoPrincipal();
      return $this->codigoPrincipal;
    }

    public function crearInstancia()
    {
      $this->objeto = new $this->nombreObjeto();
    }

    public function configurarElementosObjeto()
    {
      $this->objeto->configurarElementos($this->elementos);
    }

    public function configurarAtributosObjeto()
    {
      $this->objeto->configurarAtributos($this->atributos);
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

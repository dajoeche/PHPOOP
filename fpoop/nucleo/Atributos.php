<?php

class Atributos
{

    public $atributo = "Default";
    public $atributosDefecto = "Default";
    public $atributosTemporal = array();
    public $codigoAtributos;
    public $aperturas;

    function setAtributos($atributos) { $this->atributos = $atributos;}

    function getAtributos() { return $this->atributos; }

    function setAtributosDefecto($atributosDefecto) { $this->atributosDefecto = $atributosDefecto;}

    function getAtributosDefecto() { return $this->atributosDefecto; }

    function setApertura($apertura) { $this->apertura = $apertura;}

    function getApertura() { return $this->apertura; }

    function verificarExisteAtributosDefecto()
    {
			is_array($this->atributosDefecto) ? $this->existeAtributosDefecto() : $this->noExisteAtributosDefecto();
	  }

    function existeAtributosDefecto()
    {
			$this->atributosTemporal=$this->atributosDefecto;
	  }

    function noExisteAtributosDefecto()
    {

	  }

    function verificarExisteAtributos()
    {
			is_array($this->atributos) ? $this->existeAtributos() : $this->noExisteAtributos();
	  }

    function existeAtributos()
    {
			$this->atributosTemporal += $this->atributos;
	  }

    function noExisteAtributos()
    {

	  }

    function recorrerArrayAtributos()
    {
			array_walk($this->atributosTemporal,array($this,'generarAtributos'));
	  }

    function generarAtributos($atributo, $nombreAtributo)
    {
			$this->codigoAtributos .= " ".$nombreAtributo." = ".'"'.$atributo.'"';
  	}

    function incluirAtributos()
    {
			$this->apertura = str_replace(">",$this->codigoAtributos.">",$this->apertura);
	  }

}

?>

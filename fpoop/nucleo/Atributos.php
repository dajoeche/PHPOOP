<?php

class Atributos
{

    public $atributo = "Default";
    public $atributosDefecto = "Default";
    public $atributosDefectoAdicionales = "Default";
    public $atributosTemporal = array();
    public $arrayAtributos = array();
    public $codigoAtributos;
    public $apertura;

    function setAtributos($atributos) { $this->atributos = $atributos;}

    function getAtributos() { return $this->atributos; }

    function setAtributosDefecto($atributosDefecto) { $this->atributosDefecto = $atributosDefecto;}

    function getAtributosDefecto() { return $this->atributosDefecto; }

    function setAtributosAdicionales($atributosAdicionales) { $this->atributosAdicionales = $atributosAdicionales;}

    function getAtributosAdicionales() { return $this->atributosAdicionales; }

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

    function verificarExisteAtributosAdicionales()
    {
			is_array($this->atributosAdicionales) ? $this->existeAtributosAdicionales() : $this->noExisteAtributosAdicionales();
	  }

    function existeAtributosAdicionales()
    {
			$this->atributosTemporal += $this->atributosAdicionales;
	  }

    function noExisteAtributosAdicionales()
    {

	  }

    function recorrerArrayAtributos()
    {
			array_walk($this->atributosTemporal,array($this,'generarAtributos'));
	  }

    function generarAtributos($atributo, $nombreAtributo)
    {
			is_numeric($nombreAtributo) ?
                                    $this->arrayAtributos[] = " ".$atributo :
                                    $this->arrayAtributos[] = " ".$nombreAtributo." = ".'"'.$atributo.'"';
  	}

    function incluirAtributos()
    {
      $this->quitarAtributosRepetidos();
      stripos($this->apertura, "/>") !== false ?
      $this->apertura = str_replace("/>",$this->codigoAtributos." />",$this->apertura) :
      $this->apertura = str_replace(">",$this->codigoAtributos.">",$this->apertura);
	  }

    function quitarAtributosRepetidos()
    {
      $this->codigoAtributos = implode("", array_unique($this->arrayAtributos));
      $this->apertura = str_replace($this->codigoAtributos.">",">",$this->apertura);
	  }

}

?>

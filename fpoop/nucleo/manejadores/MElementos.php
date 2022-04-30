<?php

class MElementos
{

    public $objeto;
    public $elementos;
    public $elementosDefecto = "Default";
    public $elementosAdicionales = "Default";
    public $codigoRetorno;
    public $tempo=array();

    public function __construct()
    {
      $this->objeto = new MObjetos();
    }

    function getElementosDefecto() { return $this->elementosDefecto; }

    function setElementosDefecto($elementosDefecto) { $this->elementosDefecto = $elementosDefecto;}

    function getElementosAdicionales() { return $this->elementosAdicionales; }

    function setElementosAdicionales($elementosAdicionales) { $this->elementosAdicionales = $elementosAdicionales;}

    function crear($elementos)
    {
      $elementos <> "Default" ? $this->elementos = $elementos : $this->elementos="";
      is_array($elementos) ? $this->esArray() : $this->noEsArray();
      return $this->codigoRetorno;
	  }

    function esArray()
    {
      $this->verificarExisteElementosDefecto();
      $this->verificarExisteElementosAdicionales();
      $this->objeto->crear($this->elementos);
      $this->codigoRetorno .=$this->objeto->getCodigoRetorno();
	  }

    function noEsArray()
    {
      $this->codigoRetorno = $this->elementos;
	  }


    function verificarExisteElementosDefecto()
    {
    	$this->elementosDefecto<>"Default" ? $this->existeElementosDefecto() : $this->noExisteElementosDefecto();
    }

    function existeElementosDefecto()
    {
    	array_unshift($this->elementos,$this->elementosDefecto[0]);
    }

    function noExisteElementosDefecto()
    {

    }

    function verificarExisteElementosAdicionales()
    {
			$this->elementosAdicionales<>"Default" ? $this->existeElementosAdicionales() : $this->noExisteElementosAdicionales();
	  }

    function existeElementosAdicionales()
    {
			array_push($this->elementos,$this->elementosAdicionales[0]);
	  }

    function noExisteElementosAdicionales()
    {

	  }

    function configurarElementosDefecto($elementosDefecto)
    {
      $this->setElementosDefecto($elementosDefecto);
    }

    function configurarElementosAdicionales($elementosAdicionales)
    {
      $this->setElementosAdicionales($elementosAdicionales);
    }
}

?>

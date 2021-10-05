<?php

class Etiquetas
{
  private $apertura;
  private $elementos = "";
  private $cierre = "";
  private $codigoRetorno = "";
  private $codigoAdicional = "";
  private $saltoLineaElementos = "\n";

  public function __toString()
  {
    return $this->codigoRetorno;
  }

  function setApertura($apertura) { $this->apertura = $apertura; }

  function getApertura() { return $this->apertura; }

  function setElementos($elementos) { $this->elementos = $elementos; }

  function getElementos() { return $this->elementos; }

  function setCierre($cierre) { $this->cierre = $cierre; }

  function getCierre() { return $this->cierre; }

  function setCodigoRetorno($codigoRetorno) { $this->codigoRetorno = $codigoRetorno; }

  function getCodigoRetorno() { return $this->codigoRetorno; }

  function setCodigoAdicional($codigoAdicional) { $this->codigoAdicional = $codigoAdicional; }

  function getCodigoAdicional() { return $this->codigoAdicional; }

  function comprobarSaltarLineaElementos()
  {
  	  $this->elementos== "*" || $this->elementos== "" ? $this->saltoLineaElementos= "" : $this->saltoLineaElementos= "\n";
	}

  public function crear()
  {
    $this->codigoRetorno = $this->apertura."\n".$this->elementos.$this->codigoAdicional.$this->saltoLineaElementos.$this->cierre."\n";
  }

}

?>

<?php

class _SVGLogo
{

  use MSVG, MDefs, MLinearGradient, MStop, MEllipse, MText;

  public $codigoRetorno = "";
  public $codigoSVG = "";

  public function crear()
  {
    $this->etiquetaComponente = "Espacio";
    $this->atributosStop = $this->atributosStopIni;
    $stopIni = $this->generarStop();
    $this->atributosStop = $this->atributosStopFin;
    $stopFin = $this->generarStop();
    $this->elementosLinearGradient = $stopIni.$stopFin;
    $this->elementosDefs = $this->generarLinearGradient();
    $this->elementosSVG = $this->generarDefs().$this->generarEllipse().$this->generarText().$this->elementosSVG;
    $this->generarSVG();
    return $this->codigoRetorno;
  }

}

?>

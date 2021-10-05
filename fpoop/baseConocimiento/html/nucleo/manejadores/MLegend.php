<?php

trait MLegend
{

    use MPrincipal;

    public $etiquetaLegend = "EtiquetaLegendHtml";
    public $atributosLegend = "Default";
    public $elementosLegend = "Default";
    public $codigoLegend = "";


    public function generarLegend()
    {
      $this->configurarNombreObjeto($this->etiquetaLegend);
      $this->configurarElementos($this->elementosLegend);
      $this->configurarAtributos($this->atributosLegend);
      $this->codigoLegend = $this->generarPrincipal();   
    }

}

?>

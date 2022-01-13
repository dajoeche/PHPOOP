<?php

trait MSVG
{

    use MPrincipal, MComponente;

    public $etiquetaSVG = "EtiquetaSVGHtml";
    public $atributosSVG = "Default";
    public $elementosSVG = "Default";

    public function generarSVG()
    {
      $this->configurarCodigoAdicional($this->generarComponente());
      $this->configurarNombreObjeto($this->etiquetaSVG);
      $this->configurarElementos($this->elementosSVG);
      $this->configurarAtributos($this->atributosSVG);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>

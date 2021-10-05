<?php

trait MTituloFigure
{

    public $etiquetaTituloFigure = "EtiquetaFigCaptionHtml";
    public $atributosTituloFigure = "Default";
    public $tituloFigure = "";

    public function generarTituloFigure()
    {
      $this->objetoTituloFigure = new $this->etiquetaTituloFigure();
      $this->objetoTituloFigure->configurarElementos($this->tituloFigure);
      $this->objetoTituloFigure->configurarAtributos($this->atributosTituloFigure);
      $this->codigoRetorno .= $this->objetoTituloFigure->crear();
    }

}

?>

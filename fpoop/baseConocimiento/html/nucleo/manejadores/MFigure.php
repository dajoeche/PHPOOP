<?php

trait MFigure
{

    use MPrincipal, MImagen, MTituloFigure;

    public $etiquetaFigure = "EtiquetaFigureHtml";
    public $atributosImagen = "Default";
    public $atributos = "Default";

    public function generarFigure()
    {
      $this->generarImagen();
      $this->generarTituloFigure();
      $this->configurarNombreObjeto($this->etiquetaFigure);
      $this->configurarElementos($this->codigoRetorno);
      $this->configurarAtributos($this->atributos);
      $this->codigoRetorno = $this->generarPrincipal();
    }

}

?>

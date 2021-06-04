<?php

trait MParrafo
{

    public $etiquetaParrafo = "EtiquetaParrafoHtml";
    public $atributosParrafo = "Default";
    public $elementosParrafo = "Default";
    public $parrafo = "Cinque Terre";

    public function generarParrafo()
    {
      $this->objetoParrafo = new $this->etiquetaParrafo();
      $this->objetoParrafo->configurarElementos($this->parrafo);
      $this->objetoParrafo->configurarAtributos($this->atributosParrafo);
      $this->codigoRetorno .= $this->objetoParrafo->crear();
    }

}

?>

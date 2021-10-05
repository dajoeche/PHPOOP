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
    
    public function generarParrafos()
    {
      $this->generarParrafo();

      if (isset($this->parrafo2)) {
        $this->parrafo = $this->parrafo2;
        isset($this->atributosParrafo2) ? $this->atributosParrafo = $this->atributosParrafo2 : $cd = "";
        $this->generarParrafo();
      }

      if (isset($this->parrafo3)) {
        $this->parrafo = $this->parrafo3;
        $this->atributosParrafo = $this->atributosParrafo3;
        $this->generarParrafo();
      }
    }
}

?>

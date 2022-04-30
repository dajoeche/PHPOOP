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

      for ($i = 2; $i < 11; $i++) {
        $parrafo = "parrafo".$i;
        $atributosParrafo = "atributosParrafo".$i;
        if (isset($this->$parrafo)) {
          $this->parrafo = $this->$parrafo;
          isset($this->$atributosParrafo) ? $this->atributosParrafo = $this->$atributosParrafo : $cd = "";
          $this->generarParrafo();
        }
      }

    }
}

?>

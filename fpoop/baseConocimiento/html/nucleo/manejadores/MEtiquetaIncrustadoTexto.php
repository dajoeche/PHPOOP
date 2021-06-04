<?php

trait MEtiquetaIncrustadoTexto
{

    public $etiquetaTexto = "EtiquetaParrafoHtml";
    public $etiquetaIncrustada = "EtiquetaSpanHtml";
    public $atributosTexto = "Default";
    public $atributosEtiquetaIncrustada = "Default";
    public $texto = "Cinque Terre";
    public $complemento = "Cinque Terre";
    public $codigoRetorno = "";

    public function generarTextoIncrustado()
    {
      $this->generarObjetoIncrustado();
      $this->generarTexto();
      $this->codigoRetorno = str_replace(
                                          "*",
                                          $this->objetoEtiquetaIncrustada->crear(),
                                          $this->objetoTexto->crear()
                                         );

    }

    public function generarObjetoIncrustado()
    {
      $this->objetoEtiquetaIncrustada = new $this->etiquetaIncrustada();
      $this->objetoEtiquetaIncrustada->configurarElementos($this->complemento);
      $this->objetoEtiquetaIncrustada->configurarAtributos($this->atributosEtiquetaIncrustada);
    }

    public function generarTexto()
    {
      $this->objetoTexto = new $this->etiquetaTexto();
      $this->objetoTexto->configurarElementos($this->texto);
      $this->objetoTexto->configurarAtributos($this->atributosTexto);
    }
}

?>

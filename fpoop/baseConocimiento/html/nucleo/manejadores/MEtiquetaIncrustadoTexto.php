<?php

trait MEtiquetaIncrustadoTexto
{

    use MPrincipal;

    public $etiquetaTexto = "EtiquetaParrafoHtml";
    public $etiquetaIncrustada = "EtiquetaSpanHtml";
    public $codigoEtiquetaEncrustada = "";
    public $atributosTexto = "Default";
    public $atributosEtiquetaIncrustada = "Default";
    public $texto = "Cinque Terre";
    public $codigoTexto = "";
    public $complemento = "Cinque Terre";
    public $codigoRetorno = "";

    public function generarTextoIncrustado()
    {
      $this->generarObjetoIncrustado();
      $this->generarTexto();
      $this->incrustarTexto();

    }

    public function generarObjetoIncrustado()
    {
      $this->configurarNombreObjeto($this->etiquetaIncrustada);
      $this->configurarElementos($this->complemento);
      $this->configurarAtributos($this->atributosEtiquetaIncrustada);
      $this->codigoEtiquetaIncrustada = $this->generarPrincipal();
    }

    public function generarTexto()
    {
      $this->configurarNombreObjeto($this->etiquetaTexto);
      $this->configurarElementos($this->texto);
      $this->configurarAtributos($this->atributosTexto);
      $this->codigoTexto = $this->generarPrincipal();
    }

    public function incrustarTexto()
    {
      $this->codigoRetorno = str_replace(
                                          "*",
                                          $this->codigoEtiquetaIncrustada,
                                          $this->codigoTexto
                                         );
    }

}

?>

<?php

trait MTitulo
{

    public $etiquetaTitulo = "EtiquetaH2Html";
    public $atributosTitulo = "Default";
    public $elementosTitulo = "Default";
    public $titulo = "Cinque Terre";
    public $titulo1 = "";
    public $titulo2 = "";

    public function generarTitulo()
    {
      $this->objetoTitulo = new $this->etiquetaTitulo();
      $this->objetoTitulo->configurarElementos($this->titulo);
      $this->objetoTitulo->configurarAtributos($this->atributosTitulo);
      $this->codigoRetorno .= $this->objetoTitulo->crear();
    }

}

?>

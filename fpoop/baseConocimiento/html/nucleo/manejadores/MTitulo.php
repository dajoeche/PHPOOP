<?php

trait MTitulo
{
    use MPrincipal;

    public $etiquetaTitulo = "EtiquetaH2Html";
    public $atributosTitulo = "Default";
    public $elementosTitulo = "Default";
    public $titulo = "Cinque Terre";
    public $titulo1 = "";
    public $titulo2 = "";

    public function generarTitulo()
    {
      $this->configurarNombreObjeto($this->etiquetaTitulo);
      $this->configurarElementos($this->titulo);
      $this->configurarAtributos($this->atributosTitulo);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>

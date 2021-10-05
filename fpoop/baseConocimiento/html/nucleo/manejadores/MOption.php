<?php

trait MOption
{

    use MPrincipal;

    public $etiquetaOption = "EtiquetaOptionHtml";
    public $atributosOption = "Default";
    public $elementosOption = "Default";
    public $codigoOption = "";


    public function generarOption()
    {
      $this->configurarNombreObjeto($this->etiquetaOption);
      $this->iterar($this->option);
      return $this->codigoOption;
    }

    public function crearOption($retorno)
    {
      isset($retorno["nombre"]) ? $this->configurarElementos($retorno["nombre"]) : $cd ="";
      unset($retorno["nombre"]);
      $this->configurarAtributos($retorno);
      $this->codigoOption .= $this->generarPrincipal();
    }

}

?>

<?php

trait MDefs
{

    use MPrincipal;

    public $etiquetaDefs = "EtiquetaDefsHtml";
    public $atributosDefs = "Default";
    public $elementosDefs = "Default";

    public function generarDefs()
    {
      $this->configurarNombreObjeto($this->etiquetaDefs);
      $this->configurarElementos($this->elementosDefs);
      $this->configurarAtributos($this->atributosDefs);
      return $this->generarPrincipal();
    }

}

?>

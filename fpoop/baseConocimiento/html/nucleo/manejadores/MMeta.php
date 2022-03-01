<?php

trait MMeta
{

    use MPrincipal;

    public $etiquetaMeta = "EtiquetaMetaHtml";
    public $atributosMeta = "Default";
    public $elementosMeta = "Default";

    public function generarMeta()
    {
      $this->configurarNombreObjeto($this->etiquetaMeta);
      $this->configurarElementos($this->elementosMeta);
      $this->configurarAtributos($this->atributosMeta);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>

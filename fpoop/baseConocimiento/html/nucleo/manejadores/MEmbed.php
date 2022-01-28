<?php

trait MEmbed
{

    use MPrincipal;

    public $etiquetaEmbed = "EtiquetaEmbedHtml";
    public $atributosEmbed = "Default";
    public $elementosEmbed = "Default";

    public function generarEmbed()
    {
      $this->configurarNombreObjeto($this->etiquetaEmbed);
      $this->configurarElementos($this->elementosEmbed);
      $this->configurarAtributos($this->atributosEmbed);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>

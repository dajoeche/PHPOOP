<?php

trait MComplemento
{

    use MPrincipal;

    public $etiquetaComplemento = "EtiquetaStrongHtml";
    public $atributosComplemento = "Default";
    public $complemento = "Default";


    public function generarComplemento()
    {
      $this->configurarNombreObjeto($this->etiquetaComplemento);
      $this->configurarElementos($this->complemento);
      $this->configurarAtributos($this->atributosComplemento);
      $this->codigoComplemento=$this->generarPrincipal();
      $this->parrafo = str_replace("*", $this->codigoComplemento, $this->parrafo);
    }

}

?>

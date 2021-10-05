<?php

trait MDataList
{
    use MPrincipal, MOption, MInput;

    public $etiquetaDataList = "EtiquetaDataListHtml";
    public $atributosDataList = "Default";
    public $elementosDataList = "Default";

    public function generarDataList()
    {
      $this->generarOption();
      $this->generarInput();
      $this->configurarNombreObjeto($this->etiquetaDataList);
      $this->configurarElementos($this->codigoOption);
      $this->configurarAtributos($this->atributosDataList);
      $this->codigoRetorno .=$this->generarPrincipal();
    }
  }

?>

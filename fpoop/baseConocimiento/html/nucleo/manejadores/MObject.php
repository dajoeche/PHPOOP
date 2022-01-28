<?php

trait MObject
{

    use MPrincipal;

    public $etiquetaObject = "EtiquetaObjectHtml";
    public $atributosObject = "Default";
    public $elementosObject = "Default";

    public function generarObject()
    {
      $this->configurarNombreObjeto($this->etiquetaObject);
      $this->configurarElementos($this->elementosObject);
      $this->configurarAtributos($this->atributosObject);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>

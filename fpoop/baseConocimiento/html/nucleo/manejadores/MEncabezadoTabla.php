<?php

trait MEncabezadoTabla
{

    use MPrincipal;

    public $etiquetaEncabezadoTabla = "EtiquetaEncabezadoTablaHtml";
    public $atributosEncabezadoTabla = "Default";
    public $elementosEncabezadoTabla = "";

    public function generarEncabezadoTabla()
    {
      $this->configurarNombreObjeto($this->etiquetaEncabezadoTabla);
      $this->configurarElementos($this->elementosColumnaTabla);
      $this->configurarAtributos($this->atributosEncabezadoTabla);
      return $this->generarPrincipal();
    }

}

?>

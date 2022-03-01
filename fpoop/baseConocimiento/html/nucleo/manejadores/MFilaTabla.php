<?php

trait MFilaTabla
{

    use MPrincipal;

    public $etiquetaFilaTabla = "EtiquetaFilaTablaHtml";
    public $atributosFilaTabla = "Default";
    public $elementosFilaTabla = "";

    public function generarFilaTabla()
    {
      $this->configurarNombreObjeto($this->etiquetaFilaTabla);
      $this->configurarElementos($this->elementosFilaTabla);
      $this->configurarAtributos($this->atributosFilaTabla);
      return $this->generarPrincipal();
    }

}

?>

<?php

trait MColumnaTabla
{

    use MPrincipal;

    public $etiquetaColumnaTabla = "EtiquetaColumnaTablaHtml";
    public $atributosColumnaTabla = "Default";
    public $elementosColumnaTabla = "";

    public function generarColumnaTabla()
    {
      $this->configurarNombreObjeto($this->etiquetaColumnaTabla);
      $this->configurarElementos($this->elementosColumnaTabla);
      $this->configurarAtributos($this->atributosColumnaTabla);
      return $this->generarPrincipal();
    }

}

?>

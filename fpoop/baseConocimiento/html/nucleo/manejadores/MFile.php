<?php

trait MFile
{
    use MPrincipal;

    public $etiquetaFile = "File";
    public $atributosFile = "Default";
    public $elementosFile = "Default";

    public function generarFile()
    {
      $this->crearFile();
    }

    public function crearFile()
    {
      $this->configurarNombreObjeto($this->etiquetaFile);
      $this->configurarElementos($this->elementosFile);
      $this->configurarAtributos($this->atributosFile);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>

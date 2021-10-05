<?php

trait MOptgroup
{
    use MPrincipal, MSelect, MOption;

    public $etiquetaOptgroup = "EtiquetaOptgroupHtml";
    public $atributosOptgroup = "Default";
    public $elementosOptgroup = "Default";
    public $codigoOptgroup = "";

    public function generarOptgroup()
    {
      $this->extraer($this->optgroup);
      $this->configurarSelect();
      $this->crearSelect();
    }

    public function configurarSelect()
    {
      $this->elementosSelect = $this->codigoOptgroup;
    }

    public function gestionarOptgroup($retorno)
    {
      $this->configurarOptgroup($retorno);
      $this->crearOptgroup();
      $this->inicializarCodigoOption();
    }

    public function configurarOptgroup($retorno)
    {
      $this->configurarOptionValue($retorno);
      $this->configurarAtributosOptgroup($retorno);
      $this->configurarElementosOptgroup();
    }

    public function configurarOptionValue($retorno)
    {
      $this->option = $retorno["option"];
    }

    public function configurarAtributosOptgroup($retorno)
    {
      $this->atributosOptgroup = $retorno["descripcion"];
    }

    public function configurarElementosOptgroup()
    {
      $this->elementosOptgroup = $this->generarOption();
    }

    public function crearOptgroup()
    {
      $this->configurarNombreObjeto($this->etiquetaOptgroup);
      $this->configurarElementos($this->elementosOptgroup);
      $this->configurarAtributos($this->atributosOptgroup);
      $this->codigoOptgroup.=$this->generarPrincipal();
    }

    public function inicializarCodigoOption()
    {
      $this->codigoOption = '';
    }
}

?>

<?php

trait MTabla
{

    use MPrincipal, MEncabezadoTabla, MFilaTabla, MColumnaTabla, MArray;

    public $etiquetaTabla = "EtiquetaTablaHtml";
    public $atributosTabla = "Default";
    public $elementosTabla = "";
    public $codigoColumnaTabla = "";
    public $codigoFilaTabla = "";
    public $funcionCrearColumna = "";

    public function generarTabla()
    {
      $this->crearEncabezadoTabla();
      $this->crearFilaTabla();
      $this->crearTabla();
      $this->codigoRetorno.=$this->generarPrincipal();
    }

    public function crearEncabezadoTabla()
    {
      $this->funcionCrearColumna = "generarEncabezadoTabla";
      isset($this->encabezadoTabla) ? $this->extraerDatos($this->encabezadoTabla): $nada='';
    }

    public function crearFilaTabla()
    {
      $this->funcionCrearColumna = "generarColumnaTabla";
      $this->extraerDatos($this->itemsTabla);
    }

    public function extraerDatos($datos)
    {
      $this->configurarFuncionRetornoExtraerFila("iterarColumna");
      $this->extraerFila($datos);
      $this->guardarElementosTabla($this->codigoFilaTabla);
    }

    public function guardarElementosTabla($elementosTabla)
    {
      $this->elementosTabla = $elementosTabla;
    }

    public function iterarColumna($fila)
    {
      $this->configurarFuncionRetornoIterarArray("generarFila");
      $this->iterarArray($fila);
      $this->guardarElementosFilaTabla();
      $this->borrarCodigoColumnaTabla();
      $this->guardarCodigoFilaTabla();
    }

    public function guardarElementosFilaTabla()
    {
      $this->elementosFilaTabla = $this->codigoColumnaTabla;
    }

    public function borrarCodigoColumnaTabla()
    {
      $this->codigoColumnaTabla ='';
    }

    public function guardarCodigoFilaTabla()
    {
      $this->codigoFilaTabla .= $this->generarFilaTabla();
    }

    public function generarFila($columna)
    {
      $this->configurarElementosColumnaTabla($columna);
      $this->guardarCodigoColumnaTabla();
    }

    public function guardarCodigoColumnaTabla()
    {
      $this->codigoColumnaTabla .= call_user_func(array($this, $this->funcionCrearColumna));
    }

    public function crearTabla()
    {
      $this->configurarNombreObjeto($this->etiquetaTabla);
      $this->configurarElementos($this->elementosTabla);
      $this->configurarAtributos($this->atributosTabla);
    }
}

?>

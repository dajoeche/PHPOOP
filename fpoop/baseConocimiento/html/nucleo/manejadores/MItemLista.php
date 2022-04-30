<?php

trait MItemLista
{

    use MPrincipal;

    public $etiquetaItemLista = "EtiquetaItemsListaHtml";
    public $atributosItemLista = "Default";
    public $atributosItemsLista = "Default";
    public $elementosItemLista = "";

    public function generarItemLista()
    {
      $this->configurarNombreObjeto($this->etiquetaItemLista);
      $this->configurarElementos($this->elementosItemLista);
      $this->configurarAtributos($this->atributosItemLista);
      return $this->generarPrincipal();
    }

    public function configurarElementosItemLista($columna)
    {
      $this->elementosItemLista = $columna;
    }

    public function configurarAtributosItemLista($atributo)
    {
      $this->atributosItemLista = $atributo;
    }
}

?>

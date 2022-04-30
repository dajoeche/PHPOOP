<?php

trait MLista
{

    use MPrincipal, MItemLista, MArray;

    public $etiquetaLista = "EtiquetaListaVinetaHtml";
    public $atributosLista = "Default";
    public $elementosLista = "";
    public $codigoColumnaLista = "";
    public $codigoItemLista = "";
    public $arrayElementos = array();
    public $item;
    public $funcionCrearItem = "generarItemLista";

    public function generarLista()
    {
      $this->funcionCrearItem = "generarItemLista";
      $this->iterarItems();
      $this->crearLista();
      $this->codigoRetorno.=$this->generarPrincipal();
    }

    public function iterarItems()
    {
      $this->configurarFuncionRetornoIterarArray("generarItems");
      $this->iterarArray($this->itemsLista);
    }

    public function generarItems($item)
    {
      $this->guardarItem($item);
      is_array($this->item[0]) ? $this->generarItemArray() : $this->generarItemSimple();
      $this->guardarCodigoItemLista();
      $this->limpiarAtributosItem();
    }

    public function guardarItem($item)
    {
      $this->item=$item;
    }

    public function limpiarAtributosItem()
    {
      $this->configurarAtributosItemLista("");
    }


    public function generarItemSimple()
    {
      $this->configurarElementosItemLista($this->item);
    }

    public function generarItemArray()
    {
      isset($this->item[0]["enlace"]) ? array_push($this->arrayElementos,$this->item[0]["enlace"]) : $cd="";
      isset($this->item[0]["submenu"]) ? array_push($this->arrayElementos,$this->item[0]["submenu"]) : $cd="";
      $this->configurarElementosItemLista($this->arrayElementos);
      isset($this->item[0]["atributos"]) ? $this->configurarAtributosItemLista($this->item[0]["atributos"]) : $cd="";
      $this->arrayElementos = array();
    }

    public function generarElementosItemLista()
    {
      $this->configurarElementosItemLista(array($this->item[0]["enlace"],$this->item[0]["submenu"]));

    }

    public function generarSubmenu()
    {

    }

    public function guardarCodigoItemLista()
    {
      $this->codigoItemLista .= call_user_func(array($this, $this->funcionCrearItem));
    }

    public function crearLista()
    {
      $this->configurarNombreObjeto($this->etiquetaLista);
      $this->configurarElementos($this->codigoItemLista);
      $this->configurarAtributos($this->atributosLista);
    }
}

?>

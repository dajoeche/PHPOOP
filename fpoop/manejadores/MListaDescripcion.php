<?php

class MListaDescripcion extends MListas
{
    public $tipoLista  = "EtiquetaListaDescripcionHtml";  
    public $tituloLista = "EtiquetaTituloListaDescripcionHtml";
    public $etiquetaItemLista = "EtiquetaItemsListaDescripcionHtml";
    public $items = array(
                          array(
                                "descripcion"=>"Coffee",
                                "items"=>array(
                                                "- black hot drink","- late"
                                              )
                                ),
                          array(
                                "descripcion"=>"Milk",
                                "items"=>array(
                                                "- white cold drink",
                                                "- cold","- hot"
                                              )
                                )
                          );

    public function __construct()
    {
      $this->titulo = new $this->tituloLista();
		  parent::__construct();
    }

}

?>

<?php

class MiItemsListaDescripcion extends ListaDescripcion
{

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
                                                "- cold","- hot","- ole"
                                              )
                                )
                          );

    public function __construct()
    {
		parent::__construct();
    }


}

?>

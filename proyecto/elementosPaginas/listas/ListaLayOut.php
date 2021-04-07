<?php

class ListaLayOut extends ListaDesordenada
{

  public $items = array(
                          array("EnlaceLondon"),
                          array("EnlaceParis"),
                          array("EnlaceTokio")
                        );

    public function __construct()
    {
		parent::__construct();
    }


}

?>

<?php

class BotonEncenderBombillo extends EtiquetaBotonHtml
{

    public $elementos = "Light On";
    public $atributos = array("onclick"=>"light(1)");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

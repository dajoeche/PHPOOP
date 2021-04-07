<?php

class BotonCambiarEstilo extends EtiquetaBotonHtml
{

    public $elementos = "Click Me!";
    public $atributos = array("onclick"=>"styles()");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

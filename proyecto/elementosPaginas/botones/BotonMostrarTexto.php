<?php

class BotonMostrarTexto extends EtiquetaBotonHtml
{

    public $elementos = "Change text";
    public $atributos = array("onclick"=>"displayResult()");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

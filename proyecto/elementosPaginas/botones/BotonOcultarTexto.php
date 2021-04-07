<?php

class BotonOcultarTexto extends EtiquetaBotonHtml
{

    public $elementos = "Hide elements";
    public $atributos = array("onclick"=>"ocultarTexto()");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

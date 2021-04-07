<?php

class BotonApagarBombillo extends EtiquetaBotonHtml
{

    public $elementos = "Light Off";
    public $atributos = array("onclick"=>"light(0)");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

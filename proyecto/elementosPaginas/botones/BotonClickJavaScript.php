<?php

class BotonClickJavascript extends EtiquetaBotonHtml
{

    public $elementos = "Click me to display Date and Time.";
    public $atributos = array(
                                "onclick"=>"document.getElementById('demo').innerHTML = Date()",

                            );

    public function __construct()
    {
		parent::__construct();
    }


}

?>

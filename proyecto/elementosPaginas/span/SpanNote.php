<?php

class SpanNote extends EtiquetaSpanHtml
{

    public $atributos = array(
                              "class"=> "note"
                              );
    public $elementos =  "Important";

    public function __construct()
    {
		parent::__construct();
    }


}

?>

<?php

class EtiquetaIframesHtml extends MEtiquetas
{

    public $apertura = "<iframe>";
    public $elementos = "Página Principal";
    public $cierre = "</iframe>";
    public $atributos = array(
                              "src"=>"demo_iframe.htm",
                              "height"=>"200",
                              "width"=>"300",
                              "title"=>"Iframe Example",
                              );

    public function __construct()
    {
		parent::__construct();
    }


}

?>

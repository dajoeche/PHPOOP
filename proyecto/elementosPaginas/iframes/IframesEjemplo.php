<?php

class IframesEjemplo extends EtiquetaIframesHtml
{

    public $atributosDefecto = array(
                              "src"=>"lista.php",
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

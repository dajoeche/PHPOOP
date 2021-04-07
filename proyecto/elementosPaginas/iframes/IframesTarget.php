<?php

class IframesTarget extends EtiquetaIframesHtml
{

    public $atributosDefecto = array(
                              "src"=>"lista.php",
                              "name"=>"iframe_a",
                              "height"=>"300px",
                              "width"=>"100%",
                              "title"=>"Iframe Example",
                              );

    public function __construct()
    {
		parent::__construct();
    }


}

?>

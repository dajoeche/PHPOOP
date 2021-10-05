<?php

class EnlaceSemanticElements extends EtiquetaEnlacesHtml
{

    public $elementos = "Semantic Elements";
    public $atributos = array("href"=>"http://localhost/php/semanticelements.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

<?php

class EnlaceSemanticElements extends EtiquetaEnlacesHtml
{

    public $elementos = "Semantic Elements";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/semanticelements.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

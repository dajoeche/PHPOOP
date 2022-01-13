<?php

class EnlaceFormAttributesHtml extends EtiquetaEnlacesHtml
{

    public $elementos = "FormAttributes";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/formAttributes.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

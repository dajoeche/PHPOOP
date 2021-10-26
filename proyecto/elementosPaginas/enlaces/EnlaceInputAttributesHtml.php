<?php

class EnlaceInputAttributesHtml extends EtiquetaEnlacesHtml
{

    public $elementos = "FormsInputAttributes";
    public $atributos = array("href"=>"http://localhost/php/inputAttributes.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

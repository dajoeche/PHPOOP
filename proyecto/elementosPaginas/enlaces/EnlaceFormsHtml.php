<?php

class EnlaceFormsHtml extends EtiquetaEnlacesHtml
{

    public $elementos = "Forms Html";
    public $atributos = array("href"=>"http://localhost/php/forms.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

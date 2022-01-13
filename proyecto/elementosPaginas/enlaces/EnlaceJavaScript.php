<?php

class EnlaceJavaScript extends EtiquetaEnlacesHtml
{

    public $elementos = "JavaScript";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/javascript.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

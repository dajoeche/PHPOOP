<?php

class EnlaceId extends EtiquetaEnlacesHtml
{

    public $elementos = "Id";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/id.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

<?php

class EnlaceBootstrap extends EtiquetaEnlacesHtml
{

    public $elementos = "Bootstrap";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/bootstrap.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

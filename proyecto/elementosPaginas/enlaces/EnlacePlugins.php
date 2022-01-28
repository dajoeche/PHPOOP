<?php

class EnlacePlugins extends EtiquetaEnlacesHtml
{

    public $elementos = "Plugins";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/plugins.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

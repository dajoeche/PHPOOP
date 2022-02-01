<?php

class EnlaceWebStorage extends EtiquetaEnlacesHtml
{

    public $elementos = "Web Storage";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/webstorage.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

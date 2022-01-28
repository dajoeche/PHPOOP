<?php

class EnlaceYoutube extends EtiquetaEnlacesHtml
{

    public $elementos = "Youtube";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/youtube.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

<?php

class EnlaceTablas extends EtiquetaEnlacesHtml
{

    public $elementos = "Tablas";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/tablas.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

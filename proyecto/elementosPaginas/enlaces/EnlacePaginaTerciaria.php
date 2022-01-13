<?php

class EnlacePaginaTerciaria extends EtiquetaEnlacesHtml
{

    public $elementos = "Página Terciaria";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/paginaTerciaria.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

<?php

class EnlacePaginaSecundaria extends EtiquetaEnlacesHtml
{

    public $elementos = "Página Secundaria";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/paginaSecundaria.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

<?php

class EnlaceOcultarTexto extends EtiquetaEnlacesHtml
{

    public $elementos = "Ocultar Texto";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/ocultarTexto.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

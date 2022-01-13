<?php

class EnlaceSaltoCapitulo extends EtiquetaEnlacesHtml
{

    public $elementos = "Salto Capitulo";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/saltoCapitulo.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

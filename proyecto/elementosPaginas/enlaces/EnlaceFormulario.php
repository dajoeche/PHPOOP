<?php

class EnlaceFormulario extends EtiquetaEnlacesHtml
{

    public $elementos = "Formulario";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/formulario.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

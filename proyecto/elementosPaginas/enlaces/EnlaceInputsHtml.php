<?php

class EnlaceInputsHtml extends EtiquetaEnlacesHtml
{

    public $elementos = "Inputs";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/inputs.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

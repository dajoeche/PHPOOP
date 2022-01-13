<?php

class EnlaceCompuCode extends EtiquetaEnlacesHtml
{

    public $elementos = "Computer Code";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/compucode.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

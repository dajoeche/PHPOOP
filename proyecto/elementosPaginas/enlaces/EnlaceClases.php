<?php

class EnlaceClases extends EtiquetaEnlacesHtml
{

    public $elementos = "Clases";
    public $atributos = array("href"=>"http://localhost/php/clases.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

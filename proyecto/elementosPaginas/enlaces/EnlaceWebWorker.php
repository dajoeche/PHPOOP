<?php

class EnlaceWebWorker extends EtiquetaEnlacesHtml
{

    public $elementos = "Web Workers";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/webworker.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

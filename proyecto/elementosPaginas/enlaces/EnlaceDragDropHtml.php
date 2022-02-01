<?php

class EnlaceDragDropHtml extends EtiquetaEnlacesHtml
{

    public $elementos = "Drag And Drop";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/dragdrop.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

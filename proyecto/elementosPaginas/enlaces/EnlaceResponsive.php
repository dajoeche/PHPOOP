<?php

class EnlaceResponsive extends EtiquetaEnlacesHtml
{

    public $elementos = "Responsive";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/responsive.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

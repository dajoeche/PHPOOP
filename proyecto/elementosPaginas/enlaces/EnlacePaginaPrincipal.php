<?php

class EnlacePaginaPrincipal extends EtiquetaEnlacesHtml
{

    public $elementos = "Página Principal";
    public $atributos = array("href"=>"http://localhost/php/proyecto/paginas/paginaPrincipal.php", "class"=>"miEnlace");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

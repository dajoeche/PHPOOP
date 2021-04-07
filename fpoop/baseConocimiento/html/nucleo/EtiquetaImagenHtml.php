<?php

class EtiquetaImagenHtml extends MEtiquetas
{

    public $apertura = "<img>";
    public $atributos = array("src"=>"https://www.w3schools.com", "alt"=>"Imagen", "width"=>"104", "height"=>"142");
    public $elementos = "";
    public $cierre = "";

    public function __construct()
    {
		parent::__construct();
    }


}

?>

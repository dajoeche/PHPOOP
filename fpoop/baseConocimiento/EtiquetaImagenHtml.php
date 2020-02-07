<?php

class EtiquetaImagenHtml extends IManejadorEtiquetas
{

    public $apertura = "<img>";
    public $atributos = array("src"=>"https://www.w3schools.com", "alt"=>"Imagen", "width"=>"104", "height"=>"142");
    public $elementos = "";
    public $cierre = "</img>";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>


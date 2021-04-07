<?php

class ImagenMapaImagen extends EtiquetaImagenHtml
{
	
    public $atributos = array(
								"src"=>"../assets/images/workplace.jpg", 
								"alt"=>"Workplace", 
								"usemap"=>"#workmap",
								"width"=>"400", 
								"height"=>"379",
								
							 );
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>


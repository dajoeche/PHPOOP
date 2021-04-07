<?php

class ImagenBola extends EtiquetaImagenHtml
{
	
    public $atributos = array(
								"src"=>"../assets/images/ball-63527__340.webp", 
								"alt"=>"Imagen", 
								"width"=>"250", 
								"height"=>"150"
							 );
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>


<?php

class SourceFood extends EtiquetaSourceHtml
{

	public $atributos = array(
								"media"=>"(min-width: 650px)",
								"srcset"=>"../assets/images/img_food.jpg"
	                         );  
	                                 
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>


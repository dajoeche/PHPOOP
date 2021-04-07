<?php

class SourceCar extends EtiquetaSourceHtml
{

	public $atributos = array(
								"media"=>"(min-width: 465px)",
								"srcset"=>"../assets/images/img_car.jpg"
	                         );  
	                                 
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>


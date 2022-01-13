<?php

class ImagenHeightWidthAttributes extends EtiquetaImagenHtml
{

    public $atributos = array(
								"src"=>"../assets/images/img_submit.gif",
								"alt"=>"Submit",
                 "width"=>"48",
                 "height"=>"48",
							 );

    public function __construct()
    {
		parent::__construct();
    }


}

?>

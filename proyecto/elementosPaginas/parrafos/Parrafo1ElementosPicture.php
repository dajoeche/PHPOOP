<?php

class Parrafo1ElementosPicture extends EtiquetaParrafoHtml
{

    public $elementos = "Resize the browser to see different versions of the picture loading at different viewport sizes.
The browser looks for the first source element where the media query matches the user's current viewport width,
and fetches the image specified in the srcset attribute.";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>


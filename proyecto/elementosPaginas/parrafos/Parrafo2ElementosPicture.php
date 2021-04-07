<?php

class Parrafo2ElementosPicture extends EtiquetaParrafoHtml
{

    public $elementos = "The img element is required as the last child tag of the picture declaration block.
The img element is used to provide backward compatibility for browsers that do not support the picture element, or if none of the source tags matched.";
        
    public function __construct() 
    {
		parent::__construct();
    }
 
      
}

?>


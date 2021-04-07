<?php

class EtiquetaSourceHtml extends MEtiquetas
{

    public $apertura = "<source>";
    public $elementos = "";
    public $cierre = "";
	public $atributos = array(
								"media"=>"(min-width: 650px)",
								"srcset"=>"img_food.jpg"
	                         );
    public function __construct()
    {
		parent::__construct();
    }


}

?>

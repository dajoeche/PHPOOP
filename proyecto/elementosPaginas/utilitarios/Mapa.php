<?php

class Mapa extends EtiquetaMapaImagenHtml
{

	public $atributos = array("name"=>"workmap");
	public $elementos = array(
								"AreaPantalla",
								"AreaCelular",
								"AreaTaza"
							  );

    public function __construct()
    {
		parent::__construct();
    }


}

?>

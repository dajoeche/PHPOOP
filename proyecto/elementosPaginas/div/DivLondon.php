<?php

class DivLondon extends EtiquetaDivHtml
{

    public $atributos = array(
                              "class"=>"city"
                              );
    public $elementos = array(
                              "EncabezadoLondon",
                              "ParrafoLondon"
							               );

    public function __construct()
    {
		parent::__construct();
    }


}

?>

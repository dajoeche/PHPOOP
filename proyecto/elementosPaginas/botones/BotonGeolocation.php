<?php

class BotonGeolocation extends TituloBoton
{

    public $titulo = "Click the button to get your coordinates.";
    public $etiquetaTitulo = "EtiquetaParrafoHtml";
    public $elementosBoton = "Try It";
    public $atributosBoton = array("onclick"=>"getLocation()");


}

?>

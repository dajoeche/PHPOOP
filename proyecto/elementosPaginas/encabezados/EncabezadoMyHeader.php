<?php

class EncabezadoMyHeader extends EtiquetaH1Html
{

    public $elementos = "My Header";
    public $atributos = array("id"=>"myHeader");

    public function __construct()
    {
		parent::__construct();
    }


}

?>

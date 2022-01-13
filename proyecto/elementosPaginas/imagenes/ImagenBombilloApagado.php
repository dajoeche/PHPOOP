<?php

class ImagenBombilloApagado extends EtiquetaImagenHtml
{

    public $atributosDefecto = array(
								"width"=>"100",
								"height"=>"180",
								"id"=>"myImage",
							 );
    public $atributos = array(
           								"src"=>"../../../assets/images/pic_bulboff.gif",
           								"alt"=>"BombilloApagado",
           							 );

    public function __construct()
    {
		parent::__construct();
    }


}

?>

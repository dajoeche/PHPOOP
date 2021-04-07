<?php

class ImagenBombilloEncendido extends ImagenBombilloApagado
{

    public $atributos = array(
								"src"=>"../assets/images/pic_bulbon.gif",
                "alt"=>"BombilloEncendido",
							 );


    public function __construct()
    {
		parent::__construct();
    }


}

?>

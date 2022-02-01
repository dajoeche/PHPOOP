<?php

class ImagenDragDropLogo extends _Imagen
{

    public $atributosImagen = array(
                                    "id"=>"drag11",
								                    "src"=>"../../../assets/images/img_w3slogo.gif",
                                    "draggable"=>"true",
                                    "ondragstart"=>"drag(event)",
                                    "width"=>"88",
                                    "height"=>"31",
							                     );
}

?>

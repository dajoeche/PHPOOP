<?php

class ImagenDragDrop extends _Imagen
{

    public $atributosImagen = array(
                                    "id"=>"drag1",
								                    "src"=>"../../../assets/images/img_logo.gif",
                                    "draggable"=>"true",
                                    "ondragstart"=>"drag(event)",
                                    "width"=>"336",
                                    "height"=>"69",
							                     );
}

?>

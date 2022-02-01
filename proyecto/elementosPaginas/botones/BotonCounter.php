<?php

class BotonCounter extends _Boton
{

    public $elementosBoton = "Click Me!";
    public $atributosBoton = array(
                                    "onclick"=>"clickCounter()",
                                    "type"=>"button",
                                   );

}

?>

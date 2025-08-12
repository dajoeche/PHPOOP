<?php

class FormaCalendario extends TablaFormulario
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>PATHMENU."V_Calendario", "method"=>"post");
  public $itemsTabla =  array(
                                array("SelectAnimal"),
                                array("SelectAnimal2"),
                                array("SelectNumeroAnimal"),
                                array("SelectLoteria"),
                                array("Espacio","SubmitForma"),
                             );

}

?>

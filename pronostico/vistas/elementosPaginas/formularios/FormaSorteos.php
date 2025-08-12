<?php

class FormaSorteos extends TablaFormulario
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>PATHMENU."V_Sorteos", "method"=>"post");
  public $itemsTabla =  array(
                                array("CajaTextoFechaFor"),
                                array("SelectLoteria"),
                                array("SelectAnimal"),
                                array("SelectAnimal2"),
                                array("SelectAnimal3"),
                                array("SelectNumeroAnimal"),
                                array("Espacio","SubmitForma"),
                                
                             );


}

?>

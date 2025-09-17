<?php

class FormaCombinados extends TablaFormulario
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>PATHMENU."V_Combinados", "method"=>"post");
  public $itemsTabla =  array(
                                array("CajaTextoFechaFor"),
                                array("SelectLoteria"),
                                array("SelectSorteo"),
                                array("SelectCombinados"),
                                array("Espacio","SubmitForma"),
                                
                             );


}

?>

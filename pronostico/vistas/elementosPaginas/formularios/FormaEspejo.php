<?php

class FormaEspejo extends FormaResultados
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>PATHMENU."V_Espejo", "method"=>"post");
  public $itemsTabla =  array(
                                array("CajaTextoFechaFor"),
                                array("SelectLoteria"),
                                array("SelectAnimal"),
                                array("SelectSorteo"),
                                array("Espacio","SubmitForma"),
                             );

}

?>

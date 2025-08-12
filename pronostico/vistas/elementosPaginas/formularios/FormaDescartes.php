<?php

class FormaDescartes extends TablaFormulario
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>PATHMENU."V_Descartes", "method"=>"post");
  public $itemsTabla =  array(
                                array("CajaTextoFechaFor"),
                                array("SelectLoteria"),
                                array("SelectSorteo"),
                                array("Espacio","SubmitForma"),
                                
                             );


}

?>

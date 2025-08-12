<?php

class FormaSecuenciaSorteo extends TablaFormulario
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>PATHMENU."V_SecuenciaSorteo", "method"=>"post");
  public $itemsTabla =  array(
                                array("CajaTextoFechaFor"),
                                array("SelectLoteria"),
                                array("SelectSorteo"),
                                array("Espacio","SubmitForma"),
                                
                             );


}

?>

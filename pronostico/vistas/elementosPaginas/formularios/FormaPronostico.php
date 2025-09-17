<?php

class FormaPronostico extends TablaFormulario
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>PATHMENU."V_Pronostico", "method"=>"post");
  public $itemsTabla =  array(
                                array("CajaTextoFechaFor"),
                                array("SelectLoteria"),
                                array("SelectPronostico"),
                                array("Espacio","SubmitForma"),
                                
                             );


}

?>

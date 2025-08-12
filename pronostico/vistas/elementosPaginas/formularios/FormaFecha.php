<?php

class FormaFecha extends TablaFormulario
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>PATHMENU."V_Sumade", "method"=>"post");
  public $itemsTabla =  array(
                                array("CajaTextoFechaFor"),
                                array("Espacio","SubmitForma"),
                             );


}

?>

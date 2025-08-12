<?php

class FormaRepetidoDiario extends FormaResultados
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>PATHMENU."V_RepetidoDiario", "method"=>"post");
    public $itemsTabla =  array(
                                array("CajaTextoFechaFor"),
                                array("SelectLoteria"),
                                array("Espacio","SubmitForma"),
                             );


}

?>

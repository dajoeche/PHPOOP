<?php

class FormaPorFecha extends TablaFormulario
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>PATHMENU."V_PorFechas", "method"=>"post");
  public $itemsTabla =  array(
                                array("CajaTextoFechaFor"),
                                array("SelectLoteria"),
                                array("SelectTipo"),
                                array("Espacio","SubmitForma"),
                             );


}

?>

<?php

class FormaDiaSiguiente extends TablaFormulario
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>PATHMENU."V_DiaSiguiente", "method"=>"post");
  public $itemsTabla =  array(
                                array("SelectLoteria"),
                                array("SelectSorteo"),
                                array("Espacio","SubmitForma"),
                             );


}

?>

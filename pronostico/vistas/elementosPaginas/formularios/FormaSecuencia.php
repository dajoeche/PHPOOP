<?php

class FormaSecuencia extends TablaFormulario
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>PATHMENU."V_Secuencia", "method"=>"post");
  public $itemsTabla =  array(
                                array("CajaTextoFechaFor"),
                                array("SelectLoteria"),
                                //array("SelectAnimal"),
                                array("SelectSorteo"),
                                array("Espacio","SubmitForma"),
                                
                             );


}

?>

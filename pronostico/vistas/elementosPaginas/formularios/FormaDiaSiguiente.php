<?php

class FormaDiaSiguiente extends TablaFormulario
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>"http://localhost/phpoop/pronostico/index.php?ir=V_DiaSiguiente", "method"=>"post");
  public $itemsTabla =  array(
                                array("SelectLoteria"),
                                array("Espacio","SubmitForma"),
                             );


}

?>

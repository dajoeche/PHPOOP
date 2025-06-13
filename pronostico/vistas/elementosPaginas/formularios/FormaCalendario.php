<?php

class FormaCalendario extends TablaFormulario
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>"http://localhost//phpoop/pronostico/index.php?ir=V_Calendario", "method"=>"post");
  public $itemsTabla =  array(
                                array("SelectAnimal"),
                                array("SelectLoteria"),
                                array("Espacio","SubmitForma"),
                             );

}

?>

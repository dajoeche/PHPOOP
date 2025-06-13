<?php

class FormaResultados extends TablaFormulario
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>"http://localhost//phpoop/pronostico/index.php?ir=V_Resultados", "method"=>"post");
  public $itemsTabla =  array(
                                array("CajaTextoFechaFor"),
                                array("SelectLoteria"),
                                array("Espacio","SubmitForma"),
                             );


}

?>

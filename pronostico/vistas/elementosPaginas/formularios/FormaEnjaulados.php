<?php

class FormaEnjaulados extends FormaResultados
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>"http://localhost//phpoop/pronostico/index.php?ir=V_Enjaulados", "method"=>"post");
  public $itemsTabla =  array(
                                array("CajaTextoFechaFor"),
                                array("SelectLoteria"),
                                array("SelectSorteo"),
                                array("Espacio","SubmitForma"),
                             );


}

?>

<?php

class FormaPorSorteo extends TablaFormulario
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>"http://localhost//phpoop/pronostico/index.php?ir=V_PorSorteo", "method"=>"post");
  public $itemsTabla =  array(
                                array("CajaTextoFechaFor"),
                                array("SelectLoteria"),
                                array("SelectSorteo"),
                                array("SelectTipo"),
                                array("Espacio","SubmitForma"),
                                
                             );


}

?>

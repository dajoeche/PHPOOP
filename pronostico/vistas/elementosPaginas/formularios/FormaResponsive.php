<?php

class FormaResponsive extends TablaFormulario
{
  public $modoBoton = "OFF";
  public $atributosFormulario = array("action"=>"/action_page.php");
  public $itemsTabla =  array(
                                array("LabelFname","CajaTextoFnameResponsive"),
                                array("LabelLname","CajaTextoLnameResponsive"),
                                array("LabelCountry","SelectCountrySimple"),
                                array("LabelSubject","TextareaFormaResponsive"),
                                array("Espacio","SubmitForma"),
                             );


}

?>

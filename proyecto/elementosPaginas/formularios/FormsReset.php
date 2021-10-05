<?php

class FormsReset extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Reset Button";
  public $complemento = 'input type="reset"';
	public $parrafo = 'The * defines a reset button that resets all form values to their default values:';
	public $nombreSubmit = "Submit";
  public $modoReset = "ON";
  public $nombreReset = "Restablecer";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "CajaTextoFname",
                              "SaltarLinea",
	                            "CajaTextoLname",
                              "Saltar2Lineas",

							 );

}

?>

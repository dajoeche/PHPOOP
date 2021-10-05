<?php

class FormsPersona extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Text field";
  public $complemento = 'input type="text"';
	public $parrafo = 'The * defines a one-line text input field:';
	public $nombreSubmit = "Submit";
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

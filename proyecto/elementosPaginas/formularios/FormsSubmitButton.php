<?php

class FormsSubmitButton extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Submit Button";
  public $complemento = 'input type="submit"';
	public $parrafo = 'The * defines a button for submitting form data to a form-handler:';
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

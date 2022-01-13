<?php

class FormsInputAutofocusAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input autofocus attribute";
	public $parrafo = "The autofocus attribute specifies that the input field should automatically get focus when the page loads.";
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                                      "SaltarLinea",
	                                    "CajaTextoFnameAutofocus",
                                      "Saltar2Lineas",
	                                    "CajaTextoLname",
                                      "Saltar2Lineas",
							 );

}

?>

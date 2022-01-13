<?php

class FormsInputPatternAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input pattern attribute";
	public $parrafo = "The pattern attribute specifies a regular expression that the input element's value is checked against.";
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "PatternAttributeInput",
                              "Saltar2Lineas",
							 );

}

?>

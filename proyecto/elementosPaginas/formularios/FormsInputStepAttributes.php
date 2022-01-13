<?php

class FormsInputStepAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input step attribute";
	public $parrafo = "The step attribute specifies the legal number intervals for an input element.";
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "StepAttributeInput",
                              "Saltar2Lineas",
							 );

}

?>

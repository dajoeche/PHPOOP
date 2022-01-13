<?php

class FormsInputRequiredAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input required attribute";
	public $parrafo = "The required attribute specifies that an input field must be filled out before submitting the form.";
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "RequiredAttributeInput",
                              "Saltar2Lineas",
							 );

}

?>

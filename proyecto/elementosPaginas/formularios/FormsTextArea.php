<?php

class FormsTextArea extends TituloParrafoFormulario
{

  public $titulo = "Textarea";
	public $parrafo = 'The textarea element defines a multi-line input field.';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
	                            "TextAreaCat",
                              "Saltar2Lineas",
							 );

}

?>

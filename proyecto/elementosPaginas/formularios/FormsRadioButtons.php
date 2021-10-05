<?php

class FormsRadioButtons extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Radio Buttons";
  public $complemento = 'input type="radio"';
	public $parrafo = 'The * defines a radio button: Choose your favorite Web language:';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "RadioButtonHtml",
	                            "RadioButtonCSS",
                              "RadioButtonJS",
                              "Saltar2Lineas",
							 );

}

?>

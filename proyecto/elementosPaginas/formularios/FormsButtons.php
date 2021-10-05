<?php

class FormsButtons extends TituloParrafoFormulario
{

  public $titulo = "Radio Buttons";
	public $parrafo = 'Choose your favorite Web language: ';
	public $modoBoton = "OFF";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
	                                     "RadioButtonHtml",
                                       "RadioButtonCSS",
                                       "RadioButtonJS",
							                        );

}

?>

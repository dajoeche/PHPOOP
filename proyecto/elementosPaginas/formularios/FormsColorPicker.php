<?php

class FormsColorPicker extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Show a Color Picker";
  public $complemento = 'input type="color"';
	public $parrafo = 'The * is used for input fields that should contain a color.';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "SelectColorInput",
							 );

}

?>

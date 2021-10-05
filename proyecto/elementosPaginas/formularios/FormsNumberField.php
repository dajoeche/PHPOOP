<?php

class FormsNumberField extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Number Field";
  public $complemento = 'input type="number"';
	public $parrafo = 'The * defines a numeric input field.';
  public $parrafo2 = 'You can use the min and max attributes to add numeric restrictions in the input field:';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "NumberFieldInput",

							 );

}

?>

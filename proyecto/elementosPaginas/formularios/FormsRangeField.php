<?php

class FormsRangeField extends TituloParrafoFormulario
{

  public $titulo = "Range Field";
	public $parrafo = 'Depending on browser support: The input type "range" can be displayed as a slider control.';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "RangeFieldInput",

							 );

}

?>

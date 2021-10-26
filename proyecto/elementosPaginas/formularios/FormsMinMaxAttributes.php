<?php

class FormsMinMaxAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input min and max attributes";
	public $parrafo = 'The min and max attributes specify the minimum and maximum values for an input element.';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "DateMax",
                              "Saltar2Lineas",
	                            "DateMin",
                              "Saltar2Lineas",
	                            "NumberFieldInput",
                              "Saltar2Lineas",
							 );

}

?>

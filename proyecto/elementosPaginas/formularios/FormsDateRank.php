<?php

class FormsDateRank extends TituloParrafoFormulario
{

  public $titulo = "Date Field Restrictions";
	public $parrafo = 'Use the min and max attributes to add restrictions to dates:';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "DateMin",
                              "SaltarLinea",
                              "DateMax",
							 );

}

?>

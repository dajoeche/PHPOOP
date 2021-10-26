<?php

class FormsValueAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input value attribute";
	public $parrafo = 'The value attribute specifies an initial value for an input field:';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "CajaTextoFname",
                              "SaltarLinea",
	                            "CajaTextoLname",
                              "Saltar2Lineas",



							 );

}

?>

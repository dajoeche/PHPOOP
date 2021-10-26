<?php

class FormsSizeAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input size attribute";
	public $parrafo = 'The size attribute specifies the width (in characters) of an input field:';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "CajaTextoFnameSize",
                              "SaltarLinea",
	                            "CajaTextoPIN",
                              "Saltar2Lineas",
							 );

}

?>

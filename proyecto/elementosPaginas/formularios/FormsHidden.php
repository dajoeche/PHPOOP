<?php

class FormsHidden extends TituloFormulario
{

  public $titulo = "A Hidden Field (look in source code)";
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
                              "CajaTextoFnameInput",
                              "SaltarLinea",
	                            "HiddenInput",
                              "SaltarLinea",

							 );

}

?>

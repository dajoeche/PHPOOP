<?php

class FormsEmail extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Email Field";
  public $complemento = 'input type="email"';
	public $parrafo = 'The * is used for input fields that should contain an e-mail address:';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "EmailInput",
							 );

}

?>

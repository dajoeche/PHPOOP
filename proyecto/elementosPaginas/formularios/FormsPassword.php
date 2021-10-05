<?php

class FormsPassword extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Password field";
  public $complemento = 'input type="password"';
	public $parrafo = 'The * defines a password field:';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "CajaTextoUsername",
                              "SaltarLinea",
	                            "CajaTextoPassword",
                              "Saltar2Lineas",

							 );

}

?>

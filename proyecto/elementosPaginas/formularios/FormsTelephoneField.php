<?php

class FormsTelephoneField extends TituloParrafoCompuestoFormulario
{

  public $titulo = "Telephone Field";
  public $complemento = 'input type="tel"';
	public $parrafo = 'The * is used for input fields that should contain a telephone number:';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "TelephoneFieldInput",
                              "Saltar2Lineas",
                              "FormatTelephone",
                              "Saltar2Lineas",


							 );

}

?>

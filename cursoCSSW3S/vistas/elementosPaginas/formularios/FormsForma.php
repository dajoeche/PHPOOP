<?php

class FormsForma extends _Formulario
{

	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "CajaTextoFnameFormsForma",
                              "CajaTextoLnameFormsForma",
                              "SelectCountry",
							 );

}

?>

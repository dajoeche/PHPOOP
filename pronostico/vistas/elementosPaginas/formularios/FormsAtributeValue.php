<?php

class FormsAtributeValue extends TituloFormulario
{
  public $etiquetaSubmit = "Boton";
  public $titulo = "Styling Forms";
	public $nombreSubmit = "Example Button";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "CajaTextoFname",
                              "CajaTextoLname",
							 );

}

?>

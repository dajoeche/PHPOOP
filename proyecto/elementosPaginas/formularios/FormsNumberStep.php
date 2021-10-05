<?php

class FormsNumberStep extends TituloParrafoFormulario
{

  public $titulo = "Numeric Steps";
	public $parrafo = 'Depending on browser support: Fixed steps will apply in the input field.';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "NumberStep",

							 );

}

?>

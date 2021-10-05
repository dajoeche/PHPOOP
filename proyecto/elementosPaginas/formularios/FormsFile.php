<?php

class FormsFile extends TituloParrafoFormulario
{

  public $titulo = "File upload";
	public $parrafo = 'Show a file-select field which allows a file to be chosen for upload:';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "FileInput",
                              "SaltarLinea",
                              "SaltarLinea",
							 );

}

?>

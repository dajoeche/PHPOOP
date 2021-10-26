<?php

class FormsInputMultipleAttributes  extends TituloParrafoFormularioParrafoAdicional
{

  public $titulo = "The input multiple attributes";
	public $parrafo = 'The multiple attribute specifies that the user is allowed to enter more than one value in an input field.';
	public $parrafoAdicional = '<br>To select multiple files, hold down the CTRL or SHIFT key while selecting.';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "FileMultipleInput",
                              "Saltar2Lineas",
							 );

}

?>

<?php

class FormsInputListAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input list attribute";
	public $parrafo = "The list attribute refers to a datalist element that contains pre-defined options for an input element.";
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "DataListExplorer",
							 );

}

?>

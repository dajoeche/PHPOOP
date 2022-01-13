<?php

class FormsInputFormAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input form attribute";
	public $parrafo = "The form attribute specifies the form an input element belongs to.";
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"get",
                                      "id"=>"form1",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
                              "CajaTextoFnameAutocomplete",
                              "Saltar2Lineas",
							 );

}

?>

<?php

class FormsFormactionAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input formaction attribute";
	public $parrafo = "The formaction attribute specifies the URL of a file that will process the input when the form is submitted.";
  public $nombreSubmit = "Submit as Admin";

	public $atributosFormulario = array(
																			"action"=>"/action_page2.php",
																			"method"=>"get",
                                      "id"=>"form1",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
                              "CajaTextoFnameAutocomplete",
                              "Saltar2Lineas",
                              "CajaTextoLnameAutocomplete",
                              "Saltar2Lineas",
                              "SubmitAdmin",
							 );

}

?>

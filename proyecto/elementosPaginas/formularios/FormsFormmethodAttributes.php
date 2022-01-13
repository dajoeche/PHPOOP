<?php

class FormsFormmethodAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input formmethod Attribute";
	public $parrafo = 'The formmethod attribute defines the HTTP method for sending form-data to the action URL.';
  public $nombreSubmit = "Submit using POST";
  public $atributosSubmit = array(
                                      "formmethod"=>"post"
                                     );

	public $atributosFormulario = array(
																			"action"=>"/action_page2.php",
																			"method"=>"get",
                                      "target"=>"_blank",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
                              "CajaTextoFnameAutocomplete",
                              "Saltar2Lineas",
                              "CajaTextoLnameAutocomplete",
                              "Saltar2Lineas",
                              "SubmitGet",
							 );

}

?>

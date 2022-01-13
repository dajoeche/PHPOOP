<?php

class FormsFormenctypeAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input formenctype attribute";
	public $parrafo = 'The formenctype attribute specifies how the form data should be encoded when submitted.';
  public $nombreSubmit = "Submit as Multipart/form-data";
  public $atributosSubmit = array(
                                      "formenctype"=>"multipart/form-data"
                                     );

	public $atributosFormulario = array(
																			"action"=>"/action_page2.php",
																			"method"=>"get",
                                      "formenctype"=>"multipart/form-data"
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
                              "CajaTextoFnameAutocomplete",
                              "Saltar2Lineas",
                              "SubmitAdmin",
							 );

}

?>

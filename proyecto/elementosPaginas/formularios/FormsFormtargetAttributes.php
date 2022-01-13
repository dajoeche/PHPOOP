<?php

class FormsFormtargetAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input formtarget attribute";
	public $parrafo = 'The formtarget attribute specifies a name or a keyword that indicates where to display the response that is received after submitting the form.';
  public $nombreSubmit = "Submit to a new window/tab";
  public $atributosSubmit = array(
                                      "formtarget"=>"_blank",
                                     );

	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
                              "CajaTextoFnameAutocomplete",
                              "Saltar2Lineas",
                              "CajaTextoLnameAutocomplete",
                              "Saltar2Lineas",
                              "SubmitSimple",
							 );

}

?>

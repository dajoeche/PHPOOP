<?php

class FormsInputAutocompleteAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The autocomplete attribute";
	public $parrafo = "The autocomplete attribute specifies whether or not an input field should have autocomplete enabled.";
	public $parrafo2 = "Fill in and submit the form, then reload the page to see how autocomplete works.";
	public $parrafo3 = 'Notice that autocomplete is "on" for the form, but "off" for the e-mail field!';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "CajaTextoFnameAutocomplete",
                              "Saltar2Lineas",
	                            "CajaTextoLnameAutocomplete",
                              "Saltar2Lineas",
	                            "CajaTextoEmail",
                              "Saltar2Lineas",
							 );

}

?>

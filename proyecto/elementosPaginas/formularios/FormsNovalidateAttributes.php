<?php

class FormsNovalidateAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The form novalidate attribute";
  public $nombreSubmit = "Submit";
  public $parrafo = "The novalidate attribute specifies that the form data should not be validated when submitted.";

  public $atributosFormulario = array(
																			"action"=>"/action_page.php",
                                      "novalidate",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
                              "CajaTextoEnterEmail",
                              "Saltar2Lineas",
							 );

}

?>

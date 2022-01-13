<?php

class FormsFormnovalidateAttributes  extends TituloFormulario
{

  public $titulo = "The input formnovalidate attribute";
  public $nombreSubmit = "Submit without validation";
  public $atributosSubmit = array(
                                      "formnovalidate"=>"formnovalidate",
                                     );

	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
	                         					 );

	public $elementosFormulario = array(
                              "CajaTextoEnterEmail",
                              "Saltar2Lineas",
                              "SubmitSimple",
							 );

}

?>

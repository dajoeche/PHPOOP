<?php

class FormsMaxLengthAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input maxlength attribute";
	public $parrafo = 'The maxlength attribute specifies the maximum number of characters allowed in an input field:';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "CajaTextoFnameSize",
                              "SaltarLinea",
	                            "CajaTextoPINMaxLength",
                              "Saltar2Lineas",
							 );

}

?>

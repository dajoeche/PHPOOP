<?php

class FormsInputHeightWidthAttributes  extends TituloParrafoFormulario
{

  public $titulo = "The input height and width attributes";
	public $parrafo = 'The height and width attributes specify the height and width of an input type="image" element.';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
                              "SaltarLinea",
	                            "CajaTextoFname",
                              "Saltar2Lineas",
	                            "CajaTextoLname",
                              "Saltar2Lineas",
                              "ImagenHeightWidthAttributes",
                              "SaltarLinea",
							 );

  public $modoBoton = "OFF";

}

?>

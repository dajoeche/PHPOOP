<?php

class FormsHtml extends TituloFormularioParrafo
{

  public $titulo = "HTML Forms";
	public $parrafo = 'If you click the "Submit" button,
										the form-data will be sent to a page called
										"/action_page.php".';
	public $nombreSubmit = "Enviar";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
	                            "CajaTextoFname",
                              "SaltarLinea",
	                            "CajaTextoLname",
                              "Saltar2Lineas",
							 );

}

?>

<?php

class FormsSelect extends TituloParrafoFormulario
{

  public $titulo = "The select Element";
	public $parrafo = 'The select element defines a drop-down list:';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
	                            "SelectCar",
                              "Saltar2Lineas",
							 );

}

?>

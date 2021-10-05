<?php

class FormsOptgroup extends TituloParrafoFormulario
{

  public $titulo = "The optgroup element";
	public $parrafo = 'The optgroup tag is used to group related options in a drop-down list:';
	public $nombreSubmit = "Submit";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
	                            "OptgroupCar",
                              "Saltar2Lineas",
							 );

}

?>

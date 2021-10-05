<?php

class FormsFieldset extends TituloParrafoFormulario
{

  public $titulo = "Grouping Form Data with Fieldset";
	public $parrafo = 'The fieldset element is used to group related data in a form, and the legend element defines a caption for the fieldset element.';
  public $modoBoton = "OFF";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
	                            "FieldsetPerson",
                              "Saltar2Lineas",
							 );

}

?>

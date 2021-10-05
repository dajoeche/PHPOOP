<?php

class FormsDatalist extends TituloParrafoFormulario
{

  public $titulo = "The datalist Element";
	public $parrafo = 'The datalist element specifies a list of pre-defined options for an input element.';
  public $nombreSubmit = "Enviar Consulta";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
	                         					 );

	public $elementosFormulario = array(
	                            "DataListExplorer",
                              
							 );

}

?>

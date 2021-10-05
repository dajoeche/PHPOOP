<?php

class FormsOutput extends TituloParrafoFormulario
{

  public $titulo = "The output Element";
	public $parrafo = 'The output element represents the result of a calculation.';
  public $nombreSubmit = "Enviar Consulta";
	public $atributosFormulario = array(
																			"action"=>"/action_page.php",
																			"method"=>"post",
                                      "oninput"=>"x.value=parseInt(a.value)+parseInt(b.value)",
	                         					 );

	public $elementosFormulario = array(
                              "TextoCero",
                              "RangeSuma",
                              "TextoCien",
                              "NumberSuma",
	                            "OutputSuma",
                              "Saltar2Lineas",

							 );

}

?>

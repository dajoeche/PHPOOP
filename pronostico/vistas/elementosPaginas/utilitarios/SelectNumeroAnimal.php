<?php

class SelectNumeroAnimal extends LabelSelect
{
    public $label = "Numero Animal:<br>";
    public $forLabel = "Numero Animal";

		public $atributosSelect = array("id"=>"numeroAnimal", "name"=>"numeroAnimal");//, "size"=>"1", "multiple"
		public $option = array(
														array("value"=>"2", "nombre"=>"Dos"),
														array("value"=>"1", "nombre"=>"Uno"),
														array("value"=>"3", "nombre"=>"Tres"),
														array("value"=>"4", "nombre"=>"Cuatro"),
														array("value"=>"5", "nombre"=>"Todos"),
														array("value"=>"6", "nombre"=>"Fecha"),
														array("value"=>"7", "nombre"=>"Salio Ayer"),
														array("value"=>"8", "nombre"=>"Extremos"),
														array("value"=>"9", "nombre"=>"Jaula Diaria"),
														array("value"=>"10", "nombre"=>"Secuencia"),
														array("value"=>"11", "nombre"=>"Repetido Diario"),
														array("value"=>"12", "nombre"=>"Secuencia Sorteo"),
														array("value"=>"13", "nombre"=>"Jaula Sorteo"),
														array("value"=>"14", "nombre"=>"Descartes"),
														array("value"=>"15", "nombre"=>"Mas Salen"),
														
													);

}

?>


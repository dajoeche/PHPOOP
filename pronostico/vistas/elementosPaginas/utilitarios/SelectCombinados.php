<?php

class SelectCombinados extends LabelSelect
{
    public $label = "Combinados:<br>";
    public $forLabel = "Combinados";

		public $atributosSelect = array("id"=>"combinados", "name"=>"combinados");//, "size"=>"1", "multiple"
		public $option = array(
														array("value"=>"1", "nombre"=>"Descartes y Mas Salen"),
														array("value"=>"2", "nombre"=>"Secuencia Sorteo y Jaula Sorteo"),
														array("value"=>"3", "nombre"=>"Salio Ayer Y Jaula Sorteo"),
														array("value"=>"4", "nombre"=>"Salio Ayer Y Jaula Diaria"),
														array("value"=>"5", "nombre"=>"Descartes Y Salio Ayer"),
														/*array("value"=>"6", "nombre"=>"01:00"),
														array("value"=>"7", "nombre"=>"02:00"),
														array("value"=>"8", "nombre"=>"03:00"),
														array("value"=>"9", "nombre"=>"04:00"),
														array("value"=>"10", "nombre"=>"05:00"),
														array("value"=>"11", "nombre"=>"06:00"),
														array("value"=>"12", "nombre"=>"07:00"),
														array("value"=>"13", "nombre"=>"Diario"),*/
													);

}

?>


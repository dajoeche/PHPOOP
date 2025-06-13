<?php

class SelectSorteo extends LabelSelect
{
    public $label = "Sorteo:<br>";
    public $forLabel = "Sorteo";

		public $atributosSelect = array("id"=>"sorteo", "name"=>"sorteo");//, "size"=>"1", "multiple"
		public $option = array(
														array("value"=>"1", "nombre"=>"08:00"),
														array("value"=>"2", "nombre"=>"09:00"),
														array("value"=>"3", "nombre"=>"10:00"),
														array("value"=>"4", "nombre"=>"11:00"),
														array("value"=>"5", "nombre"=>"12:00"),
														array("value"=>"6", "nombre"=>"01:00"),
														array("value"=>"7", "nombre"=>"02:00"),
														array("value"=>"8", "nombre"=>"03:00"),
														array("value"=>"9", "nombre"=>"04:00"),
														array("value"=>"10", "nombre"=>"05:00"),
														array("value"=>"11", "nombre"=>"06:00"),
														array("value"=>"12", "nombre"=>"07:00"),
														array("value"=>"13", "nombre"=>"Diario"),
													);

}

?>


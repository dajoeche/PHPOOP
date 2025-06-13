<?php

class SelectLoteria extends LabelSelect
{
    public $label = "Loteria:<br>";
    public $forLabel = "Loteria";

		public $atributosSelect = array("id"=>"loteria", "name"=>"loteria");//, "size"=>"1", "multiple"
		public $option = array(
														array("value"=>"LAC", "nombre"=>"Lotto Activo"),
														array("value"=>"LGR", "nombre"=>"La Granjita"),
														array("value"=>"SLP", "nombre"=>"Selva Plus"),
														array("value"=>"CAZ", "nombre"=>"Cazaloton"),
														array("value"=>"LAI", "nombre"=>"Lotto Activo Internacional"),
														array("value"=>"LTR", "nombre"=>"Lotto Rey"),
														array("value"=>"RLA", "nombre"=>"Ruleta Activa"),
													);

}

?>


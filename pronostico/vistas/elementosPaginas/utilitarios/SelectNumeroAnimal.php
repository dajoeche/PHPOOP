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
														array("value"=>"4", "nombre"=>"Todos"),
														array("value"=>"5", "nombre"=>"Fecha"),
														
													);

}

?>


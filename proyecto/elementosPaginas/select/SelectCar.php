<?php

class SelectCar extends LabelSelect
{
    public $label = "Choose a car:";
    public $forLabel = "cars";

		public $atributosSelect = array("id"=>"cars", "name"=>"cars");//, "size"=>"1", "multiple"
		public $option = array(
														array("value"=>"volvo", "nombre"=>"Volvo"),
														array("value"=>"saab", "nombre"=>"Saab", "selected"),
														array("value"=>"fiat", "nombre"=>"Fiat"),
														array("value"=>"audi", "nombre"=>"Audi"),
													);

}

?>

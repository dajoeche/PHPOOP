<?php

class NumberFieldInput extends LabelNumberField
{
    public $label = "Quantity (between 1 and 5):";
    public $forLabel = "quantity";

		public $atributosNumberField = array("id"=>"quantity", "name"=>"quantity", "min"=>"1", "max"=>"5");

}

?>

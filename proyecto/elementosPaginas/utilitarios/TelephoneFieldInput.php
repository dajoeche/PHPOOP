|<?php

class TelephoneFieldInput extends LabelTelephoneField
{
    public $label = "Enter a phone number:";
    public $forLabel = "phone";
    public $separador = "<br><br>";

		public $atributosTelephoneField = array("id"=>"phone", "name"=>"phone", "value"=>"123-45-678", "pattern"=>"[0-9]{3}-[0-9]{2}-[0-9]{3}", "required");

}

?>

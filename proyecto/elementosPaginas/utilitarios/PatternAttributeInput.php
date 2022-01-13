<?php

class PatternAttributeInput extends LabelCajaTexto
{
    public $label = "Country code:";
    public $forLabel = "country_code";

		public $atributosCajaTexto = array("id"=>"country_code", "name"=>"country_code", "pattern"=>"[A-Za-z]{3}", "title"=>"Three letter country code");

}

?>

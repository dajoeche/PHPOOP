<?php

class SelectCountrySimple extends Select
{
		public $atributosSelect = array("id"=>"country", "name"=>"country");//, "size"=>"1", "multiple"
		public $option = array(
														array("value"=>"australia", "nombre"=>"Australia"),
														array("value"=>"canada", "nombre"=>"Canada"),
														array("value"=>"usa", "nombre"=>"Usa"),
													);

}

?>

<?php

class SelectTipo extends LabelSelect
{
    public $label = "Tipo:<br>";
    public $forLabel = "Tipo";

		public $atributosSelect = array("id"=>"tipo", "name"=>"tipo");//, "size"=>"1", "multiple"
		public $option = array(
														array("value"=>"1", "nombre"=>"Por Sorteo"),
														array("value"=>"2", "nombre"=>"Diario"),
													);

}

?>


<?php

class OptgroupCar extends LabelOptgroup
{
    public $label = "Choose a car:";
    public $forLabel = "cars";

    public $option;

		public $atributosSelect = array("id"=>"cars", "name"=>"cars");//, "size"=>"1", "multiple"
		public $optgroup = array("opt"=>array("descripcion"=>array("label"=>"Swedish Cars"),
                                             "option"=>array(
                                                              array("value"=>"volvo", "nombre"=>"Volvo"),
                                                              array("value"=>"saab", "nombre"=>"Saab", "selected"),
                                                            ),
                                            ),
                                     array("descripcion"=>array("label"=>"German Cars"),
                                             "option"=>array(
                                                              array("value"=>"mercedes", "nombre"=>"Mercedes"),
														                                  array("value"=>"audi", "nombre"=>"Audi"),
                                                            ),
                                            ),
													);

}

?>

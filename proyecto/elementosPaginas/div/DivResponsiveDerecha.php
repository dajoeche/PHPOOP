<?php

class DivResponsiveDerecha extends DivTituloParrafoMultiple
{
	  public $atributosDiv = array("class"=>"right");
		public $titulo = "What?";
	  public $parrafo = "Cinque Terre comprises five villages: Monterosso, Vernazza, Corniglia, Manarola, and Riomaggiore.";

		public $titulo1 = "Where?";
		public $parrafo1 = "On the northwest cost of the Italian Riviera, north of the city La Spezia.";

		public $titulo2 = "Price?";
		public $parrafo2 = "The Walk is free!";

    public function __construct()
    {
		parent::__construct();
    }


}

?>

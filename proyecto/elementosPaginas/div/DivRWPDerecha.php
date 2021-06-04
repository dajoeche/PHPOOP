<?php

class DivRWPDerecha extends DivTituloParrafo
{
	  public $atributosDiv = array("class"=>"right");
		public $titulo = "About";
	  public $parrafo = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit.";
		
    public function __construct()
    {
		parent::__construct();
    }


}

?>

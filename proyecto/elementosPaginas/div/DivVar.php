<?php

class DivVar extends DivTituloParrafoCompuesto
{
		public $titulo = "The var Element";
		public $parrafo = "The area of a triangle is: 1/2 x 1* x 2*, where 3* is the base, and 4* is the vertical height.";
		public $reemplazos = array(array("VarB"),"<var>h</var>",array("VarB"), "<var>h</var>");
}

?>

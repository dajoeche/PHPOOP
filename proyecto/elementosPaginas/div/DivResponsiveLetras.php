<?php

class DivResponsiveLetras extends DivTituloParrafo
{
	  public $etiquetaTitulo = "EtiquetaH1Html";
		public $atributosTitulo = array("style"=>"font-size:10vw;");
		public $titulo = "Responsive Text";
		public $atributosParrafo = array("style"=>"font-size:5vw;");
		public $parrafo = "Resize the browser window to see how the text size scales.";
		public $atributosParrafo2 = array("style"=>"font-size:5vw;");
		public $parrafo2 = "Use the 'vw' unit when sizing the text. 10vw will set the size to 10% of the viewport width.";
		public $atributosParrafo3 = "Default";
		public $parrafo3 = "Viewport is the browser window size. 1vw = 1% of viewport width. If the viewport is 50cm wide, 1vw i  s 0.5cm.";


}

?>

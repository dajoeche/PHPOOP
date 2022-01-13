<?php

class SVGLogo extends _SVGLogo
{

    public $atributosStopIni =  array(
                                    "offset"=>"0%",
                                    "style"=>"stop-color:rgb(255,255,0);stop-opacity:1"
                                   );

    public $atributosStopFin =  array(
                                    "offset"=>"100%",
                                    "style"=>"stop-color:rgb(255,0,0);stop-opacity:1"
                                   );

    public $atributosLinearGradient =  array(
                                              "id"=>"grad1",
                                              "x1"=>"0%",
                                              "y1"=>"0%",
                                              "x2"=>"100%",
                                              "y2"=>"0%",
                                            );

    public $atributosEllipse =  array(
                                      "cx"=>"100",
                                      "cy"=>"70",
                                      "rx"=>"85",
                                      "ry"=>"55",
                                      "fill"=>"url(#grad1)",
                                   );

    public $atributosText =  array(
                                    "fill"=>"#ffffff",
                                    "font-size"=>"45",
                                    "font-family"=>"Verdana",
                                    "x"=>"50",
                                    "y"=>"86",
                                   );

    public $elementosText = "SVG";
    public $elementosSVG = "Sorry, your browser does not support inline SVG.";
		public $atributosSVG = array(
                                    "width"=>"500",
                                    "height"=>"130",
                                   );

}

?>

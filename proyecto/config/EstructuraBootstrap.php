<?php

class EstructuraBootstrap extends EstructuraHtml
{

	public $meta = array("EtiquetaMetaHtmlPrincipal","MetaResponsive");
	public $css = "BootstrapCSS";
	public $js = array("JSJquery","JSBootstrap");
	public $titulo = "EtiquetaTituloHtmlBS";


    public function __construct()
    {
			parent::__construct();
    }

}

?>

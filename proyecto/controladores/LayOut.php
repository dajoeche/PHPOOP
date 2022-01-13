<?php

class LayOut extends EstructuraHtml
{

    public $contenido = array(
								              "EncabezadoCcsLayOut",
                              "ParrafoUnoCcsLayOut",
                              "ParrafoDosCcsLayOut",
                              "HeaderLayOut",
                              "SectionLayOut",
                              "FooterLayOut",
							               );

    public function __construct()
    {
		parent::__construct();
    }


}

?>

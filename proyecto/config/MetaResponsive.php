<?php

class MetaResponsive extends EtiquetaMetaHtmlPrincipal
{

    public $atributosDefecto = array(
                                      "name"=>"viewport",
                                      "content"=>"width=device-width, initial-scale=1.0"
                                    );

    public function __construct()
    {
		parent::__construct();
    }


}

?>

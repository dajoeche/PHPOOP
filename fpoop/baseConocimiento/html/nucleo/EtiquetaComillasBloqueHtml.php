<?php

class EtiquetaComillasBloqueHtml extends IManejadorEtiquetas
{

    public $apertura = "<blockquote>";
    public $elementos = "Página Principal";
    public $cierre = "</blockquote>";
	  public $atributos = array(
								"cite"=>"http://www.worldwildlife.org/who/index.html",
	                         );

    public function __construct()
    {
		parent::__construct();
    }


}

?>

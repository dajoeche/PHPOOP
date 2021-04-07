<?php

class EtiquetaBdoHtml extends IManejadorEtiquetas
{

    public $apertura = "<bdo>";
    public $elementos = "Página Principal";
    public $cierre = "</bdo>";
	  public $atributos = array(
								"dir"=>"rtl"
	                         );

    public function __construct()
    {
		parent::__construct();
    }


}

?>

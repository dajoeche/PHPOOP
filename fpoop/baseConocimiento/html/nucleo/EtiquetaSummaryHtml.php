<?php

class EtiquetaSummaryHtml extends IManejadorEtiquetas
{

    public $apertura = "<summary>";
    public $elementos = "Página Principal";
    public $cierre = "</summary>";

    public function __construct()
    {
		parent::__construct();
    }


}

?>

<?php

class InstruccionJavaScriptBodyNo extends EtiquetaScriptHtml
{

	public $elementos = 'document.getElementById("demon").innerHTML = "Hello JavaScript!";';

    public function __construct()
    {
		parent::__construct();
    }


}

?>

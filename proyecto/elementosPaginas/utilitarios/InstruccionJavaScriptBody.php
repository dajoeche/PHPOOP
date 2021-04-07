<?php

class InstruccionJavaScriptBody extends EtiquetaScriptHtml
{

	public $elementos = 'document.getElementById("demo").innerHTML = "Hello JavaScript!";';

    public function __construct()
    {
		parent::__construct();
    }


}

?>

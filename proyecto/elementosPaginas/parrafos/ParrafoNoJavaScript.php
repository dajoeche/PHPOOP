<?php

class ParrafoNoJavaScript extends EtiquetaParrafoHtml
{
    public $elementos = 'A browser without support for JavaScript will show the text written inside the noscript element.';

    public function __construct()
    {
		parent::__construct();
    }


}

?>

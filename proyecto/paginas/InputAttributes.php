<?php

class InputAttributes extends EstructuraHtml
{

    public $contenido = array(
								              "FormsValueAttributes",
                              "SaltarLinea",
								              "FormsReadOnlyAttributes",
                              "SaltarLinea",
								              "FormsDisabledAttributes",
                              "SaltarLinea",
								              "FormsSizeAttributes",
                              "SaltarLinea",
								              "FormsMaxLengthAttributes",
                              "SaltarLinea",
								              "FormsMinMaxAttributes",
                              "SaltarLinea",
								              "FormsInputMultipleAttributes",
                              "SaltarLinea",
								              "FormsInputPatternAttributes",
                              "SaltarLinea",
                              "ParrafoNotaPatternAttribute",
                              "SaltarLinea",
                            );

    public function __construct()
    {
		parent::__construct();
    }


}

?>

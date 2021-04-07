<?php

class DivHelloWorld extends DivAsterisco
{

	    public $atributos = array(
									"style"=>
											"border: 1px solid black;
											"
								 );
			public $elementos = "Hello World!";

    public function __construct()
    {
		parent::__construct();
    }


}

?>

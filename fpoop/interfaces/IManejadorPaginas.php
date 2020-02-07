<?php

class IManejadorPaginas extends ManejadorPaginas
{
    
    public function __construct($objeto) 
    {
		$this->crearInstancia($objeto);
		$this->imprimir();
    }
 
      
}

?>


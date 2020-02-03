<?php

class IManejadorContenedor extends ManejadorContenedor
{
        
    public function __construct() 
    {
		$this->manejarContenedor();
    }
 
    function manejarContenedor()
    {   
		$this->guardarContenidoElementos();
		$this->generarCodigoContenido();
		$this->guardarCodigoContenido();
		$this->generarCodigoContenedor();
		$this->incluirContenidoContenedor();
	}   
    
}

?>


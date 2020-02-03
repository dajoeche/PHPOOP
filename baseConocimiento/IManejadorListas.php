<?php

class IManejadorListas extends ManejadorListas
{
        
    public function __construct() 
    {
		$this->manejarListas();
    }
 
    function manejarListas()
    {
		$this->crearCodigoItemLista();
		$this->generarCodigoContenedor();
		$this->incluirContenidoContenedor();
	}   
    
}

?>


<?php

class IManejadorEtiquetas extends ManejadorEtiquetas
{
        
    public function __construct() 
    {
		$this->manejarEtiquetas();
    }
 
    function manejarEtiquetas()
    {   
		$this->verificarExisteAtributosDefecto();
		$this->verificarExisteAtributos();
		$this->recorrerArrayAtributos();
		$this->incluirAtributos();
		$this->incluirElementos();
		$this->guardarCodigoRetorno();
		$this->envolverContenido();
		
	}       
}

?>


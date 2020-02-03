<?php

class IManejadorEtiquetas extends ManejadorEtiquetas
{
        
    public function __construct() 
    {
		$this->manejarEtiquetas();
    }
 
    function manejarEtiquetas()
    {   $this->verificarExisteAtributos();
		$this->incluirAtributos();
		$this->incluirElementos();
		$this->guardarCodigoRetorno();
		$this->envolverContenido();
		
	}       
}

?>


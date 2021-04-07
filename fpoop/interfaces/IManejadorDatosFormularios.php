<?php

class IManejadorDatosFormularios extends ManejadorDatosFormularios
{
    
    public function __construct() 
    {
		$this->capturarDatosFormularios();
		$this->imprimirDatosFormularios();
    }
 
      
}

?>


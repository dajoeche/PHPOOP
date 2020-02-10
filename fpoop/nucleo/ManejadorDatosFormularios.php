<?php

class ManejadorDatosFormularios
{
	public $datosFormularios;
    	
    function capturarDatosFormularios()
    {
		$this->datosFormularios = $_REQUEST;
	}

    function imprimirDatosFormularios()
    {
		print_r ($this->datosFormularios);
	}					    	
}

?>

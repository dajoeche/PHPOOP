<?php

class ManejadorContenedor extends ManejadorEtiquetas
{
    public $contenedor;
    public $contenido; 
    public $codigoContenedor;
    public $codigoContenido; 

    public function __toString()
    {
        return $this->codigoRetorno;
    }

    function guardarContenidoElementos()
    {
		$this->elementos = $this->contenido;
	} 
	    	
    function generarCodigoContenido()
    {
		$this->incluirElementos();
	}  

    function generarCodigoContenedor()
    {
		$this->codigoContenedor = new $this->contenedor();
	} 

    function guardarCodigoContenido()
    {
		$this->codigoContenido = $this->objeto;
	} 
		
    function incluirContenidoContenedor()
    { 
		$this->codigoRetorno = str_replace("*",$this->codigoContenido,$this->codigoContenedor);
	} 
			    	
}

?>

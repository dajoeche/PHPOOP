<?php

class ManejadorEtiquetas extends ManejadorAtributos
{
    public $apertura;
    public $elementos;
    public $cierre;
    public $codigoRetorno;
    public $objeto;

    public function __toString()
    {
        return $this->codigoRetorno;
    }

    function incluirElementos() 
    {
		$this->comprobarEsArrayElementos();
	}

    function comprobarEsArrayElementos()
    { 
		is_array($this->elementos) ? $this->esArray() : $this->noEsArray();
	}

    function esArray()
    {
		$this->recorrerArrayElementos();
	}

    function noEsArray()
    {
		$this->objeto = $this->elementos;
	}
		
    function recorrerArrayElementos()
    {
		array_walk($this->elementos,array($this,'crearInstancia'));
	}

    function crearInstancia($nombreObjeto)
    {
		$this->objeto .= new $nombreObjeto();
	}

    function guardarCodigoRetorno()
    {
		$this->codigoRetorno = $this->objeto;
	}
				    	   
    function envolverContenido()
    {
		$this->codigoRetorno = $this->apertura.$this->codigoRetorno.$this->cierre;
	}
	
}

?>

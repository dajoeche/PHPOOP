<?php

class ManejadorAtributos
{
	
    public $atributos = "Default";
    public $atributosDefecto = "Default";
    public $atributosTemporal = array();
    public $codigoAtributos;

    function verificarExisteAtributosDefecto() 
    {
		is_array($this->atributosDefecto) ? $this->existeAtributosDefecto() : $this->noExisteAtributosDefecto();
	}
	
    function existeAtributosDefecto() 
    {   
		$this->atributosTemporal=$this->atributosDefecto;	
	}

    function noExisteAtributosDefecto() 
    {

	}	
	
    function verificarExisteAtributos() 
    {
		is_array($this->atributos) ? $this->existeAtributos() : $this->noExisteAtributos();
	}

    function existeAtributos() 
    {
		$this->atributosTemporal += $this->atributos;
	}
		
    function noExisteAtributos() 
    {
		
	}

    function recorrerArrayAtributos()
    { 
		array_walk($this->atributosTemporal,array($this,'generarAtributos'));
	}

    function generarAtributos($atributo, $nombreAtributo) 
    {
		$this->codigoAtributos .= " ".$nombreAtributo." = ".'"'.$atributo.'"';
	}
				
    function incluirAtributos() 
    {
		$this->apertura = str_replace(">",$this->codigoAtributos.">",$this->apertura);
	}
	
}

?>

<?php

class ManejadorAtributos
{
	
    public $atributos = "Default";
    public $codigoAtributos;


    function verificarExisteAtributos() 
    {
		is_array($this->atributos) ? $this->existeAtributos() : $this->noExisteAtributos();
	}

    function existeAtributos() 
    {
		$this->recorrerArrayAtributos();
	}

    function noExisteAtributos() 
    {
		
	}

    function recorrerArrayAtributos()
    { 
		array_walk($this->atributos,array($this,'generarAtributos'));
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

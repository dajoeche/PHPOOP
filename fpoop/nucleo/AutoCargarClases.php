<?php

class AutoCargarClases
{
	public $directorios = array();
	public $directorio;
	public $nombreArchivo;
	public $enlaceArchivo;
    
    public function __construct() 
    {
 
    }
	
    function registrar()
    {
        spl_autoload_register(function ($nombreArchivo) {
            $this->autoCargarRegistro($nombreArchivo);
        });
    }

    function autoCargarRegistro($nombreArchivo)
    {
		$this->guardarNombreArchivo($nombreArchivo);
		$this->recorrerArray();
	}
	
    function recorrerArray()
    {
		array_walk($this->directorios,array($this,'cargarArchivoDirectorio'));
	}
	
    function guardarNombreArchivo($nombreArchivo)
    {
		$this->nombreArchivo = $nombreArchivo;	
	}
	
    function cargarArchivoDirectorio($directorio)
    {
		$this->guardarDirectorio($directorio);
		$this->guardarEnlaceArchivo();
		$this->verificarExistencia();
	}

    function guardarDirectorio($directorio)
    {
		$this->directorio = $directorio;	
	}
	
    function guardarEnlaceArchivo()
    {
		$this->enlaceArchivo = str_replace('\\', DIRECTORY_SEPARATOR, $this->directorio.$this->nombreArchivo).'.php';	
	}
		    
    function verificarExistencia()
    {
        file_exists($this->enlaceArchivo) ? $this->siExiste() : $this->noExiste();		
	}

    function siExiste()
    {
		$this->incluirArchivo();	
		return true;
	} 

    function noExiste()
    {	
		return false;
	} 
			
    function incluirArchivo()
    {
		require_once $this->enlaceArchivo;	
	}	
      
}
?>


<?php 

class manejadorPaginas
{
    public $pagina;
 
     function crearInstancia($objeto)
    {
		$this->pagina = new $objeto();
	}
	   
    function imprimir()
    {
		echo ($this->pagina);
	}
	
}

?>


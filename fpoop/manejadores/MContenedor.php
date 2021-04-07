<?php

class MContenedor
{

    public $container;
    public $contenido;
    public $codigoRetorno = "";

    public function __construct()
    {
      $this->crear();
    }

    function crear()
    {

      $this->etiquetaObjeto = new MObjetos();
      $this->etiquetaObjeto->crear($this->container);
      $this->etiquetaObjeto->incrustar($this->contenido);
      $this->codigoRetorno = $this->etiquetaObjeto->getCodigoRetorno();
      return $this->codigoRetorno;
	  }

}

?>

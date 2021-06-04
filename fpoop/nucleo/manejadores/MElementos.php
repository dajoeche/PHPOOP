<?php

class MElementos
{

    public $objeto;
    public $elementos;
    public $codigoRetorno;

    public function __construct()
    {
      $this->objeto = new MObjetos();
    }

    function crear($elementos)
    {
      $this->elementos = $elementos;
      is_array($elementos) ? $this->esArray() : $this->noEsArray();
      return $this->codigoRetorno;
	  }

    function esArray()
    {
      $this->objeto->crear($this->elementos);
      $this->codigoRetorno .=$this->objeto->getCodigoRetorno();
	  }

    function noEsArray()
    {
      $this->codigoRetorno = $this->elementos;
	  }

}

?>

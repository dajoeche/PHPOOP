<?php

class MEtiquetas
{

    public $nombreObjeto;
    public $etiqueta;
    public $atributos = "Default";
    public $atributosDefecto = "Default";
    public $elementos = "Default";


    public function __construct()
    {
      $this->etiqueta = new Etiquetas();
      $this->atributo = new MAtributos();
      $this->elemento = new MElementos();
    }

    public function __toString()
  	{
    	return $this->etiqueta->getCodigoRetorno();
  	}

    function crear()
    {
      $this->crearEtiqueta();
      return $this->etiqueta->getCodigoRetorno();
	  }

    function crearEtiqueta()
    {
      $this->generarAtributos();
      $this->generarElementos();
      $this->generarEtiqueta();
	  }

    function generarAtributos()
    {
      $this->atributo->configurarApertura($this->apertura);
      $this->atributo->configurarAtributosDefecto($this->atributosDefecto);
      $this->atributo->configurarAtributos($this->atributos);
      $this->apertura = $this->atributo->crearAtributos();

    }

    function generarElementos()
    {
      $this->elementos =  $this->elemento->crear($this->elementos);
    }

    function generarEtiqueta()
    {
      $this->etiqueta->setApertura($this->apertura);
      $this->etiqueta->setElementos($this->elementos);
      $this->etiqueta->setCierre($this->cierre);
      $this->etiqueta->comprobarSaltarLineaElementos();
      $this->etiqueta->crear();
    }

    function retornarCodigo()
    {
      return $this->etiqueta->getCodigoRetorno();
    }

    function configurarCodigoRetorno($codigo)
    {
      return $this->etiqueta->setCodigoRetorno($codigo);
    }

    function configurarElementos($elementos)
    {
			$this->elementos = $elementos;
		}

    function configurarAtributos($atributos)
    {
			$this->atributos = $atributos;
		}

    function configurarAtributosDefecto($atributosDefecto)
    {
			$this->atributosDefecto = $atributosDefecto;
		}
}

?>

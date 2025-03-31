<?php

class MEtiquetas
{

    public $nombreObjeto;
    public $etiqueta;
    public $atributos = "Default";
    public $atributosDefecto = "Default";
    public $atributosAdicionales = "Default";
    public $elementosDefecto = "Default";
    public $elementosAdicionales = "Default";
    public $elementos = "Default";
    private $atributo;
    private $elemento;
    


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
      $this->atributo->configurarAtributosAdicionales($this->atributosAdicionales);
      $this->apertura = $this->atributo->crearAtributos();

    }

    function generarElementos()
    {
      $this->elemento->configurarElementosDefecto($this->elementosDefecto);
      $this->elemento->configurarElementosAdicionales($this->elementosAdicionales);
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

    function configurarCodigoAdicional($codigo)
    {
      return $this->etiqueta->setCodigoAdicional($codigo);
    }

    function configurarElementos($elementos)
    {
			$this->elementos = $elementos;
		}

    function configurarElementosDefecto($elementosDefecto)
    {
    	$this->elementosDefecto = $elementosDefecto;
    }

    function configurarElementosAdicionales($elementosAdicionales)
    {
    	$this->elementosAdicionales = $elementosAdicionales;
    }

    function configurarAtributos($atributos)
    {
			$this->atributos = $atributos;
		}

    function configurarAtributosAdicionales($atributosAdicionales)
    {
			$this->atributosAdicionales = $atributosAdicionales;
		}

    function configurarAtributosDefecto($atributosDefecto)
    {
    	$this->atributosDefecto = $atributosDefecto;
    }
}

?>

<?php

class MAtributos
{
  private $atributo;
  
  public function __construct()
  {
      $this->atributo = new Atributos();
  }

  function crearAtributos()
  {
      $this->atributo->verificarExisteAtributosDefecto();
	  $this->atributo->verificarExisteAtributos();
	  $this->atributo->verificarExisteAtributosAdicionales();
	  $this->atributo->recorrerArrayAtributos();
      $this->atributo->incluirAtributos();
    return $this->atributo->getApertura();
	}

  function configurarApertura($apertura)
  {
    $this->atributo->setApertura($apertura);
  }

  function configurarAtributos($atributos)
  {
    $this->atributo->setAtributos($atributos);
  }

  function configurarAtributosDefecto($atributosDefecto)
  {
    $this->atributo->setAtributosDefecto($atributosDefecto);
  }

  function configurarAtributosAdicionales($atributosAdicionales)
  {
    $this->atributo->setAtributosAdicionales($atributosAdicionales);
  }
}

?>

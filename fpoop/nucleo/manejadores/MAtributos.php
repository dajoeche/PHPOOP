<?php

class MAtributos
{

  public function __construct()
  {
      $this->atributo = new Atributos();
  }

  function crearAtributos()
  {
    $this->atributo->verificarExisteAtributosDefecto();
	  $this->atributo->verificarExisteAtributos();
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
}

?>

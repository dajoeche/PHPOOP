<?php

class Objetos
{
  private $nombreObjeto;
  private $codigoRetorno;

  function setNombreObjeto($nombreObjeto) { $this->nombreObjeto = $nombreObjeto; }

  function getNombreObjeto() { return $this->nombreObjeto; }

  function setCodigoRetorno($codigoRetorno) { $this->codigoRetorno = $codigoRetorno; }

  function getCodigoRetorno() { return $this->codigoRetorno; }


  public function crear()
  {
    $this->instanciar();
    $this->crearObjeto();
    return $this->getCodigoRetorno();
  }

  public function instanciar()
  {
    $this->objeto = new $this->nombreObjeto();
  }

  public function crearObjeto()
  {
    $this->setCodigoRetorno($this->objeto->crear());
  }

  public function retornarCodigo()
  {
    return $this->getCodigoRetorno();
  }

}

?>

<?php

class MObjetos
{

    public $nombreObjeto;
    public $objeto;
    public $matriz;
    public $codigoRetorno = "";
    public $codigoRetornoTemporal = "";
    public $concatenador = "";
    public $caracterReemplazo = "$*";

    public function __construct()
    {
      $this->objeto = new Objetos();
    }

    public function __toString()
    {
      return $this->objeto->getCodigoRetorno();
    }

    function setNombreObjeto($nombreObjeto) { $this->nombreObjeto = $nombreObjeto; }

    function getNombreObjeto() { return $this->nombreObjeto; }

    function setCodigoRetorno($codigoRetorno) { $this->codigoRetorno .= $codigoRetorno; }

    function getCodigoRetorno() { return $this->codigoRetorno; }

    function setMatriz($matriz) { $this->matriz = $matriz; }

    function getMatriz() { return $this->matriz; }

    function configurarNombreObjeto($nombreObjeto)
    {
      $this->objeto->setNombreObjeto($nombreObjeto);
	  }

    function crear($nombreObjeto)
    {
      $this->setNombreObjeto($nombreObjeto);
      is_array($nombreObjeto) ? $this->grupoObjetos() : $this->objetoSimple();
	  }

    function grupoObjetos()
    {
      $this->setMatriz($this->nombreObjeto);
      array_walk($this->matriz, array($this,"crearObjetoArray"));
	  }

    function crearObjetoArray($elemento)
    {
      $this->setNombreObjeto($elemento);
      $this->objetoSimple();
	  }

    function objetoSimple()
    {
      $this->configurarNombreObjeto($this->nombreObjeto);
      $this->setCodigoRetorno( $this->crearObjeto());
	  }

    function crearObjeto()
    {
      return $this->objeto->crear();
	  }

    function incrustar($nombreObjeto)
    {
      $this->codigoRetornoTemporal =  $this->codigoRetorno;
      $this->codigoRetorno="";
      $this->crear($nombreObjeto);
      $this->codigoRetorno = str_replace($this->caracterReemplazo,$this->codigoRetorno.$this->concatenador,$this->codigoRetornoTemporal);
	  }

    function agregar($nombreObjeto)
    {
      $this->codigoRetornoTemporal =  $this->codigoRetorno;
      $this->codigoRetorno="";
      $this->crear($nombreObjeto);
      $this->codigoRetornoTemporal = str_replace("</script>","</script> $*",$this->codigoRetornoTemporal);
	  $this->codigoRetorno = str_replace($this->caracterReemplazo,$this->codigoRetorno.$this->concatenador,$this->codigoRetornoTemporal);
	  }

    function cambiarEstadoConcatenador()
    {
      $this->concatenador == "" ?  $this->concatenador = $this->caracterReemplazo : $this->concatenador = "";
	  }

    function habilitarBody()
    {
      $this->codigoRetorno = str_replace("&",$this->caracterReemplazo,$this->codigoRetorno);
    }

}

?>

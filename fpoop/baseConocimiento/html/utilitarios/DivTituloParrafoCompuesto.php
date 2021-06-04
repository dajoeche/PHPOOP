<?php

class DivTituloParrafoCompuesto extends DivTituloParrafo
{

   public $count = 1;
   public $funcionRetorno = "comprobarArray";
   public $arrayReemplazo = array("1*","2*","3*","4*","5*","6*","7*","8*","9*","10*","11*","12*","13*","14*","15*","16*","17*","18*","19*","20");
   public $codigoReemplazo = array();
   public $objeto;

   public function crear()
    {
        $this->contarReemplazos();
        $this->siSonObjetos();
        $this->incluirReemplazos();
        $this->crearDivTituloParrafo();
        $this->incluirReemplazos();
        return $this->objetoDiv->retornarCodigo();
    }

   public function incluirReemplazos()
    {
      $this->parrafo = str_replace(array_slice($this->arrayReemplazo,0,$this->count),$this->codigoReemplazo,$this->parrafo,$this->count);
    }

   public function contarReemplazos()
    {
      str_replace("*","&",$this->parrafo,$this->count);
    }

   public function siSonObjetos()
    {
      array_walk($this->reemplazos,array($this,$this->funcionRetorno));
    }

   public function comprobarArray($objeto)
    {
      $this->objeto = $objeto;
      is_array($objeto) ? $this->esArray() : $this->noEsArray();
    }

   public function esArray()
    {
      $instancia = new $this->objeto[0]();
      $instancia->crear();
      $this->codigoReemplazo[] .= $instancia->retornarCodigo();
    }

   public function noEsArray()
    {
      $this->codigoReemplazo[] = $this->objeto;
    }

}

?>

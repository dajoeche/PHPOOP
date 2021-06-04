<?php

class DivTituloParrafo
{
    use MDiv, MTitulo, MParrafo;

    public $codigoRetorno = "";

    public function  crear()
    {
      $this->crearDivTituloParrafo();
      return $this->objetoDiv->retornarCodigo();
    }

    public function crearDivTituloParrafo()
    {
      $this->generarTitulo();
      $this->generarParrafo();

      if (isset($this->parrafo2)) {
        $this->parrafo = $this->parrafo2;
        isset($this->atributosParrafo2) ? $this->atributosParrafo = $this->atributosParrafo2 : $cd = "";
        $this->generarParrafo();
      }

      if (isset($this->parrafo3)) {
        $this->parrafo = $this->parrafo3;
        $this->atributosParrafo = $this->atributosParrafo3;
        $this->generarParrafo();
      }

      $this->generarDiv();
    }

}

?>

<?php

class Parrafos
{
    use MParrafo;

    public $codigoRetorno = "";


    public function __construct()
    {

    }

    public function crear()
    {

      $this->generarParrafo();

      if (isset($this->parrafo2)) {
        $this->parrafo = $this->parrafo2;
        isset($this->atributosParrafo2) ? $this->atributosParrafo = $this->atributosParrafo2 : $cd = "";
        $this->generarParrafo();
        $this->atributosParrafo = "";
      }

      if (isset($this->parrafo3)) {
        $this->parrafo = $this->parrafo3;
        isset($this->atributosParrafo3) ? $this->atributosParrafo = $this->atributosParrafo3 : $cd = "";
        $this->generarParrafo();
        $this->atributosParrafo = "";
      }

      return $this->codigoRetorno;
    }

}

?>

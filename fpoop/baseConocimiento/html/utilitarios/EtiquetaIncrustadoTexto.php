<?php

class EtiquetaIncrustadoTexto
{
    use MEtiquetaIncrustadoTexto;

    public function crear()
    {
      $this->generarTextoIncrustado();
      return $this->codigoRetorno;
    }

}

?>

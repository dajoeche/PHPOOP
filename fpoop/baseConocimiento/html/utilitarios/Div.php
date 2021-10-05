<?php

class Div
{
    use MDiv;

    public function crear()
    {
      $this->desactivarModoCodigoRetorno();
      $this->generarDiv();
      return $this->codigoRetorno;
    }

}

?>

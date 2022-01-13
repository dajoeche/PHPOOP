<?php

class Submit
{
    use MSubmit;

    public $codigoRetorno = "";

    public function crear()
    {
      $this->generarSubmit();
      return $this->codigoRetorno = $this->codigoSubmit;
    }

}

?>

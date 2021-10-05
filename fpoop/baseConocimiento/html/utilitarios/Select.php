<?php

class Select
{
    use MSelect;

    public $codigoRetorno;

    public function crear()
    {
      $this->generarSelect();
      return $this->codigoRetorno;
    }


}

?>

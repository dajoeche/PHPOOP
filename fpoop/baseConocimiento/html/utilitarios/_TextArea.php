<?php

class _TextArea
{
    use MTextArea;

    public $codigoRetorno;

    public function crear()
    {
      $this->generarTextArea();
      return $this->codigoRetorno;
    }


}

?>

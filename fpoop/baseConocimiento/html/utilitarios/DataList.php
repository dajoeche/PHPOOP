<?php

class DataList
{

  use MDataList;

  public $codigoRetorno = "";

  public function crear()
  {
    $this->generarDataList();
    return $this->codigoRetorno;
  }

}

?>

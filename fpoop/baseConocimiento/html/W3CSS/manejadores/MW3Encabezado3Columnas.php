<?php

class MW3Encabezado3Columnas
{
    use MBSContenedor, MBSEncabezado, MBSColumna11, MBSColumna12, MBSColumna13, MBSFila1;

    public function crear()
    {
      $this->generarBSEncabezado();
      $this->generarBSColumna11();
      $this->generarBSColumna12();
      $this->generarBSColumna13();
      $this->generarBSFila1();
      //$this->generarBSContenedor();
      return $this->objetoBSEncabezado->retornarCodigo().$this->objetoBSFila1->retornarCodigo();
    }

}

?>

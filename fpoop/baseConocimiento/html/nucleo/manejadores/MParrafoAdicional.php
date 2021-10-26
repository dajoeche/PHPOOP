<?php

trait MParrafoAdicional
{

    use MParrafo;

    public $parrafoAdicional = "Cinque Terre";

    public function generarParrafoAdicional()
    {
      $this->parrafo = $this->parrafoAdicional;
      $this->generarParrafo();
    }

}

?>

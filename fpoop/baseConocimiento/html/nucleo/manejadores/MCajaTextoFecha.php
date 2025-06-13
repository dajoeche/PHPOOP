<?php

trait MCajaTextoFecha
{

    use MPrincipal;

    public $etiquetaCajaTexto = "CajaTextoFecha";
    public $atributosCajaTexto = "Default";
    public $CajaTexto = "Default";


    public function generarCajaTexto()
    {
      $this->configurarNombreObjeto($this->etiquetaCajaTexto);
      $this->configurarElementos($this->CajaTexto);
      $this->configurarAtributos($this->atributosCajaTexto);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>

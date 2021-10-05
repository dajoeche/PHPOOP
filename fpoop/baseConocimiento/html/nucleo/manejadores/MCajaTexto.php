<?php

trait MCajaTexto
{

    use MPrincipal;

    public $etiquetaCajaTexto = "CajaTexto";
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

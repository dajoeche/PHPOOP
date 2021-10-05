<?php

trait MBoton
{

    use MPrincipal;

    public $etiquetaBoton = "EtiquetaBotonHtml";
    public $atributosBoton = "Default";
    public $elementosBoton = "Default";


    public function generarBoton()
    {
      $this->configurarNombreObjeto($this->etiquetaBoton);
      $this->configurarElementos($this->elementosBoton);
      $this->configurarAtributos($this->atributosBoton);
      $this->codigoRetorno.=$this->generarPrincipal();
    }

}

?>

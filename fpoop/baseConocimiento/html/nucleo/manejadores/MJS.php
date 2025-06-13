<?php

trait MJS
{

    use MPrincipal;

    public $etiquetaJS = "EtiquetaScriptHtml";
    public $atributosJS = "Default";
    public $elementosJS = "Default";

    public function generarJS()
    {
		// echo htmlspecialchars($this->codigoRetorno)."..............................<br>";
      $this->configurarNombreObjeto($this->etiquetaJS);
      $this->configurarElementos($this->elementosJS);
      $this->configurarAtributos($this->atributosJS);
      $this->codigoRetorno=$this->codigoRetorno.$this->generarPrincipal();
      //echo htmlspecialchars($this->codigoRetorno);
      //echo "///////////////////<br>";
    }

}

?>

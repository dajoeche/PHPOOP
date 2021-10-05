<?php

class MenuNav
{

    public $etiquetaPrincipal = "EtiquetaNavHtml";
    public $etiquetaEnlace = "MEnlaces";
    public $funcionRetorno = "generarEnlaces";
    public $separador = " |";
    public $codigoEnlace = "";
    public $codigoRetorno = "";

    function crear()
    {
       $this->crearMenu();
       return $this->codigoRetorno;
		}

    function crearMenu()
    {
      $this->enlace = new $this->etiquetaEnlace();
      array_walk($this->itemsEnlace,array($this,$this->funcionRetorno));
      $this->items = $this->codigoEnlace;
      $this->principal = new $this->etiquetaPrincipal();
      $this->principal->configurarElementos($this->codigoEnlace);
      $this->codigoRetorno=$this->principal->crear();
		}

    function generarEnlaces($valor,$clave)
    {
       $this->enlace->configurarElementos($valor["titulo"]);
       $this->enlace->configurarHref($valor["direccion"]);
       $this->codigoEnlace .= $this->enlace->crear().$this->separador;
		}

}

?>

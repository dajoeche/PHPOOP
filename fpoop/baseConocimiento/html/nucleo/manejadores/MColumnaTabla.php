<?php

trait MColumnaTabla
{

    use MPrincipal;

    public $etiquetaColumnaTabla = "EtiquetaColumnaTablaHtml";
    public $atributosColumnaTabla = "Default";
    public $elementosColumnaTabla = "";

    public function generarColumnaTabla()
    {
      $this->configurarNombreObjeto($this->etiquetaColumnaTabla);
      $this->configurarElementos($this->elementosColumnaTabla);
      $this->configurarAtributos($this->atributosColumnaTabla);
      return $this->generarPrincipal();
    }

    public function configurarElementosColumnaTabla($columna)
    {
      //isset($columna[0]["etiqueta"]) ? print_r($columna[0]["etiqueta"]) : $cd = "";
      //print_r($columna[0]["elemento"]);
      //print_r($columna);
      //echo "----------------------------<br>";

      isset($columna[0]["elemento"]) ? $this->elementosColumnaTabla = $columna[0]["elemento"] : $this->elementosColumnaTabla = $columna;
      isset($columna[0]["etiqueta"]) ? $this->etiquetaColumnaTabla = $columna[0]["etiqueta"][0] : $cd = "";
      isset($columna["dato"]) ? $this->elementosColumnaTabla = $columna["dato"] : $cd = "";
      isset($columna["atributos"]) ? $this->atributosColumnaTabla = $columna["atributos"] : $this->atributosColumnaTabla=array();

    }
}

?>

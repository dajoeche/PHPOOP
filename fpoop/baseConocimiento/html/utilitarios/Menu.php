<?php

class Menu extends MListas
{

    public $etiquetaPrincipal = "EtiquetaDivHtml";
    public $atributos = array('class' => "menu", );
    public $elementosPrincipal = "Default";
    public $etiquetaItem = "EtiquetaDivItemHtml";
    public $atributosItem = array('class' => "menuitem", );
    public $elementosItem = "Default";
    public $funcionRetorno = "generarEnlaces";
    public $etiquetaEnlace = "MEnlaces";
    public $itemsEnlace = array(
                            array("titulo"=>"The Walk","direccion"=>"http://localhost/php/bloqueEnLinea.php"),
                            array("titulo"=>"Transport","direccion"=>"http://localhost/php/bloqueEnLinea.php"),
                            array("titulo"=>"History","direccion"=>"http://localhost/php/bloqueEnLinea.php"),
                            array("titulo"=>"Gallery","direccion"=>"http://localhost/php/bloqueEnLinea.php"),
                        );

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
      $this->tipoLista = $this->etiquetaPrincipal;
      $this->etiquetaItemLista = $this->etiquetaItem;
      $this->crearInstancias();
			$this->crearLista();
		}

    function generarEnlaces($valor,$clave)
    {
       $this->enlace->configurarElementos($valor["titulo"]);
       $this->enlace->configurarHref($valor["direccion"]);
       $this->codigoEnlace[] = $this->enlace->crear();
		}
    
}

?>

<?php


class P_CombinadosSorteo
{
	use Utilitario, MObjetoInterno, MArray;
	
	public $fecha;
	public $ayer;
	public $fechaInicio = '2025-08-01';
	public $loteria;
	public $sorteo;
	public $animal;
	public $tabla=array();
	public $M_pruebaSecuenciaSorteo;
    public $descartes;
    public $salioAyer;
    public $jaulaDiariaAlta;
    public $jaulaDiariaMedia;
    public $jaulaDiariaBaja;
    public $jaulaSorteoAlta;
    public $jaulaSorteoMedia;
    public $jaulaSorteoBaja;
    public $masSalen;
    public $banderaDescartes='OFF';
    public $banderaSalioAyer='OFF';
    public $banderaJaulaDiariaAlta='OFF';
    public $banderaJaulaDiariaMedia='OFF';
    public $banderaJaulaDiariaBaja='OFF';
    public $banderaJaulaSorteoAlta='OFF';
    public $banderaJaulaSorteoMedia='OFF';
    public $banderaJaulaSorteoBaja='OFF';
    public $color='amarillo';
    public $resultadoPorSorteo;
    public $resultadoPorDia;
    public $indice;
    public $array;
    public $tablaDescartes;
    public $temporal;
    public $titulo =  "Combinados";
    public $encabezadoTabla =  array(array(
												"Numero",
												"Nombre",
												"Descartes",
												"Salio Ayer",
												"Jaula Diaria Alta",
												"Jaula Diaria Media",
												"Jaula Diaria Baja",
												"Jaula Sorteo Alta",
												"Jaula Sorteo Media",
												"Jaula Sorteo Baja",
												"Fecha"
											  )
										);
    public $contador=0;
    public $posicion=0;
    public $objeto1;
    public $nombreBandera;
    public $objeto2;
    public $funcionObjeto1;
    public $funcionObjeto2;
    public $indiceObjeto= 1;
    public $indiceTitulo= 0;
    public $limite=89;
    public $limiteSorteo=89;
	public $limiteDiario=9;
	public $limiteMasSalen=8;
	public $criterios =[
						"buscarDescartesLineal"=>["objeto"=>'P_DescartesLineal',"funcion"=>'objetoAyerLoteriaSorteo'],
						"buscarMasSalen"=>["objeto"=>'M_MasSalenLimite',"funcion"=>'objetoAyerLoteriaSorteoLimite'],
						"buscarResultadosPorSorteo"=>["objeto"=>'M_ResultadosFechaLoteriaSorteo',"funcion"=>'objetoAyerLoteriaSorteo'],
						"buscarResultadosPorDia"=>["objeto"=>'M_ResultadosCodigoSorteo',"funcion"=>'objetoAyerLoteria'],
						"buscarSecuenciaSorteo"=>["objeto"=>'P_SecuenciaSorteo',"funcion"=>'objetoAyerLoteriaSorteo'],
						"buscarEnjauladosSorteoAlta"=>["objeto"=>'M_EnjauladosAlta',"funcion"=>'objetoAyerLoteriaSorteo'],
						"buscarEnjauladosSorteoMedia"=>["objeto"=>'M_EnjauladosMedia',"funcion"=>'objetoAyerLoteriaSorteo'],
						"buscarEnjauladosSorteoBaja"=>["objeto"=>'M_EnjauladosBaja',"funcion"=>'objetoAyerLoteriaSorteo'],
						"buscarEnjauladosDiarioAlta"=>["objeto"=>'M_EnjauladosDiarioAlta',"funcion"=>'objetoAyerLoteria'],
						"buscarEnjauladosDiarioMedia"=>["objeto"=>'M_EnjauladosDiarioMedia',"funcion"=>'objetoAyerLoteria'],
						"buscarEnjauladosDiarioBaja"=>["objeto"=>'M_EnjauladosDiarioBaja',"funcion"=>'objetoAyerLoteria'],
						"buscarSalioAyer"=>["objeto"=>'M_SalioAyerSimple',"funcion"=>'objetoAyerLoteria'],
					   ];    		    
    function ejecutar() {
		
		$this->titulo = $this->titulo.' Por Sorteo '.$this->fecha.' - '.$this->getLoteria($this->loteria).' - '.$this->getSorteo($this->sorteo);
						
		while ($this->fechaInicio < $this->fecha){
			$this->obtenerDiaAnterior();
			$this->obtenerResultadosPorSorteo();			
			$this->obtenerDescartes(); 
			$this->obtenerSalioAyer();
			$this->obtenerJaulaDiariaAlta();
			$this->obtenerJaulaDiariaMedia();
			$this->obtenerJaulaDiariaBaja();
			$this->obtenerJaulaSorteoAlta();
			$this->obtenerJaulaSorteoMedia();
			$this->obtenerJaulaSorteoBaja();
			$this->comparar();
			$this->ajustarFecha();				
			}
    }	 
 			
    public function obtenerResultadosPorSorteo() { 
		$this->resultadoPorSorteo = $this->ejecutarObjeto("buscarResultadosPorSorteo");
		$this->animal = $this->resultadoPorSorteo->tabla[0][0];
	} 
 			
    public function obtenerDescartes() { 
		$this->descartes = $this->ejecutarObjeto("buscarDescartesLineal");
	} 
 			
    public function obtenerSalioAyer() { 
		$this->salioAyer = $this->ejecutarObjeto("buscarSalioAyer");
	} 
 			
    public function obtenerJaulaDiariaAlta() { 
		$this->jaulaDiariaAlta = $this->ejecutarObjeto("buscarEnjauladosDiarioAlta");
	} 
 			
    public function obtenerJaulaDiariaMedia() { 
		$this->jaulaDiariaMedia = $this->ejecutarObjeto("buscarEnjauladosDiarioMedia");
	} 
 			
    public function obtenerJaulaDiariaBaja() { 
		$this->jaulaDiariaBaja = $this->ejecutarObjeto("buscarEnjauladosDiarioBaja");
	} 
 			
    public function obtenerJaulaSorteoAlta() { 
		$this->jaulaSorteoAlta = $this->ejecutarObjeto("buscarEnjauladosSorteoAlta");
	} 
 			
    public function obtenerJaulaSorteoMedia() { 
		$this->jaulaSorteoMedia = $this->ejecutarObjeto("buscarEnjauladosSorteoMedia");
	} 
 			
    public function obtenerJaulaSorteoBaja() { 
		$this->jaulaSorteoBaja = $this->ejecutarObjeto("buscarEnjauladosSorteoBaja");
	} 
			
    public function comparar() { 
		$this->configurarFuncionRetornoExtraerFila("recorrerObjeto");
		$this->recorrerDescartes();
		$this->recorrerSalioAyer();
		$this->recorrerJaulaDiariaAlta();
		$this->recorrerJaulaDiariaMedia();
		$this->recorrerJaulaDiariaBaja();
		$this->recorrerJaulaSorteoAlta();
		$this->recorrerJaulaSorteoMedia();
		$this->recorrerJaulaSorteoBaja();



		//echo "----------------------------------------------------------".$this->animal." - ".$this->banderaDescartes." - ".$this->banderaMasSalen." - ".$this->posicion." - ".$this->contador." - ".$this->ayer."<br>";
		$this->guardarCombinados();
		$this->banderaDescartes='OFF';
		$this->banderaSalioAyer='OFF';
		$this->banderaJaulaDiariaAlta='OFF';
		$this->banderaJaulaDiariaMedia='OFF';
		$this->banderaJaulaDiariaBaja='OFF';
		$this->banderaJaulaSorteoAlta='OFF';
		$this->banderaJaulaSorteoMedia='OFF';
		$this->banderaJaulaSorteoBaja='OFF';
		$this->contador=0;
		$this->posicion=0;
	}    
    
    function guardarCombinados() {
		$this->tabla[]= array(
								$this->animal, 
								$this->getAnimal($this->animal),
								$this->banderaDescartes,
								$this->banderaSalioAyer,
								$this->banderaJaulaDiariaAlta,
								$this->banderaJaulaDiariaMedia,
								$this->banderaJaulaDiariaBaja,
								$this->banderaJaulaSorteoAlta,
								$this->banderaJaulaSorteoMedia,
								$this->banderaJaulaSorteoBaja,
								$this->ayer
							  );
    }
    
    function recorrerDescartes() {
		$this->color = "azul";
		$this->nombreBandera="banderaDescartes";
		$this->extraerFila($this->descartes->tabla);
    }
    
    function recorrerSalioAyer() {
		$this->color = "amarillo";
		$this->nombreBandera="banderaSalioAyer";
		$this->indiceObjeto= 0;
		$this->extraerFila($this->salioAyer->tabla);
    }
    
    function recorrerJaulaDiariaAlta() {
		$this->color = "morado";
		$this->nombreBandera="banderaJaulaDiariaAlta";
		$this->indiceObjeto= 1;
		$this->extraerFila($this->jaulaDiariaAlta->tabla);
    }
    
    function recorrerJaulaDiariaMedia() {
		$this->color = "mora";
		$this->nombreBandera="banderaJaulaDiariaMedia";
		$this->indiceObjeto= 1;
		$this->extraerFila($this->jaulaDiariaMedia->tabla);
    }
    
    function recorrerJaulaDiariaBaja() {
		$this->color = "moradito";
		$this->nombreBandera="banderaJaulaDiariaBaja";
		$this->indiceObjeto= 1;
		$this->extraerFila($this->jaulaDiariaBaja->tabla);
    }
    
    function recorrerJaulaSorteoAlta() {
		$this->color = "rojo";
		$this->nombreBandera="banderaJaulaSorteoAlta";
		$this->extraerFila($this->jaulaSorteoAlta->tabla);
    }
    
    function recorrerJaulaSorteoMedia() {
		$this->color = "red";
		$this->nombreBandera="banderaJaulaSorteoMedia";
		$this->extraerFila($this->jaulaSorteoMedia->tabla);
    }
    
    function recorrerJaulaSorteoBaja() {
		$this->color = "rojito";
		$this->nombreBandera="banderaJaulaSorteoBaja";
		$this->extraerFila($this->jaulaSorteoBaja->tabla);
    }
    			
	public function recorrerObjeto($matriz) { 
		if(is_array($matriz)){
			//echo '------------------------*********************************--'.$matriz[$this->indiceObjeto1].'*****'.$this->animal.'<br>';
			if($matriz[$this->indiceObjeto]===$this->animal){
				$this->{$this->nombreBandera}=array("dato"=>"ON","atributos"=>array("class"=>$this->color, "title"=>$matriz[$this->indiceTitulo]));
			}		
		} else {
			if($matriz===$this->animal){
				$this->{$this->nombreBandera}=array("dato"=>"ON","atributos"=>array("class"=>$this->color));
			}			
		}

		
	}    
    
    function ajustarFecha() {
		$this->fecha=$this->ayer;
    }
			
}

?>

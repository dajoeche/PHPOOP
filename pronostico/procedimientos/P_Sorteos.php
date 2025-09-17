<?php


class P_Sorteos
{
	use Utilitario, MObjetoInterno, MArray;
	public $sorteo;	
	public $limite;	
	public $animal;	
	public $animalPorSorteo;	
	public $encabezadoTabla;
	public $sorteos;	
	public $tabla;	
    public $titulo =  "Sorteos";

	public $criterios =[
						"buscarUnAnimal"=>["objeto"=>'P_Sorteos1',"funcion"=>'objetoFechaLoteriaAnimal'],
						"buscarDosAnimales"=>["objeto"=>'P_Sorteos2',"funcion"=>'objetoFechaLoteriaAnimalAnimal2'],
						"buscarTresAnimales"=>["objeto"=>'P_Sorteos3',"funcion"=>'objetoFechaLoteriaAnimalAnimal2Animal3'],
						"buscarCuatroAnimales"=>["objeto"=>'P_Sorteos4',"funcion"=>'objetoFechaLoteriaAnimalAnimal2Animal3Animal4'],
						"buscarSorteos"=>["objeto"=>'P_MarcarSorteos',"funcion"=>'objetoFechaLoteria'],
						"buscarPorFechas"=>["objeto"=>'P_SorteosPorFechas',"funcion"=>'objetoFechaLoteria'],
						"buscarSalioAyer"=>["objeto"=>'P_SorteosSalioAyer',"funcion"=>'objetoFechaLoteria'],
						"buscarExtremos"=>["objeto"=>'P_SorteosExtremos',"funcion"=>'objetoFechaLoteria'],
						"buscarJaulaDiaria"=>["objeto"=>'P_SorteosJaulaDiaria',"funcion"=>'objetoFechaLoteriaLimite'],
						"buscarSecuencia"=>["objeto"=>'P_SorteosSecuencia',"funcion"=>'objetoFechaLoteria'],
						"buscarRepetido"=>["objeto"=>'P_SorteosRepetidoDiario',"funcion"=>'objetoFechaLoteria'],
						"buscarSecuenciaSorteo"=>["objeto"=>'P_SorteosSecuenciaSorteo',"funcion"=>'objetoFechaLoteria'],
						"buscarJaulaSorteo"=>["objeto"=>'P_SorteosJaulaSorteo',"funcion"=>'objetoFechaLoteria'],
						"buscarDescartes"=>["objeto"=>'P_SorteosDescartes',"funcion"=>'objetoFechaLoteria'],
						"buscarMasSalen"=>["objeto"=>'P_SorteosMasSalen',"funcion"=>'objetoFechaLoteria'],
					   ];
    function ejecutar() {
		$this->obtenerDiaAnterior(); 

		if ($this->numeroAnimal == '1'){
			$this->sorteos = $this->ejecutarObjeto("buscarUnAnimal");
			$this->titulo = $this->titulo.' 1, '.$this->getLoteria($this->loteria).', '.$this->fecha.', '.$this->getAnimal($this->animal);
		}
		
		if ($this->numeroAnimal == '2'){
			$this->sorteos = $this->ejecutarObjeto("buscarDosAnimales");
			$this->titulo = $this->titulo.' 2, '.$this->getLoteria($this->loteria).', '.$this->fecha.', '.$this->getAnimal($this->animal).', '.$this->getAnimal($this->animal2);
		}

		
		if ($this->numeroAnimal == '3'){
			$this->sorteos = $this->ejecutarObjeto("buscarTresAnimales");
			$this->titulo = $this->titulo.' 3, '.$this->getLoteria($this->loteria).', '.$this->fecha.', '.$this->getAnimal($this->animal).', '.$this->getAnimal($this->animal2).', '.$this->getAnimal($this->animal3);
		}
		
		if ($this->numeroAnimal == '4'){
			$this->sorteos = $this->ejecutarObjeto("buscarCuatroAnimales");
			$this->titulo = $this->titulo.' 4, '.$this->getLoteria($this->loteria).', '.$this->fecha.', '.$this->getAnimal($this->animal).', '.$this->getAnimal($this->animal2).', '.$this->getAnimal($this->animal3).', '.$this->getAnimal($this->animal4);
		}
		
		if ($this->numeroAnimal == '5'){
			$this->sorteos = $this->ejecutarObjeto("buscarSorteos");
			$this->titulo = $this->titulo.' Todos, '.$this->getLoteria($this->loteria).', '.$this->fecha;
		}
		
		if ($this->numeroAnimal == '6'){
			$this->sorteos = $this->ejecutarObjeto("buscarPorFechas");
			$this->titulo = $this->titulo.' Fecha, '.$this->getLoteria($this->loteria).', '.$this->fecha;
		}
		
		if ($this->numeroAnimal == '7'){
			$this->sorteos = $this->ejecutarObjeto("buscarSalioAyer");
			$this->titulo = 'Salió Ayer, '.$this->getLoteria($this->loteria).', '.$this->fecha;
		}
		
		if ($this->numeroAnimal == '8'){
			$this->sorteos = $this->ejecutarObjeto("buscarExtremos");
			$this->titulo = 'Extremos, '.$this->getLoteria($this->loteria).', '.$this->fecha;
		}
		
		if ($this->numeroAnimal == '9'){
			$this->sorteos = $this->ejecutarObjeto("buscarJaulaDiaria");
			$this->titulo = 'Enjaulados Diario, '.$this->getLoteria($this->loteria).', '.$this->fecha;
		}
		
		if ($this->numeroAnimal == '10'){
			$this->sorteos = $this->ejecutarObjeto("buscarSecuencia");
			$this->titulo = 'Secuencia, '.$this->getLoteria($this->loteria).', '.$this->fecha;
		}
		
		if ($this->numeroAnimal == '11'){
			$this->sorteos = $this->ejecutarObjeto("buscarRepetido");
			$this->titulo = 'Repetido Diario, '.$this->getLoteria($this->loteria).', '.$this->fecha;
		}
		
		if ($this->numeroAnimal == '12'){
			$this->sorteos =$this->ejecutarObjeto("buscarSecuenciaSorteo");
			$this->titulo = 'Secuencia Sorteo, '.$this->getLoteria($this->loteria).', '.$this->fecha;
		}
		
		if ($this->numeroAnimal == '13'){
			$this->sorteos = $this->ejecutarObjeto("buscarJaulaSorteo");
			$this->titulo = 'Jaula Sorteo, '.$this->getLoteria($this->loteria).', '.$this->fecha;
		}
		
		if ($this->numeroAnimal == '14'){
			$this->sorteos = $this->ejecutarObjeto("buscarDescartes");
			$this->titulo = 'Descartes, '.$this->getLoteria($this->loteria).', '.$this->fecha;
		}
		
		if ($this->numeroAnimal == '15'){
			$this->sorteos = $this->ejecutarObjeto("buscarMasSalen");
			$this->titulo = 'Mas Salen, '.$this->getLoteria($this->loteria).', '.$this->fecha;
		}
																										
		$this->encabezadoTabla=$this->sorteos->encabezadoTabla;
		$this->tabla = $this->sorteos->tabla;
	}
		
}

?>

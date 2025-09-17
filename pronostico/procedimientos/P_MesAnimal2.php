<?php

class P_MesAnimal2 extends P_MesAnimal
{
  use MArray;
  
  public $itemsTabla;
  public $mes;
  public $dia;
  public $animal;
  public $animal2;
  public $resultado;
  public $tabla;
  public $fila;
  public $bandera='OFF';
  public $bandera2='OFF';   
      
    public function setSalidas() {
		//if ($this->dia=="2025-06-21"){
			//echo $this->dia." - ".$this->bandera." - ".$this->bandera2."<br>";
		//}
		
		if ($this->bandera=='ON' && $this->bandera2=='OFF'){
			$this->salioUnaVez();
		}
		
		if ($this->bandera=='OFF' && $this->bandera2=='ON'){
			$this->salioUnaVezAnimal2();
		}
		
		if ($this->bandera=='ON' && $this->bandera2=='ON'){
			$this->salioUnaVezAnimalAnimal2();
		}
		
		if ($this->bandera=='OFF' && $this->bandera2=='OFF'){
			$this->noSalio();	
		}	
		
		if ($this->bandera=='RE' && $this->bandera2=='OFF'){
			$this->salioDosVeces();	
		}		
		
		if ($this->bandera=='OFF' && $this->bandera2=='RE'){ 
			$this->salioDosVecesAnimal2();	
		}		
		
		if ($this->bandera=='RE' && $this->bandera2=='ON'){
			$this->salioDosVecesAnimalUnaVezAnimal2();	
		}		
		
		if ($this->bandera=='ON' && $this->bandera2=='RE'){ 
			$this->salioUnaVezAnimalDosVecesAnimal2();	
		}
		
		if ($this->bandera=='RE' && $this->bandera2=='RE'){ 
			$this->salioDosVecesAnimalDosVecesAnimal2();	
		}
	}
  
    public function salioUnaVezAnimal2() {
		$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"red"));
	} 
  
    public function salioUnaVezAnimalAnimal2() {
		$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"verde"));
	} 

    public function salioDosVecesAnimal2() {
		$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"aqua"));
	} 

    public function salioDosVecesAnimalUnaVezAnimal2() {
		$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"mora"));
	} 

    public function salioUnaVezAnimalDosVecesAnimal2() {
		$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"marron"));
	} 

    public function salioDosVecesAnimalDosVecesAnimal2() {
		$this->fila[] = array("dato"=>substr($this->dia,-2),"atributos"=>array("class"=>"negro"));
	} 
			   
    public function reiniciarBandera() {
		$this->setBandera('OFF');
		$this->setBandera2('OFF');
	} 	

	    
    public function iterarResultado($resultado) {

		if ($this->dia==$resultado[1]  && $resultado[2]=== $this->animal){
			if($this->bandera=='ON'  && $resultado[2]=== $this->animal){
				$this->setBandera('RE');
			} elseif ($this->bandera='OFF' && $resultado[2]=== $this->animal) {
				$this->setBandera('ON');
			}	
		}
		
		if ($this->dia==$resultado[1] && $resultado[2]=== $this->animal2){
			//echo $resultado[1].'<br>';
			if($this->bandera2=='ON' && $resultado[2]=== $this->animal2){
				$this->setBandera2('RE');
			} elseif ($this->bandera2='OFF' && $resultado[2]=== $this->animal2) {
				$this->setBandera2('ON');
			}	
		}
	
	}   
		
    public function setBandera2($bandera2) { $this->bandera2 = $bandera2; }
    public function setAnimal($animal) { $this->animal = $animal; }
    public function setAnimal2($animal2) { $this->animal2 = $animal2; }

}

?>

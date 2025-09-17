<?php


class M_BaseLoteriaAnimalAnimal2 extends GestionarDBPronostico
{
	public $query="";	
	public $animal;		
	public $animal2;	
	public $loteria;

    function ejecutar() {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirAnimalQuery($this->animal);		
		$this->incluirAnimal2Query($this->animal2);		
		$this->incluirLoteriaQuery($this->loteria);
		$this->ejecutarQuery();
		$this->imprimirQuery();
		//$this->query = $this->queryOriginal;
		$this->close();
    }	

    
	public function setAnimal($animal) { $this->animal = $animal; }    
	public function setAnimal2($animal2) { $this->animal2 = $animal2; }    
    public function setLoteria($loteria) { $this->loteria = $loteria; }
    
}

?>

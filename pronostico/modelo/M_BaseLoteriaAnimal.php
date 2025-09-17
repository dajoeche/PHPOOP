<?php


class M_BaseLoteriaAnimal extends GestionarDBPronostico
{
	public $query="";
	public $loteria;	
	public $animal;		

     function ejecutar() {
		$this->conectar();
		$this->checarEstatusConexion();
		$this->incluirLoteriaQuery($this->loteria);
		$this->incluirAnimalQuery($this->animal);		
		$this->ejecutarQuery();
		$this->imprimirQuery();
		//$this->query = $this->queryOriginal;
		$this->close();
    }

    public function setLoteria($loteria) { $this->loteria = $loteria; }
    public function setAnimal($animal) { $this->animal = $animal; }
}

?>

<?php

class P_DescartesLineal extends P_Descartes
{
  public $temporal;
  public $listado=array('00','0','1','2','3','4','5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31','32','33','34','35','36');
 
	
    public function comparar() {
		
		for ($i = 0; $i < count($this->listado); $i++) {
			//echo $this->listado[$i].' - '.$this->animalComparar."<br>";
			if ($this->listado[$i]<>$this->animalComparar){
				//echo $this->listado[$i].' - '.$this->animalComparar."<br>";
				  $this->temporal[] = $this->listado[$i];	
			}
		}
		//$this->imprimir($this->temporal);
		$this->listado = $this->temporal;
		$this->temporal=array();
		
    }		

}

?>

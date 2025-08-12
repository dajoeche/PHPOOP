<?php

trait Utilitario
{
	public $identificadorFecha = '*';

    public function incluirFechaQuery($fecha) {
        $this->query = str_replace($this->identificadorFecha, $fecha, $this->query);	 
        //echo $this->query.'<br>';
    }	

    public function incluirSorteoQuery($sorteo) {
        $this->query = str_replace('$',$sorteo,$this->query);	 
    }	

    public function incluirLoteriaQuery($loteria) {
        $this->query = str_replace('%',$loteria,$this->query);	 
    }	

    public function incluirLimiteQuery($limite) {
        $this->query = str_replace('@',$limite,$this->query);	 
        //echo $this->query."<br>";
    }	

    public function incluirSumadeQuery($limite) {
        $this->query = str_replace('#',$limite,$this->query);	 
        //echo $this->query."<br>";
    }	

    public function incluirAnimalQuery($animal) {
		if(isset($animal)){
			$this->query = str_replace('&',$animal,$this->query);	
		}
         
        //echo $this->query."<br>";
    }	

    public function incluirAnimal2Query($animal) {
        $this->query = str_replace('!',$animal,$this->query);	 
        //echo $this->query."<br>";
    }	

    public function cambiarIndentificadorFecha($identificador) {
        $this->identificadorFecha=$identificador;	 
    }
    
    public function restaurarIndentificadorFecha() {
        $this->identificadorFecha='*';	 
    }

    public function getLoteria($loteria) {
		switch ($loteria) {
						case "LAC":
							$nombre = "Lotto Activo";
						break;
						case "LGR":
							$nombre = "La Granjita";
						break;
						case "SLP":
							$nombre = "Selva Plus";
						break;
 						case "CAZ":
							$nombre = "Cazaloton";
						break;
						case "LAI":
							$nombre = "Lotto Activo Internacional";
						break;		
						case "LTR":
							$nombre = "Lotto Rey";
						break;	
						case "RLA":
							$nombre = "Ruleta Activa";
						break;			
					}
	 return $nombre;
    }	

    public function getSorteo($sorteo) {
		switch ($sorteo) {
						case "1":
							$nombre = "08:00";
						break;
						case "2":
							$nombre = "09:00";
						break;
						case "3":
							$nombre = "10:00";
						break;
 						case "4":
							$nombre = "11:00";
						break;
						case "5":
							$nombre = "12:00";
						break;		
						case "6":
							$nombre = "01:00";
						break;	
						case "7":
							$nombre = "02:00";
						break;					
						case "8":
							$nombre = "03:00";
						break;			
						case "9":
							$nombre = "04:00";
						break;			
						case "10":
							$nombre = "05:00";
						break;			
						case "11":
							$nombre = "06:00";
						break;			
						case "12":
							$nombre = "07:00";
						break;			
						case "13":
							$nombre = "Diario";
						break;			
					}
	 return $nombre;
    }	

    public function getAnimal($animal) {
		if ($animal === "0"){
			$animal="37";
		}
		switch ($animal) {
						case "00":
							$nombre = "Ballena";
						break;
						case "37":
							$nombre = "Delfin";
						break;
						case "1":
							$nombre = "Carnero";
						break;
 						case "2":
							$nombre = "Toro";
						break;
						case "3":
							$nombre = "Ciempies";
						break;		
						case "4":
							$nombre = "Alacran";
						break;	
						case "5":
							$nombre = "Leon";
						break;					
						case "6":
							$nombre = "Rana";
						break;			
						case "7":
							$nombre = "Perico";
						break;			
						case "8":
							$nombre = "Raton";
						break;			
						case "9":
							$nombre = "Aguila";
						break;			
						case "10":
							$nombre = "Tigre";
						break;			
						case "11":
							$nombre = "Gato";
						break;			
						case "12":
							$nombre = "Caballo";
						break;			
						case "13":
							$nombre = "Mono";
						break;			
						case "14":
							$nombre = "Paloma";
						break;			
						case "15":
							$nombre = "Zorro";
						break;			
						case "16":
							$nombre = "Oso";
						break;			
						case "17":
							$nombre = "Pavo";
						break;			
						case "18":
							$nombre = "Burro";
						break;			
						case "19":
							$nombre = "Chivo";
						break;			
						case "20":
							$nombre = "Cochino";
						break;			
						case "21":
							$nombre = "Gallo";
						break;			
						case "22":
							$nombre = "Camello";
						break;			
						case "23":
							$nombre = "Cebra";
						break;			
						case "24":
							$nombre = "Iguana";
						break;			
						case "25":
							$nombre = "Gallina";
						break;			
						case "26":
							$nombre = "Vaca";
						break;			
						case "27":
							$nombre = "Perro";
						break;			
						case "28":
							$nombre = "Zamuro";
						break;			
						case "29":
							$nombre = "Elefante";
						break;			
						case "30":
							$nombre = "Caiman";
						break;			
						case "31":
							$nombre = "Lapa";
						break;			
						case "32":
							$nombre = "Ardilla";
						break;			
						case "33":
							$nombre = "Pescado";
						break;			
						case "34":
							$nombre = "Venado";
						break;			
						case "35":
							$nombre = "Jirafa";
						break;			
						case "36":
							$nombre = "Culebra";
						break;						
					}
	 return $nombre;
    }	


    public function getPosicionAnimal($animal) {
		if ($animal === "0"){
			$animal="37";
		}
		switch ($animal) {
						case "00":
							$nombre = "Centro D";
						break;
						case "37":
							$nombre = "Centro A";
						break;
						case "1":
							$nombre = "Lateral Inferior D";
						break;
 						case "2":
							$nombre = "Lateral Inferior A";
						break;
						case "3":
							$nombre = "Semiesquina Superior C";
						break;		
						case "4":
							$nombre = "Semiesquina Superior F";
						break;	
						case "5":
							$nombre = "Esquina Inferior Sector C";
						break;					
						case "6":
							$nombre = "Esquina Inferior Sector F";
						break;			
						case "7":
							$nombre = "Centro Inferior B";
						break;			
						case "8":
							$nombre = "Centro Inferior E";
						break;			
						case "9":
							$nombre = "Semiesquina Superior A";
						break;			
						case "10":
							$nombre = "Semiesquina Superior D";
						break;			
						case "11":
							$nombre = "Semiesquina Superior B";
						break;			
						case "12":
							$nombre = "Semiesquina Inferior E";
						break;			
						case "13":
							$nombre = "Semiesquina Inferior D";
						break;			
						case "14":
							$nombre = "Semiesquina Inferior A";
						break;			
						case "15":
							$nombre = "Semiesquina Superior C";
						break;			
						case "16":
							$nombre = "Centro Superior F";
						break;			
						case "17":
							$nombre = "Esquina Superior Sector B";
						break;			
						case "18":
							$nombre = "Esquina Superior Sector E";
						break;			
						case "19":
							$nombre = "Centro Superior E";
						break;			
						case "20":
							$nombre = "Centro Superior B";
						break;			
						case "21":
							$nombre = "Semiesquina Inferior F";
						break;			
						case "22":
							$nombre = "Semiesquina Inferior C";
						break;			
						case "23":
							$nombre = "Esquina Superior Sector F";
						break;			
						case "24":
							$nombre = "Esquina Superior Sector C";
						break;			
						case "25":
							$nombre = "Esquina Superior Sector D";
						break;			
						case "26":
							$nombre = "Esquina Superior Sector A";
						break;			
						case "27":
							$nombre = "Lateral Superior D";
						break;			
						case "28":
							$nombre = "Lateral Superior A";
						break;			
						case "29":
							$nombre = "Esquina Inferior Sector E";
						break;			
						case "30":
							$nombre = "Esquina Inferior Sector B";
						break;			
						case "31":
							$nombre = "Semiesquina Superior E";
						break;			
						case "32":
							$nombre = "Semiesquina Superior B";
						break;			
						case "33":
							$nombre = "Centro Inferior F";
						break;			
						case "34":
							$nombre = "Centro Inferior C";
						break;			
						case "35":
							$nombre = "Esquina Inferior Sector A";
						break;			
						case "36":
							$nombre = "Esquina Inferior Sector D";
						break;						
					}
	 return $nombre;
    }	

    public function getAyer($fecha) { 
		$date = new DateTime($fecha);
		$date->modify("-1 day");
		$ayer = $date->format("Y-m-d");
		return $ayer;
    }

    public function obtenerDiaAnterior() {
		$this->ayer = $this->getAyer($this->fecha);
	}
	
}
?>

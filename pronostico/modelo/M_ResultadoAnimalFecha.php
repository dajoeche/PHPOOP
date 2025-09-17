<?php


class M_ResultadoAnimalFecha extends M_BaseLoteria
{
	public $query="
					SELECT 
							* 
					FROM 
							`resultados2025` 
					where 
							day(fecha) = animal and 
							animal <> '-' and
							codigoLoteria = '%'; ";			
}

?>

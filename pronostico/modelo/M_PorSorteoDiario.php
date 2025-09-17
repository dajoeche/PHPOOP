<?php


class M_PorSorteoDiario extends M_BaseLoteriaSorteo
{
	public $query="SELECT 
							animal, 
							nombre, 
							sumade, 
							color, 
							posicion, 
							sector, 
							fila, 
							fecha,
        COALESCE( (
         SELECT 
            	DATEDIFF (R.fecha,max(c.fecha))   
          from 
            	resultados2025 as c 
          WHERE 
            	c.animal = R.animal and 
            	`fecha` < R.fecha and
      			`codigoLoteria`= '%'
           group by animal),
 (
         SELECT 
            	DATEDIFF (R.fecha, '2025-01-02')   
)                
                
                ) as DiasSinSAlir 
				   FROM 
						`resultados2025` as R, 
						 animal 
				   WHERE 
						animal = numero  AND 
						`codigoLoteria` = '%'  AND 
						`codigoSorteo` = '$'
				   order by 
							fecha desc; ";	
}

?>

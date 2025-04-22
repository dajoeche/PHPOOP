<?php
$fecha='2025-04-21';
include ("ObtenerPagina.php");
$obtenerPagina = new ObtenerPagina($fecha);


/*

//SELECT `resultados`.fecha, `resultados`.`animal`, `animal`.`nombre`, `animal`.`posicion`, `animal`.`color`,`animal`.`sector` FROM `resultados`, `animal` WHERE `resultados`.`animal` = `animal`.`numero` and `codigoSorteo` = '3'; 
//SELECT COUNT(animal) as Repetidos, R.animal, A.nombre FROM resultados AS R, animal as A where A.numero = R.animal and month(fecha)= '04' GROUP BY R.animal order by Repetidos DESC;

//SELECT * FROM `resultados` WHERE `fecha`='2025-01-28' or `fecha`='2025-02-01' or `fecha`='2025-03-02' or `fecha`='2025-03-08'; 

SELECT DATEDIFF ("2025-04-19",max(fecha )) as dias_sin_salir, max(fecha), R.animal, A.nombre FROM resultados2025 AS R, animal as A where A.numero = R.animal and month(fecha)= '04' and `codigoLoteria`= 'LAC' GROUP BY R.animal order BY dias_sin_salir DESC;


SELECT COUNT(animal) as Repetidos, R.animal, A.nombre, max(fecha), DATEDIFF ("2025-04-21",max(fecha )) as dias_sin_salir FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= 'LAC' and `codigoSorteo` = '1' GROUP BY R.animal order by Repetidos DESC;

SELECT COUNT(animal) as Repetidos, R.animal, A.nombre, max(fecha), DATEDIFF ("2025-04-21",max(fecha )) as dias_sin_salir, a.sector FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= 'LAC' and `codigoSorteo` = '1' and `fecha`<'2025-04-21' GROUP BY R.animal order by Repetidos DESC;  
*/


?>


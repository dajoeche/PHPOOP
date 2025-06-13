<?php
date_default_timezone_set('America/Caracas');
$fecha=date('Y-m-d');
//$fecha='2025-06-12';
include ("ObtenerPagina.php");
$obtenerPagina = new ObtenerPagina($fecha);


/*

//SELECT `resultados`.fecha, `resultados`.`animal`, `animal`.`nombre`, `animal`.`posicion`, `animal`.`color`,`animal`.`sector` FROM `resultados`, `animal` WHERE `resultados`.`animal` = `animal`.`numero` and `codigoSorteo` = '3'; 
//SELECT COUNT(animal) as Repetidos, R.animal, A.nombre FROM resultados AS R, animal as A where A.numero = R.animal and month(fecha)= '04' GROUP BY R.animal order by Repetidos DESC;

//SELECT * FROM `resultados` WHERE `fecha`='2025-01-28' or `fecha`='2025-02-01' or `fecha`='2025-03-02' or `fecha`='2025-03-08'; 

SELECT DATEDIFF ("2025-04-19",max(fecha )) as dias_sin_salir, max(fecha), R.animal, A.nombre FROM resultados2025 AS R, animal as A where A.numero = R.animal and month(fecha)= '04' and `codigoLoteria`= 'LAC' GROUP BY R.animal order BY dias_sin_salir DESC;


SELECT COUNT(animal) as Repetidos, R.animal, A.nombre, max(fecha), DATEDIFF ("2025-04-21",max(fecha )) as dias_sin_salir FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= 'LAC' and `codigoSorteo` = '1' GROUP BY R.animal order by Repetidos DESC;

SELECT COUNT(animal) as Repetidos, R.animal, A.nombre, max(fecha), DATEDIFF ("2025-04-21",max(fecha )) as dias_sin_salir, a.sector FROM resultados2025 AS R, animal as A where A.numero = R.animal and `codigoLoteria`= 'LAC' and `codigoSorteo` = '1' and `fecha`<'2025-04-21' GROUP BY R.animal order by Repetidos DESC;  
---------------------------------------------------------------------------------------
SELECT COUNT(r.animal) as Repetidos, r.animal, a.nombre, a.sector
FROM 
(SELECT
    *
FROM
    resultados2025
WHERE 
`codigoLoteria`='LAC' 
and `animal`= '20') as mis, resultados2025 as r, animal as a
where 
mis.fecha = r.fecha and 
a.numero = r.animal and
r.codigoLoteria = 'LAC'
GROUP BY R.animal order by Repetidos DESC;
--------------------------------------------------------------------------------------

SELECT r.animal, r.fecha FROM (SELECT * FROM resultados2025 WHERE `codigoLoteria`='LAC' and `animal`= '1') as mis, resultados2025 as r, animal as a where mis.fecha = r.fecha and a.numero = r.animal and r.codigoLoteria = 'LAC' and r.animal = '12'; 


SELECT COUNT(r.animal) as Repetidos, r.animal, a.nombre, a.sector FROM (SELECT `fecha`,`animal`,`codigoLoteria`,`codigoSorteo` FROM resultados2025 WHERE `codigoLoteria`='LAC' and `animal`= '28' and fecha < '2025-05-01' and `codigoSorteo`='1') as mis, resultados2025 as r, animal as a where (mis.fecha = r.fecha and a.numero = r.animal and r.codigoLoteria = 'LAC' and mis.`codigoSorteo` = r.`codigoSorteo`-1) or (mis.fecha = r.fecha and a.numero = r.animal and r.codigoLoteria = 'LAC' and mis.`codigoSorteo` = r.`codigoSorteo`-2) or (mis.fecha = r.fecha and a.numero = r.animal and r.codigoLoteria = 'LAC' and mis.`codigoSorteo` = r.`codigoSorteo`-3) GROUP BY R.animal order by Repetidos DESC; 

Mas salidos el que sale un animal
SELECT count(animal) as repetido, animal, a.nombre, sector, fila, MAX(fecha) FROM resultados2025 as r inner join animal as a on a.numero = r.animal WHERE `fecha` IN (SELECT DISTINCT(fecha) FROM resultados2025 where `animal`='19' and `codigoLoteria`='LAC') and codigoLoteria='LAC' and `fecha`< '2025-05-17' GROUP BY animal ORDER BY `repetido` DESC; 

*/


?>


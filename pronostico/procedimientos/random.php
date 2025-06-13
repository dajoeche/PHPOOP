<?php
srand(14);
echo rand(1, 31), "\n";

srand(2);
echo rand(1, 12), "\n";

/*

//SELECT `resultados`.fecha, `resultados`.`animal`, `animal`.`nombre`, `animal`.`posicion`, `animal`.`color`,`animal`.`sector` FROM `resultados`, `animal` WHERE `resultados`.`animal` = `animal`.`numero` and `codigoSorteo` = '3'; 
//SELECT COUNT(animal) as Repetidos, R.animal, A.nombre FROM resultados AS R, animal as A where A.numero = R.animal and month(fecha)= '04' GROUP BY R.animal order by Repetidos DESC;

//SELECT * FROM `resultados` WHERE `fecha`='2025-01-28' or `fecha`='2025-02-01' or `fecha`='2025-03-02' or `fecha`='2025-03-08'; 
*/

//SELECT COUNT(animal) as Repetidos, R.animal, A.nombre FROM resultados2025 AS R, animal as A where A.numero = R.animal and month(fecha)= '04' and `codigoLoteria` = "LAC" and DAYNAME(fecha) = "Saturday" GROUP BY R.animal order by Repetidos DESC; 
?>


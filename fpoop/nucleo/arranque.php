<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require "/var/www/html/php/fpoop/nucleo/AutoCargarClases.php";
require "/var/www/html/php/fpoop/interfaces/IAutoCargarClases.php";
require "/var/www/html/php/fpoop/config/CargarClasesFpoop.php";
require "/var/www/html/php/proyecto/config/CargarClasesProyecto.php";
new CargarClasesFpoop();
new CargarClasesProyecto();
?>

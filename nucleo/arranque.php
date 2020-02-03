<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require "/var/www/html/php/nucleo/AutoCargarClases.php";
require "/var/www/html/php/interfaces/IAutoCargarClases.php";
require "/var/www/html/php/config/CargarClases.php";
new CargarClases();
?>

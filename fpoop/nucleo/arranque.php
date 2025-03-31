<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require "../fpoop/nucleo/AutoCargarClases.php";
require "../fpoop/interfaces/IAutoCargarClases.php";
require "../config/CargarClasesFpoop.php";
require "../proyecto/config/CargarClasesProyecto.php";
new CargarClasesFpoop();
new CargarClasesProyecto();
?>

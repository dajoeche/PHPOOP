<?php
define("PATH","cursoCSSW3S");
define("PATHMENU","http://localhost/php/".PATH."/paginas/");
define("PATHDIRECTORIO","/var/www/html/php/".PATH);
define("PATHDIRECTORIOELEMENTOS","/var/www/html/php/".PATH."/vistas/elementosPaginas");
define("PATHENLACEJS","../../../assets/cursoCSSW3S/js/");
define("PATHENLACECSS","../../../assets/cursoCSSW3S/css/");
define("PATHIMAGES","../../../assets/cursoCSSW3S/images/");

error_reporting(E_ALL);
ini_set('display_errors', '1');
require "/var/www/html/php/fpoop/nucleo/AutoCargarClases.php";
require "/var/www/html/php/fpoop/interfaces/IAutoCargarClases.php";
require "/var/www/html/php/fpoop/config/CargarClasesFpoop.php";
require PATHDIRECTORIO."/config/CargarClasesProyecto.php";
new CargarClasesFpoop();
new CargarClasesProyecto();
?>

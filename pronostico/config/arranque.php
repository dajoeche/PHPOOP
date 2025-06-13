<?php
define("PATH","pronostico");
define("PATHMENU","http://localhost//phpoop/".PATH."/index.php?ir=");
define("PATHDIRECTORIO","../".PATH);
define("PATHDIRECTORIOELEMENTOS","../".PATH."/vistas/elementosPaginas");
define("PATHENLACEJS","../assets/".PATH."/js/");
define("PATHENLACECSS","../assets/".PATH."/css/");
define("PATHIMAGES","../assets/".PATH."/images/");
define("PATHINDEX","http://localhost/phpoop/".PATH."/");
define("INDEX","V_Introduction");

error_reporting(E_ALL);
ini_set('display_errors', '1');
require "../fpoop/nucleo/AutoCargarClases.php";
require "../fpoop/interfaces/IAutoCargarClases.php";
require "../fpoop/config/CargarClasesFpoop.php";
require PATHDIRECTORIO."/config/CargarClasesProyecto.php";
new CargarClasesFpoop();
new CargarClasesProyecto();
?>

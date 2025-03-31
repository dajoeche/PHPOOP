<?php
define("PATH","cursoCSSW3S");
define("PATHMENU","http://localhost//phpoop/".PATH."/index.php?ir=");
define("PATHDIRECTORIO","../".PATH);
define("PATHDIRECTORIOELEMENTOS","../".PATH."/vistas/elementosPaginas");
define("PATHENLACEJS","../../../assets/cursoCSSW3S/js/");
define("PATHENLACECSS","../../../assets/cursoCSSW3S/css/");
define("PATHIMAGES","../../../assets/cursoCSSW3S/images/");
define("PATHINDEX","http://localhost/phpoop/cursoCSSW3S/");
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

<?php
include "/var/www/html/php/cursoCSSW3S/config/arranque.php";
isset($_GET["ir"]) ? $obj = new IManejadorPaginas($_GET["ir"]) : $obj = new IManejadorPaginas(INDEX);
?>

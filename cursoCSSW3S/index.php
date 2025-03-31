<?php
include ("config/arranque.php");
isset($_GET["ir"]) ? $obj = new IManejadorPaginas($_GET["ir"]) : $obj = new IManejadorPaginas(INDEX);
?>

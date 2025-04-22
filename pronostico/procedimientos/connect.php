
<?php
$mysqli = new mysqli("localhost", "root", "L4v1d43ndb**01", "animalitos");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "\n";

$resultado = $mysqli->query("SELECT * FROM categoria ORDER BY codigoCategoria ASC");
echo "<pre>";
//print_r($resultado->fetch_assoc());
while ($fila = $resultado->fetch_assoc()) {
    echo " id = " . $fila['codigoCategoria'] ." "
		          .$fila['categoria']." "
		          .$fila['filaUno']." "
		          .$fila['filaDos']." "
		          .$fila['filaTres']." "
		          .$fila['filaCuatro']." "
		          .$fila['filaCinco']." "
		          .$fila['filaSeis']." "
		          .$fila['filaSiete']." "
		          . "\n";
}
echo "</pre>";

$mysqli->close();
?>

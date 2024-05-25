<?php
require("data/data.php");
$id = $_GET['id'];

$articulo = getDataById($id);

echo "<h2>{$articulo->titulo}</h2>";
echo "<img src='data/img/".$articulo->imagen."' width='65%'>";
echo "<p>{$articulo->detalle}</p>";
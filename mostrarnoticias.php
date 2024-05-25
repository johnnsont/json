<?php
require "data/data.php";
$noticias = getData();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias Actuales</title>
</head>
<body>
    <h1>Noticias Avtual</h1>
    <table border="1" width="90%" aling="center">
        <tr>
            <td>Id</td>
            <td>Titulo</td>
            <td>Foto</td>    
            <td>ver Detalle</td>   
        </tr>
   
        <?php
   // var_dump($noticias);
    //print_r($noticias);
    foreach ($noticias as $noticia){
        echo "<tr>";
        echo "<td>".$noticia->id."</td>"; // $noticia['id']
        echo "<td>".$noticia->titulo."</td>"; // $noticia['titulo']
       // echo "<td>".$noticia->detalle."</td>"; // $noticia['detalle']
        echo "<td> <img src='./data/img/".$noticia->imagen."' width='120px'></td>"; // $noticia['imagen']
        echo "<td> <a href='detalle.php?id=".$noticia->id."'> Ver mas...</a></td>";
        echo "<tr>";
    }

    ?>
    </table>  
</body>
</html>
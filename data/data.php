<?php
function getData(){
    return json_decode(file_get_contents(__DIR__."/noticia.json"),false);
    // true : convierte en un array asociativo
    // false : convierte en objeto

}
function getDataById($id){
    $datos = getData();
    $reg = null;
    foreach ($datos as $d){
        if($d->id ==$id)
        $reg = $d;
    }
    return $reg;
}
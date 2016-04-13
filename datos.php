<?php

session_start();

if (isset($_SESSION["HM"])){
    $hm=$_SESSION["HM"];
}else{
    $hm="No hay datos de sesión";
}
$hm=$_SESSION["HM"];

echo $hm;
?>

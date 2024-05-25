<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Trabajo Practico N° 2</title> 
  </head>    
 <?php
   $tiempo = $_GET ["tiempo"];
   if($tiempo < 0){
    echo " No es posible hacer el calculo con numero negativo.";
   }  else {
    $distancia = $tiempo * 300000;
   echo "<b>Resolucion de Ejercicio N 19</b><br>";
   echo "<br>";
   echo " La distancia que recorrera en $tiempo segundos es: $distancia km.";
   }
 ?>
<html>
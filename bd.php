<?php

$servidor= "localhost"; //127.0.0.1
$baseDeDatos="app";
$user="root";
$password="";

try{

$conexion=new PDO("mysql:host=$servidor;dbname=$baseDeDatos", $user, $password);

}catch(Exception $e){

    echo $e->getMessage();
}

?>
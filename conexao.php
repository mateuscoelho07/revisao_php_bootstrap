<?php

// // Conexão (MySql)

// $host = "localhost";
// $user = "root";
// $pass = "";
// $dbname = "cadastro";


// try{
   

    
//     $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

// }  catch(PDOException $err){
    
// }

// Conexão (Postgre)

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "cadastro";


try{
   

    
    $conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

}  catch(PDOException $err){
    
}
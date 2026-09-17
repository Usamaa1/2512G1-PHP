<?php



try {


// $connection = new PDO("mysql:host=localhost;dbname=2512G1", "root","");
// echo "Database connected sucessfully!  ";


    $connect = new PDO("mysql:host=localhost;dbname=2512G1","root","");

    echo "Database connected sucessfully!";


} catch (\Throwable $th) {
    throw $th;
}







?>
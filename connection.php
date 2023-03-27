<?php
    //Define constants
    define("HOST", "localhost");
    define("USER", "root");
    define("PASSWORD", "");
    define("DATABASE", "free_techno_banking");

    //Connection STring
    try{
        $db_conn = new mysqli(HOST, USER, PASSWORD, DATABASE);

        if($db_conn -> connect_error){
            die("The has been an error connection to database!: ".$db_conn->connect_error);
        }
    }catch(Exception $e){
        die("The has been an exception: ".$e);
    }
   




?>
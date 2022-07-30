<?php
    //Start Session
    session_start();


    //Create Constants to store Non Repeating Values
    define('SITEURL', 'http://localhost:8080/food-order/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-order');

    //$conn = mysqli_connect('localhost', 'username', 'password') or die(mysqli_error());
    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); //Database Connenction
    // $db_select = mysqli_select_db($conn, 'DBNAME') or die(mysqli_error()); 
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //Selecting Database
?>
<?php
    //connecting to db
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "banking System";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Sorry! Cannot connect to database right now");
    }

?>

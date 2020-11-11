<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "prak";
    $connect = mysqli_connect($host, $username, $password, $database);

    if(!$connect){
        echo "Connecting Failed";
    }

?>
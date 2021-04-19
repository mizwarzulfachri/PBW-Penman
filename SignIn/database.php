<?php 
    $sname= "localhost";
    $uname= "root";
    $password= "";

    $db_name = "user";

    //$conn = mysqli_connect($sname, $uname, $password, $db_name);

    $conn = new mysqli("localhost", "root", "", "penman_users");

    if ($conn) {
        echo "Connection succeeded\n";
    } else {
        echo "Connection failed\n";
    }
?>
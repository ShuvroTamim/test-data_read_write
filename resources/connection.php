<?php
    $server_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "phoneshop";

    // Create connection
    $conn = new mysqli($server_name, $user_name, $password, $db_name);

    // Connection check
    /*if ($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }
    // else {
    //     echo "Connected Successfully.";
    // }*/

    // Table Creating
    // $sql = $conn->query("CREATE TABLE model_info(
    //     `ID` INT(10) primary key not null,
    //     `Model Name` varchar(50) not null,
    //     `Price` FLOAT(25) not null,
    //     `Quantity` INT(20)
    // )");

    // if ($sql === true) {
    //     echo "Table is created";
    // } else {
    //     echo "Error creating Table: " . $conn->error;
    // }
?>
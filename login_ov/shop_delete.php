<?php

if ( isset($_GET["id"]) ){
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "optimist_db";

    // create connection 
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM subscribers_t WHERE id=$id";
    $connection->query($sql);


}

header("location: ./log_home.php");
exit;

?>

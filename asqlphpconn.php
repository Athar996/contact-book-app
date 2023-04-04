<?php

$servername= "localhost";
$username = "root";
$password = "";
$database= "contactbook";


$conn = mysqli_connect($servername,$username,$password,$database);

if($conn->connect_error)
{
    die ("sorry failed to connect". mysqli_connect_error());
    // echo "failed to connect";
}
else
{
    // $stmt = $conn->prepare("create database form");
    // echo "db created";

    // $stmt = $conn->prepare("drop database form");
    // echo "db dropped";

    // $stmt->execute();





     // $stmt = $conn->prepare("CREATE DATABASE form ");
    // $stmt->execute();
    // echo " database formed";

        // $stmt1 = $conn->prepare("USE DATABASE form");
        // $stmt1->execute();

                // $stmt2 = $conn->prepare("CREATE TABLE details
                // {
                //     fname VARCHAR(100),
                //     lname VARCHAR(100),
                //     numb int(100),
                //     mail varchar(100)
                // }" );
                // $stmt2->execute();
                // echo "table created";
}
?>
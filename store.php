<?php
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$num = $_GET['num'];
$mail = $_GET['mail'];
$database= "contactbook";
$servername= "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn->connect_error)
{
    echo "failed to connect";
}
else
{
        if (isset($_GET['fname']))
                {                     
                    $stmt3 = $conn->prepare("INSERT INTO details (FirstName,LastName,Number,Mail)
                    VALUES (?,?,?,?)");
                    $stmt3->bind_param("ssis",$fname,$lname,$num,$mail);
                    $stmt3->execute();
                    
                    echo  '<script> 
                                alert("Data saved Successfully")
                                window.location.replace("index.html");
                                </script>';
                    
                }  
                
    $stmt3->close();
    $conn->close();
}

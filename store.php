<?php
require 'asqlphpconn.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$num = $_POST['num'];
$mail = $_POST['mail'];
        if (isset($_POST['fname']))
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

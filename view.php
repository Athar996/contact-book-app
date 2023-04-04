<?php
    require 'asqlphpconn.php';
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
        $firstname = $_POST['delname'];
        $delqry = "Delete from details where firstname='$firstname'";
        $delrun = mysqli_query($conn, $delqry);
        if(mysqli_affected_rows($conn)>0)
        {
            echo  '<script> 
                                alert("Contact Deleted")
                    </script>';
        }
        else
        {
            echo  '<script> 
                        alert("Mis-match firstname PLease try again")
                    </script>';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Display contact</title>
</head>

<body>
    <div class="viewcontparent">
        <h1>Contact list</h1>
        <div class="cont">
            <?php
            $qry = "SELECT * FROM contactbook.details;";
            $run = mysqli_query($conn, $qry);
            
            while ($array = mysqli_fetch_array($run)) 
            {
                echo "Firstname:- ", $array[0], "<br>";
                echo "Lastname:- ", $array[1], "<br>";
                echo "Number:- ",  $array[2], "<br>";
                echo "Mail-id:- ", $array[3], "<br><br>";
            }
            ?>
        </div>
        <div class="options">
            <h2> <a href="add.html">Add some more contacts?</a></h2>
            <div class="delete" onclick="del()">
                <h2>Delete contact?</h2>
                <form action="" method="POST">
                    <input type="text" placeholder="Firstname" name="delname" id="delete" hidden>
                    <input type="submit" id="delbtn" value="Delete" hidden>
                </form>
            </div>
        </div>
    </div>


    
</body>
<script>
    function del()
    {
        document.getElementById("delete").removeAttribute("hidden");
        document.getElementById("delbtn").removeAttribute("hidden");
    }
</script>
</html>

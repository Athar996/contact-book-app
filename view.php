<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>display contact</title>
</head>

<body>
    <div class="viewcontparent">
        <h2>Displaying contact list</h2>
        <div class="cont">
            <?php
            $database = "contactbook";
            $servername = "localhost";
            $username = "root";
            $password = "";

            $conn = mysqli_connect($servername, $username, $password, $database);
            $qry = "SELECT * FROM contactbook.details;";
            $run = mysqli_query($conn, $qry);

            while ($array = mysqli_fetch_array($run)) {
                echo "Firstname:- ", $array[0], "<br>";
                echo "Lastname:- ", $array[1], "<br>";
                echo "Number:- ",  $array[2], "<br>";
                echo "Mail-id:- ", $array[3], "<br><br>";
            }
            ?>
        </div>
       <h2> <a href="add.html">Want to add some more contacts?</a></h2>
    </div>




    <!-- 
 <table>
        <tr>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Number</th>
            <th>E-mail Id </th>
        </tr> -->


        <!-- ?> -->
        <!-- <table>
            <tr>
                <td>
                <?php echo $array[0] ?>
                </td>
                <td>
                    <?php echo $array[1] ?>
                </td>
                <td>
                    <?php echo $array[2] ?>
                </td>
                <td>
                    <?php echo $array[3] ?>
                </td>
            </tr>
    </table>

<?php
// }
?> --> 






</body>
</html>
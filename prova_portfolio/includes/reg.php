<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="reg.css">
</head>

<body>
<?php

        if(isset($_POST['submit'])){

            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if(!$con){
                die("Connection failed: " . mysqli_connect_error());
            }
            $con= mysqli_connect('127.0.0.1:3307', 'portfolio', '','root', 3307);

            $insert_query = "INSERT INTO reg_table (username, email, password)";
            $insert_query .= "VALUES('$username', '$email', '$password')";

            $insert = mysqli_query($con, $insert_query);

            if(!$insert){
                die("Not insert". mysqli_error($con));
            }
            mysqli_close($con);
        }

    ?>
    


    <div class="container">
        <h2>User Registration Form</h2>

        <form action="reg.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

</body>

</html>
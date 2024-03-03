<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link rel="stylesheet" href="table.css">
</head>

<body>

    <?php

    $connection = mysqli_connect('127.0.0.1:3307', 'root', '', 'portfolio');

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $show_query = "SELECT * FROM contact";
    $show = mysqli_query($connection, $show_query);
    $count =  mysqli_num_rows($show);

    if ($count > 0) {
    ?>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
    <?php

        while ($row = mysqli_fetch_assoc($show)) {
            
            $id =  $row["id"];
            $username =  $row["username"];
            $email =  $row["email"];
    ?>

        <tbody>
            <tr>
                <td><?php echo $id;?></td>
                <td><?php echo $username;?></td>
                <td><?php echo $email;?></td>
                <td><a href="edit.php?id=<?php echo $id?>">Update</a> || <a href="delete.php?id=<?php echo $id?>">Delete</a></td>
            </tr>
        </tbody>

    <?php
        }
    ?>
    </table>
    <?php
    } else {
        echo "No data in database.";
    }
    mysqli_close($connection);
    ?>


</body>

</html>
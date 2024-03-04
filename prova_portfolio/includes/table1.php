<?php
// Assume this is the beginning of your PHP file
include 'config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="table.css">

</head>
<body>


<h2>Course List</h2>
<table style="width: 80%" border="1">
<tr>
                <th>ID</th>
                <th>Link</th>
                <th>Image</th>
                <th>Edit || Delete</th>

            </tr>
            <?php
            $qry="select * from `courses`";
            $run=$con->query($qry);
            if($run->num_rows >0)
            {
                while ($row=$run->fetch_assoc())
                {
                    $id=$row['id'];
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['link'] ?></td>
                        <td><?php echo $row['icon'] ?></td>
                        <td>
                            <a href="edit1.php?id=<?php echo $id;?>">Edit</a>
                            <a href="delete1.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure?')">Delete</a>

                </tr>
                <?php
                }
            }
            ?>
</table>
             
</body>
</html>
<?php
        if(isset($_POST['send_message'])){
          global $con;
          $link = mysqli_real_escape_string($con, $_POST['link']);
        $icon= mysqli_real_escape_string($con, $_POST['icon']);

          $contact = "INSERT INTO `courses` (`link`, `icon`) VALUES ('$link', '$icon')";
          mysqli_query($con, $contact);
        }
      ?>
<br>
<h4>Add New Courses:</h4>
<form method="post" >
                    
                    <label>Link: </label>
                    <input type="text" name="link" placeholder="The Github link">
                    <br><br>
                    <label>Image_Link: </label>
                    <input type="text" name="icon"  placeholder="Image Link">
                    <br><br>
                    <label>Submit: </label>
                    <input type="submit" name="send_message"></button>
</form>
<form method="POST">
                    <button name="logout">Return</button>
                        </form></li>

    <?php
    // Updated code for the "Return" button
    if (isset($_POST['logout'])) {
        echo '<script>window.location.href = "admin_panel.php";</script>';
exit();

    }
    ?>


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
<h2>Project List</h2>
<table style="width: 80%" border="1">
<tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Details</th>
                <th>Link</th>
                <th>Watch</th>
                <th>Edit || Delete</th>


            </tr>
            <?php
            $qry="select * from `projects`";
            $run=$con->query($qry);
            if($run->num_rows >0)
            {
                while ($row=$run->fetch_assoc())
                {
                    $id=$row['id'];
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['image'] ?></td>
                        <td><?php echo $row['heading'] ?></td>
                        <td><?php echo $row['para'] ?></td>
                        <td><?php echo $row['link'] ?></td>
                        <td><?php echo $row['learn'] ?></td>

                        <td>
                            <a href="edit2.php?id=<?php echo $id;?>">Edit</a>
                            <a href="delete2.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure?')">Delete</a>

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
          $image = mysqli_real_escape_string($con, $_POST['image']);
          $heading = mysqli_real_escape_string($con, $_POST['heading']);
          $para = mysqli_real_escape_string($con, $_POST['para']);
          $link = mysqli_real_escape_string($con, $_POST['link']);
          $learn = mysqli_real_escape_string($con, $_POST['learn']);

          $contact = "INSERT INTO `projects` (`image`, `heading`, `para`, `link`,`learn`) VALUES ('$image', '$heading','$para','$link','$learn')";
          mysqli_query($con, $contact);
        }
      ?>
<h4>Add New Project:</h4>
<form method="post" >
                    
                    <label>Image_link:</label><input type="text" name="image" placeholder="Image Link">
                    <br><br>
                    <label>Title:       </label>
                    <input type="text" name="heading"  placeholder="Title">
                    <br><br>
                    <label>Details:     </label>
                    <input type="text" name="para"  placeholder="Details">
                    <br><br>
                    <label>Github Link: </label>
                    <input type="text" name="link"  placeholder="link">
                    <br><br>
                    <label>show in github: </label>
                    <input type="text" name="learn"  placeholder=""><label>Submit</label>
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
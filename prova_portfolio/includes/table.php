<?php
session_start();
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


<h2>Contact List</h2>
<table style="width: 80%" border="1">
<tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Edit || Delete</th>
            </tr>
            <?php
            $qry="select * from `contact`";
            $run=$con->query($qry);
            if($run->num_rows >0)
            {
                while ($row=$run->fetch_assoc())
                {
                    $id=$row['id'];
                    ?>
                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['subject'] ?></td>
                        <td><?php echo $row['message'] ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $id;?>">Edit</a>
                            <a href="delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                            <a href="add.php?id=<?php echo $id; ?>">Add</a>


                </tr>
                <?php
                }
            }
            ?>
</table>
             
</body>
</html>
<h4>Add New Contact:</h4>
<form method="post" >
                    
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Your Name *">
                    <br><br>
                    <label>Email</label>
                    <input type="email" name="email"  placeholder="Your Email *">
                    <br><br>
                    <label>Subject</label>
                    <input type="text" name="subject"  placeholder="Your Subject...">
                    <br><br>
                    <label>Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message..."></textarea>
                    <br><br>
                    <label>Submit</label>
                    <input type="submit" name="send_message">Send Message</button>
</form>
<?php
        if(isset($_POST['send_message'])){
          global $con;
          $name = mysqli_real_escape_string($con, $_POST['name']);
          $email = mysqli_real_escape_string($con, $_POST['email']);
          $subject = mysqli_real_escape_string($con, $_POST['subject']);
          $message = mysqli_real_escape_string($con, $_POST['message']);

          $contact = "INSERT INTO `contact` (`name`, `email`, `subject`, `message`) VALUES ('$name', '$email', '$subject', '$message')";
          mysqli_query($con, $contact);
          header("Location: table.php");
        // exit();
        }
      ?>
<br>
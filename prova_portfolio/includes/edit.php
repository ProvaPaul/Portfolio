<?php
// Assume this is the beginning of your PHP file
include 'config.php';

$sql = "SELECT * FROM `users` WHERE `users`.`id` = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($result);
if(!$con){
die ('error in con' . mysqli_error($con));
}
else{
    $id=$_GET['id'];
    $qry="select * from `contact` where id=$id";
    $run=$con->query($qry);
    if($run ->num_rows >0)
    {
        while ($row= $run-> fetch_assoc())
        {
            // $id=$row['id'];
            // $id =  $row["id"];
            $name =  $row['name'];
            $email =  $row['email'];
            $subject =  $row['subject'];
            $message =  $row['message'];
        }}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit </title>
    <link rel="stylesheet" href="table.css">

</head>
<body>
<form method="post" >
                    
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $name; ?>">
                    <br><br>
                    <label>Email</label>
                    <input type="email" name="email"  value="<?php echo $email; ?>">
                    <br><br>
                    <label>Subject</label>
                    <input type="text" name="subject" value="<?php echo $subject; ?>">
                    <br><br>
                    <label>Message</label>
                    <textarea name="message" id="message" cols="30" rows="10" value="<?php echo $message; ?>"></textarea>
                    <br><br>
                    <label>Update</label>
                    <input type="submit" name="update">Update</button>
</form>
</body>
</html>
<?php
if(isset($_POST['update'])){

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $subject = mysqli_real_escape_string($con, $_POST['subject']);
    $message = mysqli_real_escape_string($con, $_POST['message']);

    $qry = "UPDATE `contact` SET name='$name',email='$email',subject='$subject',message='$message' where id=$id";
    if(mysqli_query($con, $qry))
    {
        header('location: table.php');
    }
    else
    {
        echo mysqli_error($con);
    }
  }
?>

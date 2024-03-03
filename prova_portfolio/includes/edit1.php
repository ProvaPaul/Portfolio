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
    $qry="select * from `courses` where id=$id";
    $run=$con->query($qry);
    if($run ->num_rows >0)
    {
        while ($row= $run-> fetch_assoc())
        {
            // $id=$row['id'];
            // $id =  $row["id"];
            $link=  $row['link'];
            $icon =  $row['icon'];
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
                    
                    <label>Link</label>
                    <input type="text" name="link" value="<?php echo $link; ?>">
                    <br><br>
                    <label>Image_Icon</label>
                    <input type="text" name="icon"  value="<?php echo $icon; ?>">
                    <br><br>
                    <label>Update</label>
                    <input type="submit" name="update"></button>
</form>
</body>
</html>
<?php
if(isset($_POST['update'])){

    $link = mysqli_real_escape_string($con, $_POST['link']);
    $icon = mysqli_real_escape_string($con, $_POST['icon']);
    $qry = "UPDATE `courses` SET link='$link',icon='$icon' where id=$id";
    if(mysqli_query($con, $qry))
    {
        header('location: table1.php');
    }
    else
    {
        echo mysqli_error($con);
    }
  }
?>

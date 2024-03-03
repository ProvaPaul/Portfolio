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
    $qry="select * from `projects` where id=$id";
    $run=$con->query($qry);
    if($run ->num_rows >0)
    {
        while ($row= $run-> fetch_assoc())
        {
            // $id=$row['id'];
            // $id =  $row["id"];
            $image=  $row['image'];
            $heading =  $row['heading'];
            $para=  $row['para'];
            $link =  $row['link'];
            $learn =  $row['learn'];


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
                    
                    <label>Image</label>
                    <input type="text" name="image" value="<?php echo $image; ?>">
                    <br><br>
                    <label>Title</label>
                    <input type="text" name="heading"  value="<?php echo $heading; ?>">
                    <br><br>
                    <label>Details</label>
                    <input type="text" name="para"  value="<?php echo $para; ?>">
                    <br><br>
                    <label>Link</label>
                    <input type="text" name="link"  value="<?php echo $link; ?>">
                    <br><br>
                    <label>Learn</label>
                    <input type="text" name="learn"  value="<?php echo $learn; ?>">
                    <br><br>
                    <label>Update</label>
                    <input type="submit" name="update"></button>
</form>
</body>
</html>
<?php
if(isset($_POST['update'])){

    $image = mysqli_real_escape_string($con, $_POST['image']);
    $heading = mysqli_real_escape_string($con, $_POST['heading']);
    $para = mysqli_real_escape_string($con, $_POST['para']);
    $link = mysqli_real_escape_string($con, $_POST['link']);
    $learn = mysqli_real_escape_string($con, $_POST['learn']);


    $qry = "UPDATE `projects` SET image='$image',heading='$heading',para='$para',link='$link',learn='$learn' where id=$id";
    if(mysqli_query($con, $qry))
    {
        header('location: table2.php');
    }
    else
    {
        echo mysqli_error($con);
    }
  }
?>

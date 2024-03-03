<?php
if(isset($_POST['send_message']))
{
    $name=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    $subject=mysqli_real_escape_string($con,$_POST['subject']);
    $message==mysqli_real_escape_string($con,$_POST['message']);

    $contact= "INSERT INTO 'contact' ('name','email','subject','message') VALUE ('$name','$email','$subject','$message')";
    mysqli_query($con,$contact);
}
?>
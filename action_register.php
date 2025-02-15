<?php
include("header.html");
?>
<?php
    $name=$_POST["name"];
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["passw"];
    $c=mysqli_connect("localhost","root","","site");
    mysqli_query($c,"INSERT INTO `user`(`name`, `username`, `email`, `password`) VALUES
    ('$name','$username','$email','$password');");
    mysqli_close($c);
?>
<?php
include("footer.html");
?>


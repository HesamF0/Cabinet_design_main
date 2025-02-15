<?php
include("header2.php");
?>
<?php

    $username=$_POST["username1"];
    $password=$_POST["passw"];
    $c=mysqli_connect("localhost","root","","site");
    $result=mysqli_query($c," SELECT * FROM `user` WHERE 
    `username` = '$username' AND `password` = '$password';");
    $row=mysqli_fetch_array($result);
    mysqli_close($c);
    if ($row) {
        header("Location: header3.php?msg=success");
    } else {
        header("Location: header3.php?msg=error");
    }
    exit();

?>
<?php
include("footer.html");
?>



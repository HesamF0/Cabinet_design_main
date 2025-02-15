<?php
$id=$_GET["id"];
$link=mysqli_connect("localhost","root","","site");
$result=mysqli_query($link,"SELECT * FROM `mdf` WHERE `id`='$id';");
mysqli_close($link);
$row=mysqli_fetch_array($result);
include("headerr.html");
?>
 <div class="row">
    <div class="col">
        <form action="editcity_action.php" method="post">
            <input type="text" name="id" hidden value="<?php echo($row["id"]); ?>">
            <input type="text" name="name" value="<?php echo($row["name"]); ?>">
            <input type="submit" value="edit">
        </form>    
    </div>
</div>


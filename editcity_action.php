<?php
include("headerr.html");
$id=$_POST["id"];
$name=$_POST["name"];
$link=mysqli_connect("localhost","root","","site");
$result=mysqli_query($link,"UPDATE `mdf` SET `name`='$name' WHERE `id`='$id';");
mysqli_close($link);
?>
 <div class="row">
    <div class="col">
        <?php
        if($result===true)
        {
            ?>
            <script>
                location.replace("city.php");
            </script>
            <?php
        }else
        {
            echo("EROR");
        }
        ?>
    </div>
</div>

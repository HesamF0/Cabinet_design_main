<?php
include("headerr.html");
$name=$_POST["name"];
$link=mysqli_connect("localhost","root","","site");
$result=mysqli_query($link,"INSERT INTO `mdf`(`name`) VALUES ('$name');");
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


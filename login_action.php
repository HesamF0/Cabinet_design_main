<?php
include("header.html");
?>
 <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0"> با موفقیت وارد حساب کاربری خود شدید</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5"> خوش آمدید</p>
                    </div>
</div>
</div>
<?php
if(isset($_POST["username"]) && !empty($_POST["username"])
 && isset($_POST["email"])  && !empty($_POST["email"])
 && isset($_POST["passw"])  && !empty($_POST["passw"])
 && isset($_POST["repassw"])  && !empty($_POST["repassw"]))
{
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["passw"];
    $repassword=$_POST["repassw"];
}
?>



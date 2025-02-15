<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>طراحی و ساخت کابینت آشپزخانه</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="icon" type="image/x-icon" href="assets/1.ico" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html">طراحی دکوراسیون آشپزخانه</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="register.php">ساخت حساب کابری</a></li>
                        <li class="nav-item"><a class="nav-link" href="login.php">ورود به حساب کابری</a></li>
                        <li class="nav-item"><a class="nav-link" href="https://maps.app.goo.gl/uhFXg78pHY9LCAfw6">آدرس</a></li>
                        <li class="nav-item"><a class="nav-link" href="#fo">راه های ارتباطی</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="masthead">
            <div class="container px-4 px-lg-5 h-100">
                <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end">
                        <h1 class="text-white font-weight-bold">ساخت حساب کابری</h1>
                        <hr class="divider" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 mb-5">لطفا اطلاعات را با دقت وارد کنید</p>
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <form action="action_register.php" method="post">
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن نام کاربری" name="username" required><br>
                                <label for="username">نام کاربری</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A username is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن نام" name="name" required><br>
                                <label for="name">نام کامل</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="email" placeholder="وارد کردن ایمیل" name="email" required><br>
                                <label for="email">ایمیل</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A email is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن رمز عبور" name="passw" required><br>
                                <label for="passw">رمز عبور</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                            </div>
                            <button class="btn btn-primary" type="submit">ساخت حساب کاربری</button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>


<?php
include("footer.html"); 
?>

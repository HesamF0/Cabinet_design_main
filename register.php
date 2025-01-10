<?php
include("header.html");
?> 

<form action="action_register.php" method="post">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">ساخت حساب کاربری</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">لطفا اطلاعات را با دقت وارد کنید</p>
                    </div>
                    <div class="form-floating mb-3">
                                <input class="form-control" type="text" placeholder="وارد کردن نام کابری" name="username" required><br>
                                <label for="username">نام کاربری</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="email" placeholder="وارد کردن ایمیل" name="email" required><br>
                                <label for="email">ایمیل</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A email is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="password" placeholder="وارد کردن رمز عبور" name="passw" required><br>
                                <label for="passw">رمز عبور</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password is required.</div>
                            </div>
                            <div class="form-floating mb-3">
                                <input class="form-control" type="password" placeholder="تکرار رمز عبور" name="repassw" required><br>
                                <label for="repassw">تکرار رمز عبور</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A password again is required.</div>
                            </div>
                            <button  class="btn btn-primary" type="submit">ساخت حساب کاربری</button>
                </div>
</div>           
</form>
<?php
include("footer.html");
?> 
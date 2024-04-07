<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="register_form">
        <div class="img_fix">
            <img src="img/register.jpg" alt="">
        </div>
        <div class="register_box">
            <h3>ĐĂNG KÍ</h3>
            <form action="index.php?act=register" onsubmit="return formValidate();" method="post">
                <div class="input_box">
                    <input id="username" type="text" name="user" placeholder="Tên tài khoản">
                    <span></span>
                </div>
                <div class="input_box">
                    <input id="email" type="email" name="email" placeholder="Email">
                    <span></span>
                </div>
                <div class="input_box">
                    <input id="password" type="password" name="pass" placeholder="Mật khẩu">
                    <span></span>
                </div>
                <div class="input_box">
                    <input id="confirm-password" type="password" name="repass" placeholder="Nhập lại mật khẩu">
                    <span></span>
                </div>
                <div class="btn_register">
                    <a href=""><button type="submit" name="submit">Đăng kí</button></a>
                </div>
            </form>
            <?php
                if(isset($errorUser) && $errorUser != ""){
                    echo "<small style='color:red;'>".$errorUser."</small>";
                }
            ?>
        </div>
    </div>
</body>
</html>
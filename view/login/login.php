<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="css/login.css">
    <style>
        .forget_and_register a:hover{
            text-decoration: none;
        }
        .login_box input[type="password"]{
            border: none;
            border-bottom: 2px solid #262626;
            outline: none;
            width: 300px;
            height: 40px;
            color: #262626;
            background: transparent;
            font-size: 16px;
            box-sizing: border-box;
            margin: 10px 0px;
        }
    </style>
</head>
<body>
    <div class="login_form">
        <div class="img_fix">
            <img src="img/register.jpg" alt="">
        </div>
        <div class="login_box">
            <h3>ĐĂNG NHẬP</h3>
            <form action="index.php?act=login" method="post">
                <div class="input_box">
                    <input id="userLogin" type="text" name="user" placeholder="Tên đăng nhập">
                    <span></span>
                    <small id="errorUserLogin"></small>
                </div>
                <div class="input_box">
                    <input id="passLogin" type="password" name="pass" placeholder="Mật khẩu">
                    <span></span>
                    <small id="errorPassLogin"></small>
                </div>
                <div class="btn_login">
                    <a href=""><button type="submit" name="submit" onclick="login()">Đăng nhập</button></a>
                </div>
                <?php if(isset($error) && $error != ""){
                    echo "<h6 style='color: red;'>".$error."</h6>";
                }
                ?>
                <div class="forget_and_register">
                    <a href="index.php?act=forget">Quên mật khẩu</a>
                    <a href="index.php?act=register">Bạn chưa có tài khoản?</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="css/forget-pass.css">
</head>
<body>
    <div class="forget_form">
        <div class="forget_pass_box">
            <h3>QUÊN MẬT KHẨU</h3>
            <form action="index.php?act=forget" method="post">
                <div class="input_box">
                    <input type="email" name="email" placeholder="Nhập email của bạn">
                    <span></span>
                    <small></small>
                </div>
                <div class="btn_forget">
                    <a href=""><button type="submit" name="guiemail">Gửi yêu cầu</button></a>
                </div>
                <div class="return_login">
                    <p>Bạn bấm <a href="">Vào đây</a> để quay lại màn hình đăng nhập</p>
                    <h5>Bạn quên mật khẩu đăng nhập? Xin hãy nhập địa chỉ Email ở đây. Chúng tôi sẽ gửi mật khẩu mới qua Gmail cho bạn</h5>
                </div>
                <?php
                    if(isset($sendMailMess) && $sendMailMess != ''){
                        echo $sendMailMess;
                    }
                ?>
            </form>
        </div>
    </div>
</body>
</html>
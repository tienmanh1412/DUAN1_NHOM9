<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Information</title>
    <style>
        .info_user {
            text-align: center;
            background-color: #fff;
            margin: 20px 0px;
        }

        .avatar {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }

        #user-info {
            margin-top: 20px;
        }

        button {
            border: 1px solid #fff;
            padding: 10px 20px;
            margin-top: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
        foreach($info_user as $info){
            extract($info);
        }
    ?>
    <div class="info_user">
        <img src="upload/<?=$avatar; ?>" alt="User Avatar" class="avatar">
        <h1>Tài khoản của tôi</h1>
        <div id="user-info">
            <h2>Hello <?=$user; ?>!</h2>
            <p>Email: <?=$email; ?></p>
            <p>Số Điện Thoại: <?= $tel; ?></p>
            <p>Địa chỉ: <?=$address; ?></p>
        </div>
        <a href="index.php?act=follow"><button>Xem Chi Tiết Đơn hàng của bạn</button></a>
    </div>
</body>
</html>
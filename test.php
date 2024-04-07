<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .container {
            text-align: center;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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
            padding: 10px 20px;
            margin-top: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="" alt="User Avatar" class="avatar">
        <h1>Tài khoản của tôi</h1>
        <div id="user-info">
            <h2>Hello John Doe!</h2>
            <p>Email: john.doe@example.com</p>
            <!-- Add more user information as needed -->
        </div>
        <button onclick="logout()">Cập nhật tài khoản</button>
    </div>
</body>
</html>
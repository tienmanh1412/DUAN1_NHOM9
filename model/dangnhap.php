<?php
    function insert_taikhoan($email, $user, $pass){
        $insert = "INSERT INTO tai_khoan(email, user, pass) VALUES ('$email', '$user', '$pass');";
        pdo_execute($insert);
    }

    function update_taikhoan($id, $user, $pass, $email, $address, $tel){
        $sql = "UPDATE `tai_khoan` SET user = '$user', pass = '$pass', email = '$email', address = '$address', tel = '$tel' WHERE id = '$id'";
        pdo_execute($sql);
    }

    function countAdmins($user){
        $sql = "SELECT COUNT(*) as count FROM tai_khoan WHERE role = 1 AND user = '$user'";
        $result = pdo_query($sql);
        return $result[0]['count'];
    }

    function get_user($user, $pass){
        $sql = "SELECT * FROM tai_khoan WHERE user = '$user' AND pass = '$pass'";
        $check = pdo_query($sql);
        return $check;
    }

    function get_info_user($user_id){
        $sql = "SELECT * FROM tai_khoan WHERE id = '$user_id'";
        $check = pdo_query($sql);
        return $check;
    }

    function sendMail($email){
        $sql = "SELECT * FROM tai_khoan WHERE email = '$email'";
        $taikhoan = pdo_query_one($sql);    
        if($taikhoan != false){
            sendMailPass($email, $taikhoan['pass']);
            return "Gửi email thành công";
        }else{
            return "Email bạn nhập không tồn tại";
        }
    }

    function sendMailPass($email, $pass){
        require 'PHPMailer-master/src/Exception.php';
        require 'PHPMailer-master/src/PHPMailer.php';
        require 'PHPMailer-master/src/SMTP.php';

            $mail = new PHPMailer\PHPMailer\PHPMailer();
            $mail->IsSMTP(); // enable SMTP

            $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
            $mail->SMTPAuth = true; // authentication enabled
            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 465; // or 587
            $mail->IsHTML(true);
            $mail->Username = "dungndph35764@fpt.edu.vn";
            $mail->Password = "fogztqjoewfqnkhp";
            $mail->SetFrom("dungndph35764@fpt.edu.vn");
            $mail->Subject = 'DC-Fashion';
            $mail->Body    = 'DC-Fashion nhận được phản hồi rằng bạn đã quên mật khẩu. Mật khẩu của bạn: ' . $pass;
            $mail->AddAddress($email);

            if(!$mail->Send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                echo "Message has been sent";
            }
    }
?>
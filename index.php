<?php
    session_start();
    ob_start();
        
    include "view/header.php";
    include "global.php";
    include "model/pdo.php";
    include "model/dangnhap.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "model/tintuc.php";
    include "model/binhluan.php";
    include "model/donhang.php";
    include "model/voucher.php";
    include "model/lienhe.php";
    include "model/configvnpay.php";
    
    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    $list_danhmuc = list_danhmuc();
    $loadall_danhmuc = loadall_danhmuc();
    $list_tintuc = loadall_tintuc();
    $list_sp_discount = loadall_sp_discount();
    $sanphammoi = loadall_sanpham_top3();

    if(isset($_GET['act']) && $_GET['act'] != ""){
        $act = $_GET['act'];
        switch($act){
            case "dmsanpham":
                if(isset($_GET['iddm']) && ($_GET['iddm'] > 0)){
                    $iddm = $_GET['iddm'];
                    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 3;
                    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
                    
                    $minPrice = isset($_GET['minPrice']) ? (int)$_GET['minPrice'] : null;
                    $maxPrice = isset($_GET['maxPrice']) ? (int)$_GET['maxPrice'] : null;
                    
                    $sp_with_dm = getall_sp($iddm, $current_page, $item_per_page, $minPrice, $maxPrice);
                    $total_items = get_total_sp_count($iddm, $minPrice, $maxPrice);
                    $totalPages = ceil($total_items / $item_per_page);
                } else {
                    $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 3;
                    $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;

                    $minPrice = isset($_GET['minPrice']) ? (int)$_GET['minPrice'] : null;
                    $maxPrice = isset($_GET['maxPrice']) ? (int)$_GET['maxPrice'] : null;

                    $sp_with_dm = getall_sp(0, $current_page, $item_per_page, $minPrice, $maxPrice);
                    $total_items = get_total_sp_count(0, $minPrice, $maxPrice);
                    $totalPages = ceil($total_items / $item_per_page);
                }
                include "view/details/shop-grid.php";
                break;
            case "ctsanpham":
                if(isset($_GET['idsp']) && $_GET['idsp'] > 0 ){
                    $onesp = loadone_sanpham($_GET['idsp']);
                    extract($onesp);
                    $list_binhluan = load_binhluan($_GET['idsp']);
                    $sanpham_cungloai=loadall_sanpham_cungloai($id,$iddm);
                    $ctsp = loadall_ctsp($_GET['idsp']);
                    $count = get_count_bl($_GET['idsp']);
                    include "view/details/shop-details.php";
                } 
                break;
            case "blog_details":
                if(isset($_GET['idtt']) && $_GET['idtt'] > 0 ){
                    $id = $_GET['idtt'];
                    // var_dump($id);
                    $onett = loadone_tintuc($id);
                    extract($onett);
                    include "view/blog/blog-details.php";
                }
                break;
            case "tintuc":
                include "view/blog/blog.php";
                break;
            case "cart":
                $error_cart = '';
                $can_add_to_cart = true;
                if(isset($_POST['cart']) && ($_POST['cart'])){
                    $id = isset($_POST['id']) ? $_POST['id'] : null;
                    $name = $_POST['name'];
                    $img = $_POST['img'];
                    $price = $_POST['price'];
                    $soluong = $_POST['qty'];
                    $color = isset($_POST['color']) ? trim($_POST['color']) : null;
                    $size = isset($_POST['size']) ? trim($_POST['size']) : null;
                    $ttien = $soluong * $price;
                    if(empty($color) || empty($size)){
                        $error_cart = "Bạn vui lòng chọn kích thước và màu sắc";
                        $can_add_to_cart = false;
                    }else{
                        $spadd =[
                            $id,$name,$img,$price,$soluong,$color,$size,$ttien
                        ];
                        if(!increaseProductQuantity($_SESSION['mycart'], $id, $color, $size, $soluong)){
                            array_push($_SESSION['mycart'],$spadd);
                        }
                    }
                }
                if($can_add_to_cart){
                    foreach ($_SESSION['mycart'] as $item) {
                        if(empty($item[5]) || empty($item[6])){
                            $error_cart = "Bạn vui lòng chọn kích thước và màu sắc";
                            break;
                        }
                        $ctsp = loadall_ctsp($item[0]);
                    }
                }
                if(!$can_add_to_cart){
                    header("Location: index.php?act=dmsanpham");
                }else{
                    include "view/cart/cart.php";
                }
                break;
            case "delcart":
                if(isset($_GET['idcart'])){
                    $_SESSION['mycart'] = array_merge(
                    array_slice($_SESSION['mycart'], 0, $_GET['idcart']),
                    array_slice($_SESSION['mycart'], $_GET['idcart'] + 1)
                );
                } else {
                    $_SESSION['mycart'] = [];
                }
                header('Location: index.php?act=cart');
                include "view/header.php";
                break;
            case "updatecart":
                if(isset($_POST['idcart'])) {
                    $idcart = $_POST['idcart'];
                    $quantity = $_POST['quantity'][$idcart];
                    
                    // Cập nhật số lượng trong phiên
                    $_SESSION['mycart'][$idcart][4] = $quantity;
                }
                header('Location: index.php?act=cart');
                break;
            case "checkout":
                $cart = [];
                if(isset($_SESSION['mycart'])) {
                    $cart = $_SESSION['mycart'];
                }
                if(isset($_SESSION['user_id'])){
                    $info_user = get_info_user($_SESSION['user_id']);
                    if(isset($_POST['redirect']) && isset($_SESSION['user_id'])){
                        $id = $_POST['id_user'];
                        $name = $_POST['lastname'];
                        $address = $_POST['address'];
                        $tel = $_POST['tel'];
                        $email = $_POST['email'];
                        $code_cart = rand(1, 10000);
                        // $payment = $_POST['payment'];
                        if(!empty($_POST['payment'])){
                            $payment = $_POST['payment'];
                            if($payment == 'tienmat'){
                                $id_order = order($id, $name, $email, $address, $tel, $payment);
                                if($id_order){
                                    foreach($cart as $item){
                                        $id_sp = $item[0];
                                        $color = $item[5];
                                        $size = $item[6];
                                        $soluong = $item[4];
                                        $thanhtien = ((int)$item[3] * (int)$item[4]) - $item[8];
                                        order_detail($id_order, $id_sp, $color, $size, $soluong, $thanhtien, $code_cart);
                                    }
                                }
                                unset($_SESSION['mycart']);
                                header("Location: view/cart/thank.php");
                            }else if($payment == 'vnpay'){                                                                                                                                
                                $vnp_TxnRef = $code_cart; //Mã giao dịch thanh toán tham chiếu của merchant
                                foreach($cart as $item){
                                    $thanhtien = ((int)$item[3] * (int)$item[4]) - $item[8];
                                }
                                $vnp_Amount = $thanhtien; // Số tiền thanh toán
                                $vnp_Locale = "vn"; //Ngôn ngữ chuyển hướng thanh toán
                                $vnp_BankCode = "NCB"; //Mã phương thức thanh toán
                                $vnp_IpAddr = $_SERVER['REMOTE_ADDR']; //IP Khách hàng thanh toán
    
                                $inputData = array(
                                    "vnp_Version" => "2.1.0",
                                    "vnp_TmnCode" => $vnp_TmnCode,
                                    "vnp_Amount" => $vnp_Amount * 100,
                                    "vnp_Command" => "pay",
                                    "vnp_CreateDate" => date('YmdHis'),
                                    "vnp_CurrCode" => "VND",
                                    "vnp_IpAddr" => $vnp_IpAddr,
                                    "vnp_Locale" => $vnp_Locale,
                                    "vnp_OrderInfo" => "Thanh toan GD: " . $vnp_TxnRef,
                                    "vnp_OrderType" => "other",
                                    "vnp_ReturnUrl" => "http://localhost/duan1/view/cart/thank.php",
                                    "vnp_TxnRef" => $vnp_TxnRef,
                                    "vnp_ExpireDate"=> $expire
                                );
    
                                if (isset($vnp_BankCode) && $vnp_BankCode != "") {
                                    $inputData['vnp_BankCode'] = $vnp_BankCode;
                                }
    
                                ksort($inputData);
                                $query = "";
                                $i = 0;
                                $hashdata = "";
                                foreach ($inputData as $key => $value) {
                                    if ($i == 1) {
                                        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
                                    } else {
                                        $hashdata .= urlencode($key) . "=" . urlencode($value);
                                        $i = 1;
                                    }
                                    $query .= urlencode($key) . "=" . urlencode($value) . '&';
                                }
                                $id_order = order($id, $name, $email, $address, $tel, $payment);
                                if($id_order){
                                    foreach($cart as $item){
                                        $id_sp = $item[0];
                                        $color = $item[5];
                                        $size = $item[6];
                                        $soluong = $item[4];
                                        $thanhtien = ((int)$item[3] * (int)$item[4]) - $item[8];
                                        order_detail($id_order, $id_sp, $color, $size, $soluong, $thanhtien, $code_cart);
                                    }
                                }
                                unset($_SESSION['mycart']);
                                $vnp_Url = $vnp_Url . "?" . $query;
                                if (isset($vnp_HashSecret)) {
                                    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
                                    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
                                }
                                header('Location: ' . $vnp_Url);
                                die();
                            }else if($payment == 'momo'){
                                header('Content-type: text/html; charset=utf-8');
    
                                function execPostRequest($url, $data)
                                {
                                    $ch = curl_init($url);
                                    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
                                    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                                    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                            'Content-Type: application/json',
                                            'Content-Length: ' . strlen($data))
                                    );
                                    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
                                    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                                    //execute post
                                    $result = curl_exec($ch);
                                    //close connection
                                    curl_close($ch);
                                    return $result;
                                }
    
    
                                $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
    
                                foreach($cart as $item){
                                    $thanhtien = ((int)$item[3] * (int)$item[4]) - $item[8];
                                }
                                $partnerCode = 'MOMOBKUN20180529';
                                $accessKey = 'klm05TvNBzhg7h7j';
                                $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
                                $orderInfo = "Thanh toán qua MoMo";
                                $amount = $thanhtien;
                                $orderId = $code_cart;
                                $redirectUrl = "http://localhost/duan1/view/cart/thank.php";
                                $ipnUrl = "https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b";
                                $extraData = "";
    
                                $requestId = time() . "";
                                $requestType = "payWithATM";
    
                                //before sign HMAC SHA256 signature
                                $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
                                $signature = hash_hmac("sha256", $rawHash, $secretKey);
                                $data = array('partnerCode' => $partnerCode,
                                    'partnerName' => "Test",
                                    "storeId" => "MomoTestStore",
                                    'requestId' => $requestId,
                                    'amount' => $amount,
                                    'orderId' => $orderId,
                                    'orderInfo' => $orderInfo,
                                    'redirectUrl' => $redirectUrl,
                                    'ipnUrl' => $ipnUrl,
                                    'lang' => 'vi',
                                    'extraData' => $extraData,
                                    'requestType' => $requestType,
                                    'signature' => $signature);
                                $result = execPostRequest($endpoint, json_encode($data));
                                $jsonResult = json_decode($result, true);  // decode json
                                $id_order = order($id, $name, $email, $address, $tel, $payment);
                                if($id_order){
                                    foreach($cart as $item){
                                        $id_sp = $item[0];
                                        $color = $item[5];
                                        $size = $item[6];
                                        $soluong = $item[4];
                                        $thanhtien = ((int)$item[3] * (int)$item[4]) - $item[8];
                                        order_detail($id_order, $id_sp, $color, $size, $soluong, $thanhtien, $code_cart);
                                    }
                                }
                                unset($_SESSION['mycart']);
    
                                //Just a example, please check more in there
    
                                header('Location: ' . $jsonResult['payUrl']);
                            }
                        }else{
                            $errorPayment = "Vui lòng chọn hình thức thanh toán";
                        }
                    }
                }else{
                    $error = "<script>
                                swal({
                                    title: 'Bạn chưa đăng nhập',
                                    text: 'Vui lòng đăng nhập để thanh toán',
                                    icon: 'warning',
                                    button: {
                                        text: 'OK',
                                        className: 'center-button',
                                    },
                                }).then((value) => {
                                    if (value) {
                                        window.location.href = 'index.php?act=login'; 
                                    }
                                });
                            </script>";
                }
                include "view/cart/checkout.php";
                break;
            case "contact":
                
        if(isset($_POST['guilienhe'])){
            $iduser = $_POST['iduser'];
            $ndlienhe = $_POST['ndlienhe'];
            $tenlh = $_POST['tenlh'];
            $emaillh = $_POST['emaillh'];
           
            try {
                insert_lienhe($iduser, $ndlienhe, $tenlh, $emaillh);
                header("Location: " . $_SERVER['PHP_SELF']);
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
                include "view/contact.php";
                break;
            case "binhluan":
                include "view/comment/form-comment.php";
                break;
            case "blog_details":
                include "view/blog/blog-details.php";
                break;
            case "login":
                if(isset($_POST['submit'])){
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $result = get_user($user, $pass);
                    if($result && isset($result[0]['user']) && isset($result[0]['pass'])){
                        $role = $result[0]['role'];
                        if($role == 1){
                            $_SESSION['role'] = $role;
                            header("Location: duan1_adminlte/index.php");
                            exit();
                        }else{
                            $_SESSION['role'] = $role;
                            $_SESSION['user_id'] = $result[0]['id'];
                            $_SESSION['user'] = $result[0]['user'];
                            header("Location: index.php");
                        }
                    }else{
                        $error = "Tài khoản hoặc mật khẩu không đúng";
                    }
                }
                include "view/login/login.php";
                break;
            case "register":
                if(isset($_POST['submit'])){
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $repass = $_POST['repass'];
                    $checkrepass = $repass == $pass;
                    if(countAdmins($user) == 1){
                        $errorUser = "Chỉ có thể có một tài khoản admin";
                    }else{
                        insert_taikhoan($email, $user, $pass);
                        header("Location: index.php?act=login");
                    }
                }
                include "view/login/register.php";
                break;
            case "info_user":
                $info_user = get_info_user($_SESSION['user_id']);
                include "view/login/info_user.php";
                break;
            case "logout":
                unset($_SESSION['user_id']);
                unset($_SESSION['role']);
                unset($_SESSION['user']);
                header("Location: index.php");
                break;
            case "forget":
                if(isset($_POST['guiemail'])){
                    $email = $_POST['email'];
                    $sendMailMess = sendMail($email);
                }
                include "view/login/forget-pass.php";
                break;
            case "follow":
                if(isset($_SESSION['user_id'])){
                    $ctdh_follow = follow_order($_SESSION['user_id']);
                }else{
                    $error = "Bạn phải đăng nhập mới có thể xem được đơn hàng của bạn !!!";
                }
                include "view/cart/follow_order.php";
                break;
            case "order_detail":
                $ctdh = ctdh_order_detail($_GET['ma_dh']);
                $tt_order_detail = tt_order_detail($_GET['ma_dh']);
                include "view/cart/order-detail.php";
                break;
            case "unset_order":
                if(isset($_GET['ma_dh'])){
                    $ctdh = ctdh_order_detail($_GET['ma_dh']);
                    if($ctdh && $ctdh[0]['id_trangthai'] == 1){
                        delete_donhang($_GET['ma_dh']);
                    }else{
                        echo "<script>alert('Không thể hủy đơn hàng. Vì đơn hàng đã được xử lý');</script>";
                    }
                }
                $ctdh_follow = follow_order($_SESSION['user_id']);
                header("Refresh:0; url=index.php?act=follow");
                include "view/cart/follow_order.php";
                break;
            case "discount":
                if(isset($_POST['check_coupon']) && isset($_SESSION['mycart'])){
                    $coupon = $_POST['coupon'];
                    $coupon_code = loadone_voucher($coupon);
                    if($coupon_code && $coupon_code['so_tien_giam'] > 0){
                        foreach ($_SESSION['mycart'] as &$item) {
                            $item[8] = $coupon_code['so_tien_giam'];
                            $item[9] = $coupon;
                        }
                        unset($item);
                    }
                }
                foreach ($_SESSION['mycart'] as $item) {
                    $ctsp = loadall_ctsp($item[0]);
                }
                include "view/cart/cart.php";
                break;
        }
    }else{
        include "view/home.php";
        include "view/more-item.php";
        include "view/lastest-product.php";
        include "view/news.php";
    }
    include "view/footer.php";
?>
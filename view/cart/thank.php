<a href=""><img src="../../img/logo_new.png" alt="Colorlib logo"></a>
<h1 style="text-align:center;">Cảm ơn vì đã đặt hàng của Website chúng tôi</h1>
<p style="text-align:center;">Bạn có thể xem thêm sản phẩm tại đây <strong><a href="../../index.php?act=dmsanpham">DC-Fashion</a></strong>.</p>
<br>
<p style="text-align:center; color:red;"><strong>Mọi thông tin liên hệ đến bạn chúng tôi đã cập nhật</strong>

<p style="text-align:center;"><strong>Và đơn hàng của bạn sẽ được giao đến bạn tỏng vài ngày tới. Xin trân trọng cảm ơn !!!</strong>

<p style="text-align:center;"><strong>Xem thông tin chi tiết về đơn hàng của bạn <a href="../../index.php?act=follow">ở đây</a></strong>.</p>

<style>
img {
  margin: 0 auto;
  display: block;
  margin-top: 20%;
}
</style>

<?php
  include "../../model/donhang.php";
  include "../../model/sanpham.php";
  include "../../model/pdo.php";
  if(isset($_GET['vnp_Amount'])){
    $_SESSION['code_cart'] = $_GET['vnp_TxnRef'];
    $vnp_Amount = $_GET['vnp_Amount'];
    $vnp_BankCode = $_GET['vnp_BankCode'];
    $vnp_BankTranNo = $_GET['vnp_BankTranNo'];
    $vnp_OrderInfo = $_GET['vnp_OrderInfo'];
    $vnp_PayDate = $_GET['vnp_PayDate'];
    $vnp_TmnCode = $_GET['vnp_TmnCode'];
    $vnp_CardType = $_GET['vnp_CardType'];
    $vnp_TransactionNo = $_GET['vnp_TransactionNo'];
    $code_cart = $_SESSION['code_cart'];
    $insert_vnpay = insert_vnpay($vnp_Amount, $vnp_BankCode, $vnp_BankTranNo, $vnp_OrderInfo, $vnp_PayDate, $vnp_TmnCode, $vnp_CardType, $vnp_TransactionNo, $code_cart);
  }else if(isset($_GET['partnerCode'])){
    $_SESSION['code_cart'] = $_GET['orderId'];
    $partnerCode = $_GET['partnerCode'];
    $orderId = $_SESSION['code_cart'];
    $amount = $_GET['amount'];
    $orderInfo = $_GET['orderInfo'];
    $orderType = $_GET['orderType'];
    $transId = $_GET['transId'];
    $payType = $_GET['payType'];
    $insert_momo = insert_momo($partnerCode, $orderId, $amount, $orderInfo, $orderType, $transId, $payType);
  }
?>
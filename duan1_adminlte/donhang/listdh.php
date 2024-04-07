<!DOCTYPE html>
<html lang="en">
<head>
  <title>Đơn hàng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Đơn hàng</h2>      
        <table class="table table-striped text-center">
        <thead>
            <tr>
                <th>Đơn hàng cập nhật</th>
                <th>Tên người nhận</th>
                <th>Email</th>
                <th>SĐT Người nhận</th>
                <th>Địa chỉ</th>
                <th>Trạng thái</th>
            </tr>
            <?php  
                foreach ($list_donhang as $dh){
                    extract($dh);
                    $suadh = "index.php?act=suadh&id_dh=" . $id_dh;
            ?>
                <tr>
                    <td>
                        <?php   
                            if($cart_status == 1){
                                echo "<a href='index.php?act=xuly&cart_status=0&code=".$id_dh."'>Đơn hàng mới</a>";
                            }else{
                                echo "Đã phê duyệt";
                            }
                        ?>
                    </td>
                    <td><?= $ten_nguoi_nhan; ?></td>
                    <td><?= $email; ?></td>
                    <td><?= $sdt_nguoi_nhan; ?></td>
                    <td><?= $dia_chi_nguoi_nhan; ?></td>    
                    <td><?= $name_tt; ?></td>
                    <td>
                        <a href="<?=$suadh;?>"><input type="button" value="Sửa"></a>
                    </td>
                </tr>
            <?php } ?>
        </thead>
        </table>
    </div>
    <br><br>
</body>
</html>

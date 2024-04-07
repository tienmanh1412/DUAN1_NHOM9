<?php
if (is_array($dh)) {
    extract($dh);
}
?>

<div class="container">
    <h2>Cập nhật trạng thái đơn hàng </h2>
    <form action="index.php?act=updatedh" method="POST">
        <div class="form-group">
            <?php
                extract($dh);
                echo "<p>Tên người nhận: $ten_nguoi_nhan</p>";
                echo "<p>Email: $email</p>";
                echo "<p>SĐT người nhận: $sdt_nguoi_nhan</p>";
                echo "<p>Địa chỉ người nhận: $dia_chi_nguoi_nhan</p>"
            ?>
            <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Tổng tiền</th>
                    <th>Ngày mua hàng</th>
                    <th>Size</th>
                    <th>Màu</th>
                </tr>
                <?php
                    
                    foreach ($ctdh as $dh) {
                        extract($dh);
                        echo '<tr>
                            <td>' . $name . '</td>
                            <td>' . $soluong . '</td>
                            <td>' . number_format($thanh_tien, 0, ',', '.') . 'đ</td>
                            <td>' . $created . '</td>
                            <td>' . $size . '</td>
                            <td>' . $color . '</td>
                        </tr>';
                    }
                ?>
            </thead>
        </table>
        <select class="form-control" id="trangthai" name="id_trangthai">
            <?php
            
                foreach ($list_ctdonhang as $trangthai) {
                    extract($trangthai);
                    if ($id_trangthai == $id) {
                        echo '<option value="' . $id . '" selected>' . $name_tt . '</option>';
                    } else {
                        echo '<option value="' . $id . '">' . $name_tt . '</option>';
                    }
                }
            
            ?>
        </select>
        <?php
            if(isset($thongbao) && $thongbao != ""){
                echo $thongbao;
            }
        ?>
        </div>
        <div class="mt-3 text-center">
            <input type="hidden" name="id" value="<?php if(isset($id_dh) && ($id_dh > 0)) echo $id_dh ?>"> 
            <input type="submit" name="suadh" class="btn btn-outline-primary" value="Cập nhật">
            <input type="reset" class="btn btn-outline-primary" value="Nhập lại">
        </div>
    </form>
    <a href="index.php?act=donhang"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>
</div>

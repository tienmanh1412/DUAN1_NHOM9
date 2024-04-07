<?php
    if(isset($error) && $error != ""){
        echo "<p style='text-align:center;'>".$error."</p>";
?>
<?php }else{ ?>
<style>
    .row input{
        margin-right: 10px;
    }
</style>
<div class="container">
    <h2>Đơn hàng của tôi</h2>
    <form action="index.php?act=unset_order" method="POST">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <th>Mã đơn hàng</th>
                    <th>Ngày mua</th>
                    <th>Tên sản phẩm</th>
                    <th>Tổng tiền</th>
                    <th></th>
                </tr>
                <?php
                foreach ($ctdh_follow as $list){
                    extract($list);
                    $order_detail = "index.php?act=order_detail&ma_dh=" . $id_dh;
                    $unset_order = "index.php?act=unset_order&ma_dh=" . $id_dh;
                ?>
                    <tr>
                        <td><?=$ma_dh; ?></td>
                        <td><?=$created; ?></td>
                        <td><?=$name; ?></td>
                        <td><?=number_format($thanh_tien, 0, ',', '.'); ?>đ</td>
                        <td>
                            <?php
                                if($id_trangthai == '4'){
                            ?>
                                <p>Hoàn tất giao hàng</p>
                                <a href="<?=$order_detail; ?>">Đánh giá đơn hàng</a>
                            <?php }else{ ?>
                                <a href="<?=$order_detail; ?>"><input type="button" value="Chi tiết đơn hàng"></a>
                                <a onclick="return confirm(\'Bạn có muốn xóa không?\')" href="<?=$unset_order; ?>"><input type="button" value="Hủy đơn hàng"></a>
                            <?php } ?>
                        </td>
                    </tr>
                <?php } ?>
            </thead>
        </table>
        <input type="hidden" name="id_dh" value="<?=$id_dh; ?>">
    </form>
</div>
<?php } ?>
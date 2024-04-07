<div class="container">
        <div class="mt-4">
        <h2>Danh sách khuyến mãi</h2>
        <table class="table table-striped text-center">
            <thead>
            <tr>
                <th></th>
                <th>STT</th>
                <th>Mã khuyến mãi </th>
                <th>Số Lượng Mã</th>
                <th>Loại khuyến mãi</th>
                <th>số tiền giảm</th>
                <th>Ngày bắt đầu </th>
                <th>Ngày kết thúc</th>
                <th></th>

            </tr>
            </thead>
            <tbody>
            <tr>
            <?php
                foreach ($listkm as $khuyenmai){
                    extract($khuyenmai);
                    $suakm = "index.php?act=suakm&id=".$id_voucher;
                    $xoakm = "index.php?act=deletekm&id=" . $id_voucher;
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id_voucher.'</td>
                    <td>'.$ma_voucher.'</td>
                    <td>'.$soluong_voucher.'</td>
                    <td>'.$loai_khuyenmai.'</td>
                    <td>'.$so_tien_giam.'</td>
                    <td>'.$ngaybatdau.'</td>
                    <td>'.$ngayketthuc.'</td>
                    <td><a  href="'.$suakm.'"><input type="button" value="Sửa"></a></td>
                    <td><a onclick="return confirm(\'Bạn có muốn xóa không?\')" href="' . $xoakm . '"><input type="button" value="Xóa"></a></td>
                </tr>';
                }
            ?>
            </td>
            </tr>
            </tbody>
        </table>
        <a href="index.php?act=addkm"><button class="btn btn-primary">Thêm khuyến mãi</button></a>
    </div>
 </div>

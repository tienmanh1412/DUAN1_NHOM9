<?php
if (is_array($khuyenmai)) {
    extract($khuyenmai);
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật voucher</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-4">Cập nhật voucher</h2>
        <form action="index.php?act=updatekm" method="post">
            <!-- Các trường thông tin voucher có thể cập nhật -->
            <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $khuyenmai['id_voucher'] ?>">
            </div>
            <div class="form-group">
                <label for="ma_voucher">Mã voucher:</label>
                <input type="text" class="form-control" id="ma_voucher" name="ma_voucher" value="<?php echo $khuyenmai['ma_voucher']; ?>">
            </div>
            <div class="form-group">
                <label for="soluong_voucher">Số lượng voucher:</label>
                <input type="number" class="form-control" id="soluong_voucher" name="soluong_voucher" value="<?php echo $khuyenmai['soluong_voucher']; ?>">
            </div>
            <div class="form-group">
                <label for="loai_khuyenmai">Loại khuyến mãi:</label>
                <input type="number" class="form-control" id="loai_khuyenmai" name="loai_khuyenmai" value="<?php echo $khuyenmai['loai_khuyenmai']; ?>">
            </div>
            <div class="form-group">
                <label for="so_tien_giam">Số tiền giảm:</label>
                <input type="number" class="form-control" id="so_tien_giam" name="so_tien_giam" value="<?php echo $khuyenmai['so_tien_giam']; ?>">
            </div>
            
            <div class="form-group">
                <label for="ngaybatdau">Ngày bắt đầu:</label>
                <input type="date" class="form-control" id="ngaybatdau" name="ngaybatdau" value="<?php echo $khuyenmai['ngaybatdau']; ?>">
            </div>
            <div class="form-group">
                <label for="ngayketthuc">Ngày kết thúc:</label>
                <input type="date" class="form-control" id="ngayketthuc" name="ngayketthuc" value="<?php echo $khuyenmai['ngayketthuc']; ?>">
            </div>
            <button type="submit" name="capnhat" value="capnhat" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
</body>
</html>
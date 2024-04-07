
    <div class="container">
        <h2 class="mt-4">Thêm Khuyến Mãi</h2>
        <form method="post" action="index.php?act=addkm">
            <div class="form-group">
                <label for="ma_voucher">Mã Voucher:</label>
                <input type="text" class="form-control" id="ma_voucher" name="ma_voucher">
            </div>
            <div class="form-group">
                <label for="soluong_voucher">Số Lượng Voucher:</label>
                <input type="number" class="form-control" id="soluong_voucher" name="soluong_voucher">
            </div>
            <div class="form-group">
                <label for="loai_khuyenmai">Loại Khuyến Mãi:</label>
                <input type="number" class="form-control" id="loai_khuyenmai" name="loai_khuyenmai">
            </div>
            <div class="form-group">
                <label for="so_tien_giam">Số Tiền Giảm:</label>
                <input type="number" class="form-control" id="so_tien_giam" name="so_tien_giam">
            </div>
            <div class="form-group">
                <label for="ngaybatdau">Ngày Bắt Đầu:</label>
                <input type="date" class="form-control" id="ngaybatdau" name="ngaybatdau">
            </div>
            <div class="form-group">
                <label for="ngayketthuc">Ngày Kết Thúc:</label>
                <input type="date" class="form-control" id="ngayketthuc" name="ngayketthuc">
            </div>
            <button type="submit" name="them" value="them" class="btn btn-primary">Thêm Khuyến Mãi</button>
        </form>
    </div>
    <script>
    // Kiểm tra nếu có thông báo thành công thì chuyển hướng về trang danh sách
    <?php if (!empty($thongbao)) : ?>
        window.setTimeout(function(){
            window.location.href = 'index.php?act=dskm';
        }, 1000); // Chuyển hướng sau 3 giây
    <?php endif; ?>
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var form = document.querySelector("form");

        form.addEventListener("submit", function(event) {
            var ngayBatDau = new Date(document.getElementById("ngaybatdau").value);
            var ngayKetThuc = new Date(document.getElementById("ngayketthuc").value);

            if (ngayBatDau >= ngayKetThuc) {
                alert("Ngày bắt đầu phải nhỏ hơn ngày kết thúc");
                event.preventDefault(); // Ngăn chặn form được submit nếu có lỗi
            }
        });
    });
</script>

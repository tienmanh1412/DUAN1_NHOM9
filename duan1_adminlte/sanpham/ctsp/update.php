<?php
if (is_array($ctsanpham)) {
    extract($ctsanpham);
}
?>
<div class="container">
    <h1>Cập nhật Chi Tiết Sản Phẩm</h1>
    <form action="index.php?act=postupdatectsp" method="POST" enctype="multipart/form-data" onsubmit="return validateFormUpdate()">
        <div class="form-group">
            <label for="color">Màu</label>
            <input type="text" class="form-control" id="color" name="color" value="<?= $ctsanpham[0]['color'] ?>">
            <span id="colorError" style="color: red;"></span>
        </div>
        <div class="form-group">
            <label for="size">Size</label>
            <input type="text" class="form-control" id="size" name="size" value="<?= $ctsanpham[0]['size'] ?>">
            <span id="sizeError" style="color: red;"></span>
        </div>
        <div class="form-group">
            <label for="soluong">Số lượng</label>
            <input type="text" class="form-control" id="soluong" name="soluong" value="<?= $ctsanpham[0]['soluong'] ?>">
            <span id="soluongError" style="color: red;"></span>
        </div>
        <div class="mt-3 text-center">
            <input type="hidden" name="id_ctsp" value="<?php echo $ctsanpham[0]['id_ctsp'] ?>">
            <input type="hidden" name="id_sp" value="<?php echo $ctsanpham[0]['id_sp'] ?>">
            <input type="submit" name="capnhatctsp" id="" class="btn btn-primary" value="Cập nhật"></input>
            <input type="reset" class="btn btn-outline-primary" value="Nhập lại"></input>
            <a href="index.php?act=listctsp"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
</div>

<script>
    function validateFormUpdate() {
        var color = document.getElementById("color").value;
        var size = document.getElementById("size").value;
        var soluong = document.getElementById("soluong").value;

        var colorError = document.getElementById("colorError");
        var sizeError = document.getElementById("sizeError");
        var soluongError = document.getElementById("soluongError");

        colorError.innerHTML = "";
        sizeError.innerHTML = "";
        soluongError.innerHTML = "";

        if (color.trim() === "") {
            colorError.innerHTML = "Vui lòng nhập màu sản phẩm";
            return false;
        }

        if (size.trim() === "") {
            sizeError.innerHTML = "Vui lòng nhập size sản phẩm";
            return false;
        }

        if (soluong.trim() === "") {
            soluongError.innerHTML = "Vui lòng nhập số lượng sản phẩm";
            return false;
        }

        return true;
    }
</script>

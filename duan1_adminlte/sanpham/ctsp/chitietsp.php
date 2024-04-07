<div class="container">
    <h1>Chi Tiết Sản Phẩm</h1>
    <form action="index.php?act=addspct" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" id="color" name="color" >
            <span id="colorError" style="color: red;"></span>
        </div>
        <div class="form-group">
            <label for="size">Size</label>
            <input type="text" class="form-control" id="size" name="size" >
            <span id="sizeError" style="color: red;"></span>
        </div>
        <div class="form-group">
            <label for="soluong">Số lượng</label>
            <input type="text" class="form-control" id="soluong" name="soluong" >
            <span id="soluongError" style="color: red;"></span>
        </div>
        <div class="form-group">
            <label for="id_sp">Sản phẩm</label><br>
            <select name="id_sp" id="id_sp" >
                <option value="0">Chọn sản phẩm</option>
                <?php
                foreach ($listsp as $sanpham) {
                    extract($sanpham);
                    echo '<option value="' . $id . '">' . $name . '</option>';
                }
                ?>
            </select>
            <span id="id_spError" style="color: red;"></span>
        </div><br>
        <div class="mt-3 text-center">
            <input type="hidden" name="id_ctsp" value="<?php echo $id_ctsp; ?>">
            <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm">
            <input type="reset" class="btn btn-outline-primary" value="Nhập lại">
            <a href="index.php?act=listctsp"><button type="button" class="btn btn-outline-primary">Danh sách <i
                        class="fa-solid fa-right-long"></i></button></a>
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
    ?>
</div>

<script>
    function validateForm() {
        var color = document.getElementById("color").value;
        var size = document.getElementById("size").value;
        var soluong = document.getElementById("soluong").value;
        var id_sp = document.getElementById("id_sp").value;

        var colorError = document.getElementById("colorError");
        var sizeError = document.getElementById("sizeError");
        var soluongError = document.getElementById("soluongError");
        var id_spError = document.getElementById("id_spError");

        colorError.innerHTML = "";
        sizeError.innerHTML = "";
        soluongError.innerHTML = "";
        id_spError.innerHTML = "";

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

        if (id_sp === "0") {
            id_spError.innerHTML = "Vui lòng chọn sản phẩm";
            return false;
        }

        return true;
    }
</script>

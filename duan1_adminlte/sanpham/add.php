<div class="container">
    <h1>Thêm Sản Phẩm</h1>
    <form action="index.php?act=addsp" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="ten">Tên sản phẩm:</label>
            <input type="text" class="form-control" id="ten" name="name">
            <span id="tenError" style="color: red;"></span>
        </div>
        <div class="form-group">
            <label for="gia">Giá sản phẩm:</label>
            <input type="text" class="form-control" id="gia" name="price">
            <span id="giaError" style="color: red;"></span>
        </div>

        <div class="form-group">
            <label for="anh">Ảnh sản phẩm:</label>
            <input type="file" class="form-control-file" id="anh" name="img" accept="image/*">
            <span id="anhError" style="color: red;"></span>
        </div>

        <div class="form-group">
            <label for="mota">Mô tả sản phẩm:</label>
            <input type="text" class="form-control" id="mota" name="mota">
            <span id="motaError" style="color: red;"></span>
        </div>
        <div class="form-group">
            <label for="iddm">Danh mục:</label><br>
            <select name="iddm" id="iddm">
                <option value="0">Chọn danh mục</option>
                <?php
                foreach ($listdm as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $id . '">' . $name . '</option>';
                }
                ?>
            </select>
            <span id="iddmError" style="color: red;"></span>
        </div><br>

        <div class="mt-3 text-center">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" name="themmoi" class="btn btn-primary" value="Thêm" ></input>
            <input type="reset" class="btn btn-outline-primary" value="Nhập lại"></input>
            <a href="index.php?act=listsp"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
        </div>
    </form>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }
    ?>
</div>

<script>
    function validateForm() {
        var ten = document.getElementById("ten").value;
        var gia = document.getElementById("gia").value;
        var anh = document.getElementById("anh").value;
        var mota = document.getElementById("mota").value;
        var iddm = document.getElementById("iddm").value;

        var tenError = document.getElementById("tenError");
        var giaError = document.getElementById("giaError");
        var anhError = document.getElementById("anhError");
        var motaError = document.getElementById("motaError");
        var iddmError = document.getElementById("iddmError");

        tenError.innerHTML = "";
        giaError.innerHTML = "";
        anhError.innerHTML = "";
        motaError.innerHTML = "";
        iddmError.innerHTML = "";

        if (ten.trim() === "") {
            tenError.innerHTML = "Vui lòng nhập tên sản phẩm";
            return false;
        }

        if (gia.trim() === "") {
            giaError.innerHTML = "Vui lòng nhập giá sản phẩm";
            return false;
        }

        // Kiểm tra nếu người dùng chưa chọn ảnh
    if (anhInput.files.length === 0) {
        anhError.innerHTML = "Vui lòng chọn ảnh sản phẩm";
        return false;
    }

    // Kiểm tra nếu tệp chọn không phải là hình ảnh
    var allowedTypes = ["image/jpeg", "image/png", "image/gif"];
    if (allowedTypes.indexOf(anhInput.files[0].type) === -1) {
        anhError.innerHTML = "Vui lòng chọn một tệp hình ảnh hợp lệ";
        return false;
    }

        if (mota.trim() === "") {
            motaError.innerHTML = "Vui lòng nhập mô tả sản phẩm";
            return false;
        }

        if (iddm === "0") {
            iddmError.innerHTML = "Vui lòng chọn danh mục";
            return false;
        }

        return true;
    }
</script>

<?php
    if (is_array($dm)) {
        extract($dm);
    }
?>
<div class="container">
    <h2>Cập nhật danh mục </h2>
    <form action="index.php?act=updatedm" method="POST" onsubmit="return validateFormUpdateDM()">
        <div class="form-group">
            <label for="tendanhmuc">Tên danh mục</label>
            <input type="text" class="form-control" id="tendanhmuc" placeholder="Thêm tên danh mục" name="name" value="<?=$name?>">
            <span id="tendanhmucError" style="color: red;"></span>
        </div>
        <div class="mt-3 text-center">
            <input type="hidden" name="id" value="<?php if(isset($id) && ($id > 0)) echo $id ?>">
            <input type="submit" name="capnhat" class="btn btn-outline-primary" value="Cập nhật">
            <input type="reset" class="btn btn-outline-primary" value="Nhập lại">
        </div>
    </form>
    <a href="index.php?act=list_danhmuc"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
    <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
    ?>
</div>

<script>
    function validateFormUpdateDM() {
        var tendanhmuc = document.getElementById("tendanhmuc").value;
        var tendanhmucError = document.getElementById("tendanhmucError");

        tendanhmucError.innerHTML = "";

        if (tendanhmuc.trim() === "") {
            tendanhmucError.innerHTML = "Vui lòng nhập tên danh mục";
            return false;
        }

        return true;
    }
</script>

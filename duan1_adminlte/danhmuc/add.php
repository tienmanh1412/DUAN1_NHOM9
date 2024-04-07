<div class="container">
    <h2>Thêm danh mục</h2>
    <form action="index.php?act=adddm" method="POST" onsubmit="return validateForm()">
        <div class="form-group">
            <label for="tendanhmuc">Tên danh mục</label>
            <input type="text" class="form-control" id="name" placeholder="Thêm tên danh mục" name="name">
            <span id="nameError" style="color: red;"></span>
        </div>
        <div class="mt-3 text-center">
            <input type="submit" name="themmoi" id="" class="btn btn-outline-primary" value="Thêm mới">
            <input type="reset" name="" id="" class="btn btn-outline-primary" value="Nhập lại">
        </div>
    </form>
    <a href="index.php?act=list_danhmuc"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>
</div>

<script>
    function validateForm() {
        var name = document.getElementById("name").value;
        var nameError = document.getElementById("nameError");
        nameError.innerHTML = "";
        if (name.trim() === "") {
            nameError.innerHTML = "Vui lòng nhập tên danh mục";
            return false;
        }
        return true;
    }
</script>
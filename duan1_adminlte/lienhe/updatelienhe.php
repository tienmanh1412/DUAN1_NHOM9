<?php
if (is_array($lienhe)) {
    extract($lienhe);
}?>
<div class="container">
    <h2>Cập nhật liên hệ </h2>
    <form action="index.php?act=updatelh" method="POST">
    <div class="form-group">
            <label> Trạng thái: </label> <br>
            <select name="idlh" id="">
                <?php
                foreach ($listtt as $lien_he) {
                    extract($lien_he);
                    if ($trangthai == $id) {
                        echo '<option value="' . $id . '" selected>' . $tenTrangThai . '</option>';
                    } else {
                        echo '<option value="' . $id . '">' . $tenTrangThai . '</option>';
                    }
                }
                ?>
            </select>
           
        </div>
        <div class="mt-3 text-center">
        <input type="hidden" name="id" value="<?php echo $lienhe['id'] ?>">
            <input type="submit" name="capnhat" class="btn btn-outline-primary" value="Cập nhật">
            <input type="reset" class="btn btn-outline-primary" value="Nhập lại">
        </div>
    </form>
    <a href="index.php?act=dslh"><button type="button" class="btn btn-outline-primary">Danh sách <i class="fa-solid fa-right-long"></i></button></a>
    <?php
        if (isset($thongbao) && ($thongbao != ""))
            echo $thongbao;
    ?>
</div>



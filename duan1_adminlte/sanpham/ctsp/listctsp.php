
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Danh mục</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Chi Tiết Sản Phẩm</h2>      
        <table class="table table-striped">
        <thead>
            <tr>
                <th></th>
                <th>STT</th>
                <th>TÊN SẢN PHẨM</th>
                <th>MÀU</th>
                <th>KÍCH CỠ</th>
                <th>SỐ LƯỢNG</th>
                <th></th>
            </tr>
            <?php
                
            foreach ($listspct as $sp) {
                extract($sp);
                $xoactsp = "index.php?act=xoactsp&id_ctsp=" . $id_ctsp;
                $suactsp = "index.php?act=updatectsp&id_ctsp=" . $id_ctsp;
                echo '<tr>

                    <td><input type="checkbox" name="" id=""></td>
                    <td>' . $id_ctsp . '</td>
                    <td>' . $name . '</td>
                    <td>' . $color . '</td>
                    <td>' . $size . '</td>  
                    <td>' . $soluong . '</td>
                    <td>
                        <a href="'.$xoactsp.'" onclick="return confirm(\'Bạn có chắc chắn muốn xóa không?\');">
                            <input type="button" value="Xóa">
                        </a>
                        <a href="'.$suactsp.'"><input type="button" value="Sửa"></a>
                    </td>
                </tr>';
            }
            ?>
        </thead>
        </table>
        <button class="btn btn-primary">Chọn tất cả</button>
        <button class="btn btn-primary">Bỏ chọn tất cả</button>
        <a href="index.php?act=addspct"><button class="btn btn-primary">Thêm sản phẩm</button></a>
        <a href="index.php?act=listsp"><button class="btn btn-primary">Quay về</button></a>
    </div>
    <br><br>
</body>
</html>

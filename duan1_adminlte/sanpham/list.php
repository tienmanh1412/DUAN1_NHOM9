<h2>Sản Phẩm</h2>      
        <table class="table table-striped text-center">
        <thead>
            <tr>
                <th></th>
                <th>HÌNH</th>
                <th>TÊN SẢN PHẨM</th>
                <th>GIÁ</th>
                <th>MÔ TẢ</th>
                <th>NGÀY NHẬP</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php

            
             foreach ($listsp as $row) {
               
           
                $suasp = "index.php?act=suasp&id=" . $row['id'];
                $xoasp = "index.php?act=xoasp&id=" . $row['id'];
                $hinhpath = "../upload/" . $row['img'];
                $ctsp = "index.php?act=listctsp";
                if (isset($hinhpath)) {
                    $hinh = "<img src = '" . $hinhpath . "' height='70px'>";
                } else {
                    $hinh = "No photo";
                }
                echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' . $hinh . '</td>
                            <td>' . $row['name'] . '</td>
                            <td>' . number_format($row['price'], 0, ',', '.') . 'đ</td>
                            <td>' . $row['mota'] . '</td>
                            <td>' . $row['ngaynhapkhau'] . '</td>
                            <td><a href="' . $suasp . '"><input type="button" value="Sửa"></a>
                            <a onclick="return confirm(\'Bạn có muốn xóa không?\')" href="' . $xoasp . '"><input type="button" value="Xóa"></a>
                            <a href="' . $ctsp . '"><input type="button" value="Quản lý biến thể"></a></td>
                            </td>
                        </tr>';
             }
            ?>
        </tbody>
        </table>
        
        <br>
          <a href="index.php?act=addsp"><button class="btn btn-primary">Thêm sản phẩm</button></a>
    
    <br><br>
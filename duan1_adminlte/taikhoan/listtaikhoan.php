<style>
    .row input{
        margin-right: 10px;
    }
</style>
<div class="container">
    <h2>Danh sách tài khoản</h2>
    <form action="#" method="POST">
        <table class="table table-striped text-center">
            <thead>
                <tr>
                    <td></td>
                    <th>STT</th>
                    <th>Tên Tài Khoản</th>
                    <th>Ảnh </th>
                    <th>Số điện thoại</th>
                    <th>Email </th>
                    <th>Địa chỉ</th>
                    <th>Vai trò</th>
                    <td></td>

                </tr>
                <?php
                foreach ($listtaikhoan as $taikhoan) {
                    extract($taikhoan);
                    $xoataikhoan = "index.php?act=xoatk&id_tk=" . $id;
                    $suataikhoan = "index.php?act=suatk&id_tk=" . $id;
                    $hinhpath = "../upload/" . $avatar;

                    if (isset($hinhpath)) {
                        $hinh = "<img src = '" . $hinhpath . "' height='80px'>";
                    } else {
                        $hinh = "No photo";
                    }
                    if($role == 1){
                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$user.'</td>
                        <td>'.$hinh.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$role.'</td> 
                        <td><a href="' . $suataikhoan . '"><input type="button" value="Sửa"></a></td> 
                    </tr>';
                    }else{
                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$user.'</td>
                        <td>'.$hinh.'</td>
                        <td>'.$tel.'</td>
                        <td>'.$email.'</td>
                        <td>'.$address.'</td>
                        <td>'.$role.'</td> 
                        <td><a onclick="return confirm(\'Bạn có muốn xóa không?\')" href="'.$xoataikhoan.'"><input type="button" value="Xóa"></a>
                        <a href="' . $suataikhoan . '"><input type="button" value="Sửa"></a> 
                        </td>
                    </tr>';
                    }
                }
                ?>
            </thead>
        </table>
    </form>
</div>
   
<div class="container">
        <div class="mt-4">
        <h2>Danh sách bình luận</h2>
        <table class="table table-striped text-center">
            <thead>
            <tr>
                <th></th>
                <th>STT</th>
                <th>Nội dung bình luận</th>
                <th>Tài khoản bình luận</th>
                <th>Tên sản phẩm</th>
                <th>Ngày bình luận</th>
                <th></th>

            </tr>
            </thead>
            <tbody>
            <tr>
            <?php
                foreach ($listbinhluan as $binhluan){
                    extract($binhluan);
                    $xoabinhluan = "index.php?act=xoabinhluan&id=".$id;
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$noidung.'</td>
                    <td>'.$user.'</td>
                    <td>'.$name.'</td>
                    <td>'.$ngaybinhluan.'</td>
                    <td><a onclick="return confirm(\'Bạn có muốn xóa không?\')" href="'.$xoabinhluan.'"><input type="button" value="Xóa"></a></td>
                </tr>';
                }
            ?>
            </td>
            </tr>
            </tbody>
        </table>
    </div>
 </div>

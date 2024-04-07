<div class="container">
        <div class="mt-4">
        <h2>Danh sách bình luận</h2>
        <table class="table table-striped text-center">
            <thead>
            <tr>
                <th></th>
                <th>STT</th>
                <th>Tài khoản </th>
                <th>Tên khách hàng </th>
                <th>Email</th>
                <th>Nội dung </th>
                <th>Trạng thái</th>
                <th></th>

            </tr>
            </thead>
            <tbody>
            <tr>
            <?php
                foreach ($listlienhe as $lienhe){
                    extract($lienhe);
                    $sualh = "index.php?act=sualh&id=".$id;
                    echo '<tr>
                    <td><input type="checkbox" name="" id=""></td>
                    <td>'.$id.'</td>
                    <td>'.$user.'</td>
                    <td>'.$tenkh.'</td>
                    <td>'.$emailkh.'</td>
                    <td>'.$noidung.'</td>
                    <td>'.$tenTrangThai.'</td>
                    <td><a  href="'.$sualh.'"><input type="button" value="Sửa"></a></td>
                </tr>';
                }
            ?>
            </td>
            </tr>
            </tbody>
        </table>
    </div>
 </div>

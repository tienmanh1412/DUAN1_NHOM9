<?php
    include "../carbon/autoload.php";
    use Carbon\Carbon;
    use Carbon\CarbonInterval;
    session_start();
    ob_start();
    if(isset($_SESSION['role']) && $_SESSION['role'] == 1){


        include "../model/pdo.php";
        include "../model/danhmuc.php";
        include "../model/sanpham.php";
        include "../model/taikhoan.php";
        include "../model/binhluan.php";
        include "../model/donhang.php";
        include "../model/lienhe.php";
        include "../model/tintuc.php";
        include "../model/khuyenmai.php";


        include "header.php";
        
        if (isset($_GET['act'])) {
            $act = $_GET['act'];
            switch ($act) {
                // Danh mục
                case "adddm":
                    if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                        $name = $_POST['name'];
                        insert_danhmuc($name);
                        $thongbao = "Thêm thành công";
                    }
                    include "danhmuc/add.php";
                    break;

                case "list_danhmuc":
                    $listdm = loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;

                    

                case "xoadm":
                    if(isset($_GET['id']) && $_GET['id'] > 0){
                        $id = $_GET['id'];
                        $del = delete_cate($id);
                    }
                    $listdm = loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;
                case 'suadm':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $dm = loadone_danhmuc($_GET['id']);
                    }
                    include "danhmuc/update.php";
                    break;
                case 'updatedm':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $name = $_POST['name'];
                        $id = $_POST['id'];
                        update_danhmuc($id, $name);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listdm = loadall_danhmuc();
                    include "danhmuc/list.php";
                    break;

                    
                // Sản phẩm
                case 'addsp':
                    if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                        $iddm = $_POST['iddm'];
                        $name = $_POST['name'];
                        $price = $_POST['price'];
                        $mota = $_POST['mota'];
                        $filename = $_FILES['img']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["img"]["name"]);
                        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                            //echo
                        } else {
                            //
                        }
                        insert_sanpham($name, $price, $filename, $mota, $iddm);
                        $thongbao = "Thêm thành công";
                    }
                    $listdm = loadall_danhmuc();
                    include "sanpham/add.php";
                    break;
                case 'listsp':
                    if (isset($_POST['clickok']) && ($_POST['clickok'])) {
                        $kw = $_POST['kw'];
                        $iddm = $_POST['iddm'];
                    } else {
                        $kw = '';
                        $iddm = 0;
                    }
                    $listdm = loadall_danhmuc();
                    $listsp = loadall_sanpham($kw, $iddm);
                    include "sanpham/list.php";
                    break;
                case 'xoasp':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        delete_sanpham($_GET['id']);
                    }
                    $listsp = loadall_sanpham("", 0);
                    include "sanpham/list.php";
                    break;
                case 'suasp':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $sanpham = loadone_sanpham($_GET['id']);
                    }
                    $listdm = loadall_danhmuc();
                    include "sanpham/update.php";
                    break;


                 


                case 'updatesp':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $id = $_POST['id'];
                        $iddm = $_POST['iddm'];
                        $name = $_POST['name'];
                        $price = $_POST['price'];
                        $mota = $_POST['mota'];
                        $img = $_FILES['img']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES['img']['name']);
                        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                            //echo 
                        } else {
                            //
                        }
                        update_sanpham($id, $name, $price, $img, $mota, $iddm);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listdm = loadall_danhmuc();
                    $listsp = loadall_sanpham("", 0);
                    include "sanpham/list.php";
                    break;
                // Chi tiết sản phẩm
                case "listctsp":
                    $listspct = loadall_spct();
                    include "sanpham/ctsp/listctsp.php";
                    break;

                case 'addspct':
                    if (isset($_POST['themmoi'])) {
                        $color = $_POST['color'];
                        $size = $_POST['size'];
                        $soluong = $_POST['soluong'];
                        $id_sp = $_POST['id_sp'];
                        insert_chitietsp($color, $size, $soluong, $id_sp);
                        $thongbao = "Thêm thành công";
                    }
                    $listsp = loadall_sanpham("", 0);
                    include "sanpham/ctsp/chitietsp.php";
                    break;
                case 'updatectsp':
                    if (isset($_GET['id_ctsp']) && ($_GET['id_ctsp'] > 0)) {
                        $ctsanpham = loadone_chitietsp($_GET['id_ctsp']);
                    }
                    $listsp = loadall_sanpham("", 0);
                    include "sanpham/ctsp/update.php";
                    break;
                case 'postupdatectsp':
                    if (isset($_POST['capnhatctsp']) && ($_POST['capnhatctsp'])) {
                        $id_ctsp = $_POST['id_ctsp'];
                        $id_sp = $_POST['id_sp'];
                        $color = $_POST['color'];
                        $size = $_POST['size'];
                        $soluong = $_POST['soluong'];
                        update_ctsanpham($id_ctsp, $id_sp, $color, $size, $soluong);
                        $thongbao = "Cập nhật thành công";
                    }
                    $listsp = loadall_sanpham("", 0);
                    $listspct = loadall_spct();
                    include "sanpham/ctsp/listctsp.php";
                    break;
                case 'xoactsp':
                    if (isset($_GET['id_ctsp']) && ($_GET['id_ctsp'] > 0)) {
                        delete_ctsanpham($_GET['id_ctsp']);
                    }
                        $listspct = loadall_spct("", 0);
                        include "sanpham/ctsp/listctsp.php";
                    break;
                // Danh sách tài khoản
                case 'dskh':
                    $listtaikhoan = loadall_taikhoan();

                    include "taikhoan/listtaikhoan.php";
                    break;
                case 'xoatk':
                    if(isset($_GET['id_tk']) && ($_GET['id_tk'] > 0)){
                        delete_taikhoan($_GET['id_tk']);
                    }
                    $listtaikhoan= loadall_taikhoan();
                    include "taikhoan/listtaikhoan.php";
                    break;
                    case 'suatk':
                        if(isset($_GET['id_tk']) && ($_GET['id_tk'] > 0)){
                            $tk = loadone_taikhoan($_GET['id_tk']);
                        }
                       
                        $listtaikhoan= loadall_taikhoan();
                        include "taikhoan/updatetk.php";
                        break;
                    case 'updatetk':
                        if(isset($_POST['suatk']) && ($_POST['suatk'])){
                            $id = $_POST['id'];
                            $name = $_POST['name'];
                            $pass = $_POST['pass'];
                            $email = $_POST['email'];
                            $tel = $_POST['tel'];
                            $address = $_POST['address'];
                            $img = $_FILES['avatar']['name'];
                            $target_dir = "../upload/";
                            $target_file = $target_dir . basename($_FILES['avatar']['name']);
                            if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                                //echo 
                            } else {
                                //
                            }
                            update_taikhoan($id,$name,$pass,$email,$img,$tel,$address);
                            $thongbao = "Cập nhật thành công";
                        }
                        $listtaikhoan = loadall_taikhoan();
                        $listcv = loadall_chucvu();
                        include "taikhoan/listtaikhoan.php";
                        break;
                // Danh sách bình luận
                case 'dsbl':
                    $listbinhluan = loadall_xembinhluan();
                    include "binhluan/listbinhluan.php";
                    break;
                case 'xoabinhluan':
                    if(isset($_GET['id'])&& ($_GET['id']>0)){
                        delete_binhluan($_GET['id']);
                    }
                    $listbinhluan = loadall_xembinhluan();
                    include "binhluan/listbinhluan.php";
                    break;
                      // danh sách liên hệ
                      case 'dslh':
                        $listlienhe = loadall_xemlienhe();
                        include "lienhe/listlienhe.php";
                        break;
                        case 'sualh':
                            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                                $lienhe = loadone_lienhe($_GET['id']);
                            }
                            $listtt = loadall_trangthai_lh();
                            include "lienhe/updatelienhe.php";
                            break;
                            case 'updatelh':
                                if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                                    $id = $_POST['id'];
                                    $idlh = $_POST['idlh'];
                                    update_lienhe($id, $idlh);
                                    $thongbao = "Cập nhật thành công";
                                }
                                $listtt = loadall_trangthai_lh();
                                $listlienhe = loadall_xemlienhe();
                                include "lienhe/listlienhe.php";
                                break;
                                
                 case 'dsbl':
                    $listbinhluan = loadall_xembinhluan();
                    include "binhluan/listbinhluan.php";
                    break;
                case 'xoabinhluan':
                    if(isset($_GET['id'])&& ($_GET['id']>0)){
                        delete_binhluan($_GET['id']);
                    }
                    $listbinhluan = loadall_xembinhluan();
                    include "binhluan/listbinhluan.php";
                    break;
                // danh sách khuyến mại
                case 'dskm':
                    $listkm = loadall_km();
                    include "khuyenmai/listkm.php";
                    break;
                case 'suakm':
                    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                        $khuyenmai = load_km_by_id($_GET['id']);
                    }
                    include "khuyenmai/updatekm.php";
                    break;
                    case 'updatekm':
                        if (isset($_POST['capnhat'])) {
                            // Lấy các giá trị từ form
                            $id_voucher = $_POST['id'];
                            $ma_voucher = $_POST['ma_voucher'];
                            $soluong_voucher = $_POST['soluong_voucher'];
                            $loai_khuyenmai = $_POST['loai_khuyenmai'];
                            $so_tien_giam = $_POST['so_tien_giam'];
                            $ngaybatdau = $_POST['ngaybatdau'];
                            $ngayketthuc = $_POST['ngayketthuc'];
                    
                            // Gọi hàm update_khuyenmai với các tham số đúng
                            update_khuyenmai($id_voucher, $ma_voucher, $soluong_voucher, $loai_khuyenmai,$so_tien_giam ,$ngaybatdau, $ngayketthuc);
                            $thongbao = "Cập nhật thành công";
                        }
                        $listkm = loadall_km();
                        include "khuyenmai/listkm.php";
                        break;
                        case 'addkm':
                            // Kiểm tra nếu có dữ liệu gửi từ form
                            if (isset($_POST['them']) && ($_POST['them'])) {
                                // Lấy dữ liệu từ form
                                $ma_voucher = $_POST['ma_voucher'];
                                $soluong_voucher = $_POST['soluong_voucher'];
                                $loai_khuyenmai = $_POST['loai_khuyenmai'];
                                $so_tien_giam = $_POST['so_tien_giam'];
                                $ngaybatdau = $_POST['ngaybatdau'];
                                $ngayketthuc = $_POST['ngayketthuc'];
                    
                                // Thêm khuyến mãi vào cơ sở dữ liệu
                                $result = add_khuyenmai($ma_voucher, $soluong_voucher, $loai_khuyenmai, $so_tien_giam, $ngaybatdau, $ngayketthuc);
                                
                                // Kiểm tra kết quả và hiển thị thông báo tương ứng
                                if ($result) {
                                    $thongbao = "Thêm khuyến mãi thành công";
                                } else {
                                    $thongbao = "Thêm khuyến mãi thất bại. Vui lòng thử lại.";
                                }
                            }
                            // Nạp trang thêm khuyến mãi
                            include "khuyenmai/addkm.php";
                            break;
                            case 'deletekm':
                                // Kiểm tra nếu có dữ liệu gửi từ form
                                if (isset($_GET['id'])) {
                                    $id_voucher = $_GET['id'];
                                    // Thực hiện xóa khuyến mãi
                                    $result = delete_khuyenmai($id_voucher);
                                    
                                }
                                // Nạp lại trang danh sách khuyến mãi sau khi xóa
                                $listkm = loadall_km();
                                include "khuyenmai/listkm.php";
                                break;
                case "xuly":
                    $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
                    if(isset($_GET['cart_status']) && isset($_GET['code'])){
                        $status = $_GET['cart_status'];
                        $code = $_GET['code'];
                        cart_status($status, $code);
                        $tk_dh = tk_donhang($code);
                        extract($tk_dh);
                        $tk_time = tk_ngaydat($now);
                        extract($tk_time);
                        $soluongmua = 0;
                        $doanhthu = 0;
                        $soluongmua = $tk_dh[0]['soluong'];
                        $doanhthu = $tk_dh[0]['thanh_tien'];
                        if($tk_time[0]['ngaydat'] == 0){
                            $soluongban = $soluongmua;
                            $doanhthu = $doanhthu;
                            $donhang = 1;
                            insert_thongke($now, $donhang, $doanhthu, $soluongban);
                        }else if($tk_time[0]['ngaydat'] != 0){
                            $soluongban = $tk_time[0]['soluongban'] + $soluongmua;
                            $doanhthu = $tk_time[0]['doanhthu'] + $doanhthu;
                            $donhang = $tk_time[0]['donhang'] + 1;
                            update_thongke($donhang, $doanhthu, $soluongban, $now);
                        }
                    }
                    header("Location:index.php?act=donhang");
                    break;
                case 'donhang':
                    $list_donhang = loadall_donhang();
                    include "donhang/listdh.php";
                    break;
                case 'xoadh':
                    if (isset($_GET['id_dh']) && ($_GET['id_dh'] > 0)) {
                        delete_donhang($_GET['id_dh']);
                    }
                    $list_donhang = loadall_donhang("", 0);
                    include "donhang/listdh.ph";
                    break;
                    
                case 'suadh':
                    if (isset($_GET['id_dh']) && ($_GET['id_dh'] > 0)) {
                        $dh = loadone_donhang($_GET['id_dh']);
                        $list_ctdonhang = loadall_trangthai(); 
                        $ctdh = ctdh($_GET['id_dh']);
                    }
                    include "donhang/updatedh.php";
                    break;
                
                case 'updatedh':
                    if (isset($_POST['suadh']) && ($_POST['suadh'])) {
                        $id = $_POST['id'];
                        $id_trangthai = $_POST['id_trangthai'];
                        $update_tt = update_donhang($id, $id_trangthai);
                        if ($update_tt === "Cập nhật trạng thái thành công") {
                            echo "<script>alert('Cập nhật trạng thái thành công');</script>";
                        } else {
                            echo "<script>alert('Cập nhật không thành công');</script>";
                        }
                    }
                    $list_donhang = loadall_donhang();
                    include "donhang/listdh.php";
                    break;
                    
                    case 'thoat':
                        unset($_SESSION['role']);
                        header("Location: ../index.php");
                        break;
                // Thống kê
                case "thongke":
                    $top3_sp = top3_sp(); 
                    include "thongke/list.php";
                    break;
                }
        }else {
            include "home.php";
        }
    include 'footer.php'; 
    }
     else{
        header("Location: ../index.php?act=login");
    }
     ?>

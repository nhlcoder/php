<?php
    $act = 'hanghoa';
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
    }
    switch($act) {
        case 'hanghoa': 
            include "./View/hanghoaadmin.php";
            break;
        case 'edit':
            include "./View/edithanghoaadmin.php";
            break;
        case 'themsp':
            include "./View/edithanghoaadmin.php";
            break;
        case 'edit_action':
            if(isset($_GET['id']))
            {
                $mahh=$_GET['id'];
                $tenhh=$_POST['tenhh'];
                $dongia=$_POST['dongia'];
                $giamgia=$_POST['giamgia'];
                $hinh=$_FILES['image']['name'];
                $Nhom=$_POST['nhom'];
                $maloai=$_POST['maloai'];
                $dacbiet=$_POST['dacbiet'];
                $soluotxem=$_POST['slx'];
                $ngaylap=$_POST['ngaylap'];
                $mota=$_POST['mota'];
                $soluongton=$_POST['slt'];
                $mausac=$_POST['mausac'];

                $hh=new hanghoaadmin();

                $checkup  =$hh->updatesp($mahh,$tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$dacbiet,$soluotxem,$ngaylap,$mota,$soluongton,$mausac);
                if($checkup !== false)
                {
                    uploadhinh();
                    echo '<script> alert("Update thành công");</script>';
                    include("./View/hanghoaadmin.php");
                }
                else
                {
                    echo '<script> alert("Update không thành công");</script>';
                    include('./view/edithanghoaadmin.php');
                }
            break;
            }
        case 'themsp_action':
            $tenhh=$_POST['tenhh'];
            $dongia=$_POST['dongia'];
            $giamgia=$_POST['giamgia'];
            $hinh=$_FILES['image']['name'];
            $Nhom=$_POST['nhom'];
            $maloai=$_POST['maloai'];
            $dacbiet=$_POST['dacbiet'];
            $soluotxem=$_POST['slx'];
            $ngaylap=$_POST['ngaylap'];
            $mota=$_POST['mota'];
            $soluongton=$_POST['slt'];
            $mausac=$_POST['mausac'];
            //đem toàn bộ thông tin này update vap2 database
            $hh=new hanghoaadmin();
            $checkinsert=$hh->insertsp($tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$dacbiet,$soluotxem,$ngaylap,$mota,$soluongton,$mausac);
            if($checkinsert !== false)
            {
                uploadhinh();
                echo '<script> alert("insert thành công");</script>';
                include("./View/hanghoaadmin.php");
            }
            else
            {
                echo '<script> alert("insert không thành công");</script>';
                include('./view/edithanghoaadmin.php');
            }
            break;
        case 'delete':
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $hh=new hanghoaadmin();
                $hh->deletesp($id);
                echo '<script> alert("Delete thành công");</script>';
                include "./View/hanghoaadmin.php";
            }
            break;
    }
?>
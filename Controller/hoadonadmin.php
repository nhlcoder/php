<?php
    $act = 'hoadonadmin';
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
    }
    switch($act) {
        case 'hoadonadmin': 
            include "./View/hoadonadmin.php";
            break;
        case 'edit':
            include "./View/edithoadonadmin.php";
            break;
        case 'themsp':
            include "./View/edithoadonadmin.php";
            break;
        case 'edit_action':
            if(isset($_GET['id']))
            {
                $masohd=$_GET['id'];
                $makh=$_POST['makh'];
                $ngaydat=$_POST['ngaydat'];
                $tongtien=$_POST['tongtien'];

                $hh=new hoadonadmin();

                $checkup  =$hh->updatehoadon($masohd,$makh,$ngaydat,$tongtien);
                if($checkup !== false)
                {
                    // uploadhinh();
                    echo '<script> alert("Update thành công");</script>';
                    include("./View/hoadonadmin.php");
                }
                else
                {
                    echo '<script> alert("Update không thành công");</script>';
                    include('./view/edithoadonadmin.php');
                }
            break;
            }
        case 'delete':
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $hh=new hoadonadmin();
                $hh->deletesp($id);
                echo '<script> alert("Delete thành công");</script>';
                include "./View/hoadonadmin.php";
            }
            break;
    }
?>
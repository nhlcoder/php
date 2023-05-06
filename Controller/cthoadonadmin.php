<?php
    $act = 'cthoadon';
    if(isset($_GET['act'])) {
        $act = $_GET['act'];
    }
    switch($act) {
        case 'cthoadon': 
            include "./View/cthoadonadmin.php";
            break;
        case 'edit':
            include "./View/editcthoadonadmin.php";
            break;
        case 'themsp':
            include "./View/editcthoadonadmin.php";
            break;
        case 'edit_action':
            if(isset($_GET['id']))
            {
                $masohd=$_GET['id'];
                $mahh=$_POST['mahh'];
                $soluongmua=$_POST['soluongmua'];
                $mausac=$_POST['mausac'];
                $thanhtien=$_POST['thanhtien'];
                $tinhtrang=$_POST['tinhtrang'];

                $hh=new cthoadonadmin();

                $checkup  =$hh->updatesp($masohd,$mahh,$soluongmua,$mausac,$thanhtien,$tinhtrang);
                if($checkup !== false)
                {
                    // uploadhinh();
                    echo '<script> alert("Update thành công");</script>';
                    include("./View/cthoadonadmin.php");
                }
                else
                {
                    echo '<script> alert("Update không thành công");</script>';
                    include('./view/editcthoadonadmin.php');
                }
            break;
            }
        case 'delete':
            if(isset($_GET['id']))
            {
                $id=$_GET['id'];
                $hh=new cthoadonadmin();
                $hh->deletesp($id);
                echo '<script> alert("Delete thành công");</script>';
                include "./View/cthoadonadmin.php";
            }
            break;
    }
?>
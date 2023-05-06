<?php
    $act="dangnhap";
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
    }
    switch ($act){
        case 'dangnhap':
            include "./View/dangnhap.php";
            break;
        case 'dangnhap_action':
            // echo 'Duy';
            if(isset($_POST['txtusername']) && isset($_POST['txtpassword']))
            {
                $user = $_POST['txtusername'];
                $pass = $_POST['txtpassword'];

                $cdau = 'GHT%#';
                $ccuoi = '&TUY9';
                $crypt = md5($cdau.$pass.$ccuoi);

                $dn = new admin();   
                $checkadmin = $dn->getAdmin($user, $crypt);
                if($checkadmin != false)
                {
                    $_SESSION['admin'] = $checkadmin[0];
                    $_SESSION['user'] = $checkadmin['user'];
                    echo '<script> alert("Đăng nhập thành công"); </script>';
                    echo '<meta http-equiv=refresh content="0;url=./index.php?action=hanghoaadmin"/>';
                }
                else{
                    echo '<script> alert("Đăng nhập ko thành công"); </script>';
                    include "./View/dangnhap.php";
                }
            }
            break;
        case 'logout':
            if(isset($_SESSION['user'])){
                unset($_SESSION['user']);
            }
            echo '<meta http-equiv="refresh" content="0; url=./index.php?action=iPhone"';
            break;
    }
?>
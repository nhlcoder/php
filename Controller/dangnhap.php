<?php
    $act = 'dangnhap';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case 'dangnhap':
            include './View/login.php';
            break;
        case 'dangnhap_action':
            echo 'Duy';
            //Gui qua user name, pass
            if(isset($_POST['txtusername']) && isset($_POST['txtpass'])){
                $username = $_POST['txtusername'];
                $password = $_POST['txtpass'];

                $cdau = 'GHT%#';
                $ccuoi = '&TUY9';
                $crypt = md5($cdau.$password.$ccuoi);
                //Controller yeu cau kiem tra
                $ur = new user();
                $urs = $ur->loginUser($username,$crypt);
                //$urs[makh=25,tenkh=dat,username=dat,matkhau=...]


                if($urs == true){
                    //Khi dang nhap thanh cong, muon cho cac trang khac thay thi no phai luu vao session
                    $_SESSION['makh'] = $urs['makh'];//25
                    $_SESSION['tenkh'] = $urs['tenkh'];//dat
                    $_SESSION['username'] = $urs['username'];//dat
                    echo '<script> alert("Dang nhap thanh cong")</script>';
                    echo '<meta http-equiv="refresh" content="0; url=./index.php?action=iPhone"/>';
                
                }else{
                    echo '<script> alert("Dang nhap khong thanh cong")</script>';
                    include "View/registration.php";
                }
            }
            break;
        case 'logout':
            if(isset($_SESSION['makh'])){
                unset($_SESSION['makh']);
                unset($_SESSION['tenkh']);
                unset($_SESSION['username']);
                unset($_SESSION['cart']);
            }
            echo '<meta http-equiv="refresh" content="0; url=./index.php?action=iPhone"';
            break;
    }
?>
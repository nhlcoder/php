<?php
    $act="dangky";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];
    }
    switch($act){
        case 'dangky':
            include "./View/registration.php";
            break;
        case 'dangky_action':
            //truyền qua thông tin dang ky
            if(isset($_POST['txttenkh']))
            {
                $tenkh = $_POST['txttenkh'];
                $username = $_POST['txtusername'];
                $password = $_POST['txtpass'];
                $email = $_POST['txtemail'];
                $diachi = $_POST['txtdiachi'];
                $dt = $_POST['txtsodt'];
                $cdau='GHT%#';
                $ccuoi='&TUY9';
                $crypt = md5($cdau.$password.$ccuoi);
                //controller yeu cau model viết lệnh insert vào trong database
                $ur = new user();
                $check=$ur->CkeckUserName($username);
                if($check == false)
                {
                    $ur->InsertUser($tenkh, $username, $crypt, $email, $diachi, $dt);
                    if($ur->InsertUser($tenkh, $username, $crypt, $email, $diachi, $dt) !='false')
                    {
                        echo '<script> alert("Đăng ký thành công") </script>';
                        include "./View/home.php";
                    }
                    else{
                        echo '<script> alert("Đăng ký không thành công") </script>';
                        include "./View/registration.php";
                    }
                }
                else{
                    echo '<script> alert("Username đã tồn tại, vui lòng chọn user khác") </script>';
                    include "./View/registration.php";
                }

            }
            break;
    }
?>
<?php
    $act = "forgetps";
    if(isset($_GET['act']))
    {
        $act = $_GET['act'];
    }
    switch ($act) {
        case 'forgetps':
            include "./View/forgetpassword.php";
            break;
        case 'forgetps_action' :
            if(isset($_POST['submit_email']))
            {
                $email = $_POST['email'];
                $_SESSION['email'] = array();
                //kiểm jtra dia chi email nay co ton tai trong database khong
                $usr = new user();
                $checkemail = $usr->getEmail($email);
                if($checkemail != false)
                {
                    //cấp mã code cho người dùng
                    $code = random_int(1000, 10000);
                    //tạo ra đối tuong
                    $item = array(
                        'code' => $code,
                        'email' => $email,
                    );
                    $_SESSION['email'][] = $item;
                    //tiến hành gửi email xdryghruuiucmavr
                    $mail = new PHPMailer;
                    $mail->IsSMTP();
                    $mail->Host = 'smtp.gmail.com';
                    $mail->Port = 587;
                    $mail->SMTPAuth = true;
                    $mail->Username = '';
                    $mail->Password = '';
                    $mail->SMTPSecure = 'tls';
                    $mail->From = '';
                    $mail->FromName = 'Duy';
                    $mail->AddAddress($email, 'Reset password');
                    $mail->WordWrap = 50;
                    $mail->IsHTML(true);
                    $mail->Subject = 'Reset password';
                    $mail->Body = 'Cấp mã code'.$code;
                    if($mail->Send())
                    {
                        echo '<script> alert("Gửi mail thành công"); </script>';
                        include "./View/resetpw.php";
                    }
                    else{
                        echo '<script> alert("Gửi mail Thất bại"); </script>';
                        include "./View/forgetpassword.php";
                    }
                }
                else{
                    echo '<script> alert("Địa chỉ email không tồn tại"); </script>';
                    include "./View/forgetpassword.php";
                }
            }
            break;
        case 'resetps':
            if(isset($_POST['submit_password']))
            {
                $codeold = $_POST['password'];
                $flag = false;
                //kiểm tra codeld co ton tại tron session hay ko
                foreach($_SESSION['email'] as $key=>$item)
                {
                    if($item['code'] == $codeold)
                    {
                        $cdau = 'GHT%#';
                        $ccuoi = '&TUY9';
                        $codenew = md5($cdau.$codeold.$ccuoi);
                        $emailold = $item['email'];
                        $flag = true;
                        //tiến hành update
                        $usr = new user();
                        $usr->UpdatePassword($emailold, $codenew);
                        include "./View/login.php";
                    }
                }
                if($flag == false)
                {
                    echo '<script> alert("Code không tồn tại"); </script>';
                    include "./View/resetpw.php";
                }
            }
            break;
    }
?>
<?php
    $act = "forgetps";
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case 'forgetps':
            include "./View/forgetpassword.php";
            break;
        case 'forgetps_action':
            // Lay dia chi email kiem tra
            if(isset($_GET['submit_email'])){
                $email = $_POST['email'];
                $_SESSION['email'] = array();
                // Kiem tra dia chi email nay co ton tai trong database khong
                $usr=new user();
                $checkemail = $usr->getEmail($email);
                if($checkemail!=false){
                    // Cap ma code cho nguoi dung
                    $code = random_int(1000,10000);
                    // Tao ra doi tuong
                    $item = array(
                        'code' => $code,
                        'email' => $email,
                    );
                    $_SESSION['email'][] = $item;
                    // Tien hanh gui mail
                    $mail = new PHPMailer;
                    $mail->IsSMTP(); // Set Mailer to send message using smtp
                    $mail->Host = 'smtp.gmail.com'; // Sets the SMTP hosts of your Email hosting, this for Godaddy
                    $mail->Port = 587; // Set the default SMTP sever Port
                    $mail->SMTPAuth = true; // Sets SMTP Authentication. Utilizer the Username and Password
                    $mail->Username = ''; // Set SMTP Username
                    $mail->Password = ''; // Set SMTP Password
                    $mail->SMTPSecure = 'tls'; // Set connection prefix. Options are "", "ssl" or "tls"
                    $mail->From = ''; // Sets the from Email address for the message
                    $mail->FromName = 'LYNH'; // Sets the from name of the message
                    $mail->AddAddress($email, 'Reset Password'); // Adds a "To" address
                    // $mail -> AddCC($_POST["email"], $_POST["name"]); // Adds a "CC" address
                    $mail->WordWrap = 50; // Set word warpping on the body of the message to a given
                    $mail -> IsHTML(true); // Sets the message type to HTML
                    $mail -> Subject = 'Reset Password'; // Sets the Subject of the message
                    $mail -> Body = 'Cap ma code' .$code; // An HTML or plain text message body
                    if($mail->Send()){ // Send an Email. Return true on success or false on error
                        echo '<script>alert("Gui mail thanh cong");</script>';
                        include './View/resetpw.php';
                    }else{
                        echo '<script>alert("Gui mail that bai");</script>';
                        include './View/forgetpassword.php';
                    }

                }else{
                    echo '<script>alert("Dia chi mail khong ton tai");</script>';
                    include './View/resetpw.php';
                }
            }
            break;
        case 'resetps':
            if(isset($_POST['submit_password'])){
                $codeold = $_POST['password'];
                $flag = false;
                // Kiem tra code old co ton tai trong session hay khong
                foreach($_SESSION['email'] as $key => $item){
                    if($item['code'] == $codeold){
                        $cdau = 'LY';
                        $ccuoi = 'NH';
                        $codenew = md5($cdau.$codeold.$ccuoi);
                        $emailold = $item['email'];
                        $flag = true;
                        // Tien hanh update
                        $usr = new user();
                        $usr->UpdatePassword($emailold, $codenew);
                        include './View/login.php';
                    };
                }
            }
            break;
    }
?>
<?php
    class user{
        public function __construct(){}
        function InsertUser($tenkh, $user, $matkhau, $email, $diachi, $dt){
            $db = new connect();
            $query = "insert into khachhang1(makh,tenkh,username,matkhau,email,diachi,sodienthoai,vaitro)
            values(NULL,'$tenkh','$user','$matkhau','$email','$diachi','$dt',default)";

            $db->exec($query);
        }
        function CkeckUserName($username)
        {
            $db=new connect();
            $select="select * from khachhang1 where username='$username'";
            echo $select;
            $result=$db->getInstance($select);
            return $result;
        }

        function loginUser($username,$pass)
        {
            $db=new connect();
            $select="select * from khachhang1 where username='$username' and matkhau='$pass'";
            echo $select;
            $result=$db->getInstance($select);
            return $result;
        }
        function getEmail($email){
            $db =  new connect();
            $select = "select * from khachhang1 where email = '$email'";
            // echo $select;
            $result = $db->getInstance($select);
            return $result; // True thong tin cua 1 user
        }

        // Update pass
        function UpdatePassword($emailold, $codenew){
            $db = new connect();
            $query = "update khachhang1 set matkhau = '$codenew' where email = '$emailold'";
            $db->exec($query);
        }
    }
?>
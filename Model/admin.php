<?php
    class admin{
        public function __construct(){}

        public function getAdmin($user, $pass)
        {
            $db=new connect();
            $select="select * from admin where user ='$user' and password='$pass'";
            $result=$db->getInstance($select);
            return $result;
        }
        function getEmail($email){
            $db =  new connect();
            $select = "select * from admin where email = '$email'";
            // echo $select;
            $result = $db->getInstance($select);
            return $result; // True thong tin cua 1 user
        }

        // Update pass
        function UpdatePassword($emailold, $codenew){
            $db = new connect();
            $query = "update admin set password = '$codenew' where email = '$emailold'";
            $db->exec($query);
        }
    }
?>
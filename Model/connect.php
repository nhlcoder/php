<?php
    class connect{
        //Thuoc tinh
        var $db = null;
        //PDB(dsn, user, pass)
        //Ham tao
        public function __construct(){
            $dsn = 'mysql:host=localhost;dbname=ishop';
            $user='root';
            $pass='root';
            try{
                $this -> db = new PDO($dsn, $user, $pass,
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                // echo 'Thanh cong';
            }catch(\Throwable $th){
                echo 'That bai';
                echo $th;
            }
        }
        //Hoan thanh thu tuc test thu ket noi data base


        //Phuong thuc hien thi cau lenh select va tra ve nhieu Object
        public function getList($select){//SELECT * FROM hanghoa
            $result = $this->db->query($select);
            return $result;
        }
        //Phuong thuc hien thi cau lenh select va tra ve mot
        public function getInstance($select){//SELECT * FROM hanghoa ORDER by mahh
            $results = $this->db->query($select);//SELECT * FROM hanghoa ORDER by mahh
            $result = $results->fetch();
            return $result;//result la array [mahh=>16,tenhh=>giay,dongia=>600..]
        }
        //Phuong thuc thuc thi cau lenh insert update delete
        public function exec($query){
            $result = $this->db->exec($query);
            return $result;
        }
    }
?>
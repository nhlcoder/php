<?php
    class loai{
        function __construct(){}

        public function getLoai(){
            $db=new connect();
            $select="select * from loai";
            $result=$db->getList($select);
            return $result;
        }
    }
?>
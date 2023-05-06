<?php
    class iPhone{
        //Thuoc tinh
        //Ham tao
        public function __construct(){}
        //Get iPhone
        public function getiPhone(){
            //B1: Ket noi data base
            $db = new connect();
            //B2: Viet cau truy van du lieu
            $select = "SELECT * FROM hanghoa";
            //B3: Thuc thi
            $result = $db->getList($select);
            return $result;
        }
        //Hoan thanh thu tuc test thu ket noi data base

        //Phuong thuc lay thong tin cua 1 san pham
        public function getHangHoaId($id){
            $db = new connect();
            $select = "select * from hanghoa WHERE mahh=$id";
            $result = $db->getInstance($select);
            return $result;
        }

        public function getHangHoaNhom($nhom){
            $db = new connect();
            //B2: viet cau truy van du lieu
            $select = "select mausac,hinh FROM hanghoa WHERE Nhom = $nhom";
            //B3: Thuc thi
            $result = $db -> getList($select);
            return $result;
        }

        // Phuong thuc tim so luong hang hoa
        public function getCount(){
            $db=new connect();
            $select="select count(*) from hanghoa";
            $result=$db->getInstance($select);
            return $result[0]; // Bang dang mang
        }

        // Phan trang
        public function getListHangHoaAllPage($start,$limit){ // 8,8
            $db=new connect();
            $select="select * from hanghoa limit ".$start.",".$limit;
            // echo $select;
            $results=$db->getList($select);
            return $results;
        }

        // Search
        function getListSearch($search){
            $db = new connect();
            $select = "select * from hanghoa where tenhh like '%$search%' ";
            $result = $db->getList($select);
            return $result;
        }

        function getThongKeMatHang()
        {
            $db=new connect();
            $select="select a.tenhh,sum(b.soluongmua) as soluong 
            FROM hanghoa a, cthoadon1 b 
            where a.mahh=b.mahh group by a.tenhh";
            $result=$db->getList($select);
            return $result;
        }
        function getbaocao_Quy()
        {
            $db = new connect();
            $select = "select a.tenhh, sum(b.soluongmua) as soluong
            from hanghoa a,cthoadon1 b, hoadon1 c where a.mahh=b.mahh and c.masohd=b.masohd
            and day(ngaylap) =8 and month(ngaylap) = 8 and year(ngaylap) =2020 group by a.tenhh";
            $result = $db->getList($select);
            return $result;
        }

    }
?>
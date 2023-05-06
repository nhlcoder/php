<?php
    class hanghoaadmin {
        public function __construct(){}

        public function getHangHoaAll()
        {
            $db=new connect();
            $select="select * from hanghoa";
            $result=$db->getList($select);
            return $result;
        }

        public function getHangHoaID($id)
        {
            $db=new connect();
            $select="select * from hanghoa where mahh=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        function updatesp($id,$tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$dacbiet,$soluotxem,$ngaylap,$mota,$soluongton,$mausac)
        {
            $db=new connect();
            $query="update hanghoa
                    set tenhh='$tenhh',
                    dongia=$dongia,
                    giamgia=$giamgia,
                    hinh='$hinh',
                    Nhom=$Nhom,
                    maloai=$maloai,
                    dacbiet=$dacbiet,
                    soluotxem=$soluotxem,
                    ngaylap='$ngaylap',
                    mota='$mota',
                    soluongton=$soluongton,
                    mausac='$mausac'
                    where mahh=$id
            ";
            $db->exec($query);
        }
        // phương thức insert vào database
        function insertsp($tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$dacbiet,$soluotxem,$ngaylap,$mota,$soluongton,$mausac)
        {
            $date=new DateTime($ngaylap);
            $ngay=$date->format("Y-m-d");
            $db=new connect();
            $query="insert into hanghoa(mahh,tenhh,dongia,giamgia,hinh,Nhom,maloai,dacbiet,soluotxem,ngaylap,mota,soluongton,mausac)
                    values (NULL,'$tenhh',$dongia,$giamgia,'$hinh',$Nhom,$maloai,$dacbiet,$soluotxem,'$ngay','$mota',$soluongton,'$mausac')";
           
            $db->exec($query);
        }

        //phương thức xóa sp
        function deletesp($id){
            $db=new connect();
            $query="delete from hanghoa where mahh=$id";
            $db->exec($query);
        }
    }
?>
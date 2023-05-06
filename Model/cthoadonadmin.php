<?php
    class cthoadonadmin {
        public function __construct(){}

        public function getCTHoaDonAll()
        {
            $db=new connect();
            $select="select * from cthoadon1";
            $result=$db->getList($select);
            return $result;
        }

        public function getCTHoaDonID($id)
        {
            $db=new connect();
            $select="select * from cthoadon1 where masohd=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        function updatesp($id,$mahh,$soluongmua,$mausac,$thanhtien,$tinhtrang)
        {
            $db=new connect();
            $query="update cthoadon1
                    set masohd='$id',
                    mahh=$mahh,
                    soluongmua=$soluongmua,
                    mausac='$mausac',
                    thanhtien=$thanhtien,
                    tinhtrang=$tinhtrang
                    where masohd=$id
            ";
            $db->exec($query);
        }

        //phương thức xóa sp
        function deletesp($id){
            $db=new connect();
            $query="delete from cthoadon1 where masohd=$id";
            $db->exec($query);
        }
    }
?>
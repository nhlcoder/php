<?php
    class hoadonadmin {
        public function __construct(){}

        public function getHoaDonAll()
        {
            $db=new connect();
            $select="select * from hoadon1";
            $result=$db->getList($select);
            return $result;
        }

        public function getHoaDonID($id)
        {
            $db=new connect();
            $select="select * from hoadon1 where masohd=$id";
            $result=$db->getInstance($select);
            return $result;
        }
        function updatehoadon($id,$makh,$ngaydat,$tongtien)
        {
            $db=new connect();
            $query="update hoadon1
                    set masohd='$id',
                    makh='$makh',
                    ngaydat='$ngaydat',
                    tongtien=$tongtien
                    where masohd=$id
            ";
            $db->exec($query);
        }
        //phương thức xóa sp
        function deletesp($id){
            $db=new connect();
            $query="delete from hoadon1 where masohd=$id";
            $db->exec($query);
        }
    }
?>
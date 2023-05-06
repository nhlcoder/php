<?php
    class page{
        // Phuong thuc tinh tong so trang
        function findPage($count, $limit){
            // 19%8 du 3 khac 0 thi lay sau dau : 2+1
            $page = (($count%$limit) == 0)?$count/$limit:floor($count/$limit)+1;
            return $page;// 3 trang
        }

        // Phuong thuc tim start dua vao trang hien tai
        // URL = index.php?action=sanpham$page=2
        // current_page => $_GET['page']=>2

        function findStart($limit){
            if(!isset($_GET['page']) || $_GET['page'] == 1){ // F||F
                $start = 0;
            }else{
                $start = ($_GET['page']-1)*$limit;
            }
            return $start;
        }
    }
?>
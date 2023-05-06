<?php
    // echo "Duy";
    if(isset($_SESSION['makh']))
    {
        //controller yêu càu insert vào bảng hoadon, sau đó trả về hoadon
        $hd = new hoadon();
        //trả về mã hóa dơn
        $sohd = $hd->InsertOrder($_SESSION['makh']);
        // echo $sohd;
        $_SESSION['masohd'] = $sohd;
        //tiền hàng insert vào chi tiet hoa don
        $tongtien = 0;
        foreach($_SESSION['cart'] as $key=>$item)
        {
           // InsertDetailOrder($masohd,$mahh,$soluongmua,$mausac,$size,$thanhtien)
            $hd->InsertDetailOrder($sohd,$item['mahh'],$item['quanty'],$item['mausac'],$item['total']);
            $tongtien += $item['total'];
        }
        $hd->UpdateTotal($sohd,$tongtien);
        include "./View/order.php";
        $_SESSION['cart'] = array();
    }
    else{
        echo'<script> alert (Bạn chưa đăng nhập )</script>';
        include "./View/login.php";
    }

?>
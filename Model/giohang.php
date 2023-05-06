<?php

    class giohang{
        //Phuong thuc them 1 object vao gio hang
        public function add_items($key,$quantity,$mycolor){
            $a=new iPhone();
            $pros=$a->getHangHoaId($key);//22
            // $pros[mahh=>21,tenhh=>giay bup be, dongio=>525000, hinh=>21.jpg]
            $hinh = $pros["hinh"];
            $ten = $pros["tenhh"];
            $dongia = $pros["dongia"];
            $total = $quantity*$dongia;
            //Tao 1 object
            $item = array(
                'mahh'=>$key,
                'hinh'=>$hinh,//Thuoc tinh
                'name'=>$ten,
                'mausac'=>$mycolor,
                'quanty'=>$quantity,
                'cost'=>$dongia,
                'total'=>$total,
            );
            //Dua doi tuong vao trong session
            $_SESSION['cart'][]=$item;
            //$key = 0, item=> [mahh=>12, hinh=>12, name=>giaybupbe, mausac=>yellow...]
            //$key = 0, item=> [mahh=>12, hinh=>12, name=>giaybupbe, mausac=>yellow...]
            //a[]=Object
        }
        //Phuong thuc tong thanh tien
        public function getTotal(){
            //Duyet qua gio hang
            $subtotal=0;
            foreach($_SESSION['cart'] as $item){
                $subtotal+=$item['total'];
            }
            return number_format($subtotal, 2);
        }
        //Phuong thuc xoa ra khoi gio hang
        public function delete_item($vitri){
            unset($_SESSION['cart'][$vitri]);
        }

        // Phuong thuc update gio hang
        public function update_items($vitri, $soluong)
        {
            if($soluong <= 0)
            {
                $this->delete_items($vitri);
            }
            else
            {
                $_SESSION['cart'][$vitri]['quanty']=$soluong;
                $total_new = $_SESSION['cart'][$vitri]['quanty']*$_SESSION['cart'][$vitri]['cost'];
                $_SESSION['cart'][$vitri]['total']=$total_new;
            }
        }
    }
?>
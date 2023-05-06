<?php
    //Kiem tra co ton tai gio hang hay chua
    if(!isset($SESSION['cart'])){
        //Tao gio hang
        $SESSION['cart'] = array();
    }

    $act="giohang";
    //controller dieu huong den nhieu view khac nhau
    if(isset($_GET['act'])){
        $act=$_GET['act'];
    }
    switch($act){
        case 'giohang':
            if(isset($_POST["mahh"])){
                $mahh = $_POST["mahh"];//22
                // echo $mahh;
                $soluong = $_POST["soluong"];
                // echo $soluong;
                $mausac = $_POST["mymausac"];
                // echo $mausac;
                //Controller yeu cau model thuc hien add vao trong gio hang
                $gh = new giohang();
                $gh->add_items($mahh, $soluong, $mausac);
            }
            include 'View/cart.php';
            break;
        case 'delete_item':
            //nhan ve id
            if(isset($_GET['id'])){
                $vitri = $_GET['id'];
                //controller yeu cau ai lam viec xoa
                $gh = new giohang();
                $gh->delete_item($vitri);
            }
            include 'View/cart.php';
            break;
        case 'update_item':
            if(isset($_POST['newqty'])){
                //$SESSION[soluong=2, soluong=2, soluong=2];
                $new_list=$_POST['newqty'];//[0=>2,1=>5,2=>2,[key=>value]]
                foreach($new_list as $vitri => $qty){
                    //So sanh so lít so luong, sp o vi tri nao co so luong khac
                    //Voi vi tri so luong trong sesion thi cap nhat
                    if($SESSION['cart'][$vitri]['quanty']!=$qty){
                        //cap nhat
                        $gh = new giohang();
                        $gh->update_items($vitri, $qty);
                    }

                }
            }
            include 'View/cart.php';
            break;
    }

    //click nut mua ngay truyen du lieu qua
    //Nhan
    
?>
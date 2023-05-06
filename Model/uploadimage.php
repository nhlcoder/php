<?php
    function uploadhinh()
    {
        //tạo đường dânc chữa hình lấy từ server về
        $target_dir="Content/";
        //B1: lấy tên hình về để vào đường dẫn vừa tạo
        // "Content/imagetourdien/giaycongso.jpg
        $target_file=$target_dir.basename($_FILES['image']['name']);
        // b2: lấy phần mở rộng// .jpg
        $targetFiletype=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // b3: kiểm tra xem là hình có thật sự ở trên server hay không
        $uploadhinh=1;
        if(isset($_POST["submit"]))
        {
            $check=getimagesize($_FILES['image']['tmp_name']);
            if($check!==false)
            {
                $uploadhinh=1;
            }
            else
            {
                $uploadhinh=0;
                echo '<script> alert("Hình ko tồn tại");</script>';
            }
        }
        // kiểm tra hình tồn tại chưa
        if(file_exists( $target_file))
        {
            $uploadhinh=0;
            echo '<script> alert("Hình tồn tại rồi");</script>';
        }
        // kiểm tra dung lượng của hình 500KB
        if($_FILES['image']['size']>5000000)
        {
            $uploadhinh=0;
            echo '<script> alert("Hình vượt quá dung lượng");</script>';
        }
        // kiểm tra có phải là hình hay không
        if($targetFiletype!='jpg' && $targetFiletype!='png' && $targetFiletype!='jpng'&& $targetFiletype!='gif')
        {
            $uploadhinh=0;
            echo '<script> alert("Ko là hình");</script>';
        }
        if($uploadhinh==1)
        {
            if(move_uploaded_file($_FILES['image']['tmp_name'],$target_file))
            {
                echo '<script> alert("upload hình thành công");</script>';
            }
            else
            {
                echo '<script> alert("upload hình ko thành công");</script>';
            }
        }

    }
?>
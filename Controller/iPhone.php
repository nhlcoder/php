<?php
    $act = "iPhone";
    if(isset($_GET['act']))
    {
        $act=$_GET['act'];//ketqua
    }
    switch($act){
        case 'iPhone':
            include 'View/iPhone.php';
            break;
        case 'details':
            include 'View/chitiet.php';
            break;
        case 'timkiem':
            include "./View/iPhone.php";
            break;
    }
?>
<?php
    $act = 'baocaoquy';
    if(isset($_GET['act'])){
        $act = $_GET['act'];
    }
    switch($act){
        case 'baocaoquy':
            include './View/baocaoquyadmin.php';
            break;
    }
?>
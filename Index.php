<?php
    session_start();
    // include "Model/iPhone.php";
    // include "Model/connect.php";
    // include "Model/giohang.php";
    // include "Model/hoadon.php";
    // Cach 1
    // spl_autoload_register('myModelClassLoader');
    // function myModelClassLoader($className){
    //     $path = 'Model/';
    //     include $path.$className.'.php';//include 'Model/hanghoa.php'
    // }
    // Cach 2
    set_include_path(get_include_path().PATH_SEPARATOR.'Model/');
    spl_autoload_extensions('.php');
    spl_autoload_register();
    include "Model/uploadimage.php";
    include "./Model/class.phpmailer.php";
    include "Model/class.smtp.php";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://kit.fontawesome.com/7fadb1ba55.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Apple Website Store</title>

    <!-- Bootstrap core CSS -->
    <link href="Content/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- duong link icon cua boostrap4 -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous"> -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="Content/assets/css/fontawesome.css">
    <link rel="stylesheet" href="Content/assets/css/style.css">
    <link rel="stylesheet" href="Content/assets/css/owl.css">
  </head>

  <body>
    <?php
        include 'View/header.php';
    ?>
    <div class="container" style="margin-top: 60px; ">
            <div class="row">
            <?php
                $ctrl = "iPhone";
                // Index dieu phoi den nhieu controller
                if(isset($_GET["action"])){
                    $ctrl = $_GET["action"];
                }
                include "Controller/".$ctrl.".php"
            ?>
            </div>
    </div>
    <?php
        include 'View/footer.php';
    ?>

  </body>
</html>
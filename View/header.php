<!-- ***** Preloader Start ***** -->

    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-xs-12">
            <ul class="left-info">
              <?php
                if(!isset($_SESSION['user']) && !isset($_SESSION['makh'])){
                  echo '
                    <li><a href="#"><i class="fa fa-envelope"></i>voly1007@gmail.com</a></li>
                    <li><a href="#"><i class="fa fa-phone"></i>0775981548</a></li>
                  ';
                }else if(isset($_SESSION['user'])){
                  $admin = $_SESSION['user'];
                  echo '<li><a><i class="fa-solid fa-screwdriver-wrench"></i>Admin '.$admin.'</a></li>';
                }else if(isset($_SESSION['makh']) && $_SESSION['tenkh']){
                  $name = $_SESSION['tenkh'];
                  echo '<li><a><i class="fa-solid fa-user"></i>Xin Chào '.$name.' !</a></li>';
                }
              ?>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="right-icons">
              <?php
                if(!isset($_SESSION['user']) && !isset($_SESSION['makh'])){
                  echo '<li><a href="index.php?action=admin"><i class="fa-solid fa-screwdriver-wrench"></i></a></li>';
                }else if(isset($_SESSION['user'])){
                  echo '<li><a href="index.php?action=admin&act=logout"><i class="fa-solid fa-right-from-bracket"></i></a></li>';
                }
              ?>
              <?php
                if(!isset($_SESSION['makh']) && !isset($_SESSION['user'])){
                  echo '<li><a href="index.php?action=dangnhap"><i class="fa-solid fa-circle-user"></i></a></li>';
                }else if(isset($_SESSION['makh']) && isset($_SESSION['tenkh'])){
                  $name = $_SESSION['tenkh'];
                  echo '<li><a href="index.php?action=dangnhap&act=logout"><i class="fa-solid fa-right-from-bracket"></i></a></li>';
                }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Mobile Store<em> Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
          
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php?action=iPhone">Home
                </a>
              </li>
              <?php
                if(isset($_SESSION['user'])){
                  echo '
                  <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Admin</a>
                  
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.php?action=hanghoaadmin">Hang Hoa Admin</a>
                        <a class="dropdown-item" href="index.php?action=hoadonadmin">Hoa Don Admin</a>
                        <a class="dropdown-item" href="index.php?action=cthoadonadmin">Chi Tiet Hoa Don Admin</a>
                        <a class="dropdown-item" href="index.php?action=thongkeadmin">Thống Kê Tổng</a>
                    </div>
                  </li>';
                }
              ?>
              <li>
                
              </li>
              <li>
              <?php
                $dem=0;
                if(isset($_SESSION['cart'])){
                  $dem=count($_SESSION['cart']);
                }
                else{
                  $dem=0;
                }
              ?>
              <?php

                // Neu ton tai ma khach hang thi moi hien gio hang
                if(!isset($_SESSION['user'])){
                  echo '<a href="index.php?action=giohang" class="nav-link"><i class="fa-solid fa-cart-shopping"></i><sup>'.$dem.'</sup></a>';
                }
              ?>
              </li>
            </ul>
            <?php
            if(!isset($_SESSION['user'])){
              echo '<form class="d-flex" style="margin-top:2px;" action="index.php?action=iPhone&&act=timkiem" method="POST">
                    <button class="btn btn-primary" type="submit">Search</button>
                    <input class="form-control me-2" type="text" placeholder="Search" name="txtsearch">
                    </form>';
            }
            ?>
          </div>
        </div>
      </nav>
    </header>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item item-1">
            <div class="img-fill">
                <div class="text-content">
                  <h6>lorem ipsum dolor sit amet!</h6>
                  <h4>Quam temporibus accusam <br> hic ducimus quia</h4>
                  <p>Magni deserunt dolorem consectetur adipisicing elit. Corporis molestiae optio, laudantium odio quod rerum maiores, omnis unde quae illo.</p>
                  <a href="products.html" class="filled-button">Products</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>magni deserunt dolorem harum quas!</h6>
                  <h4>Aliquam iusto harum <br>  ratione porro odio</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At culpa cupiditate mollitia adipisci assumenda laborum eius quae quo excepturi, eveniet. Dicta nulla ea beatae consequuntur?</p>
                  <a href="about.html" class="filled-button">About Us</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-3">
            <div class="img-fill">
                <div class="text-content">
                  <h6>alias officia qui quae vitae natus!</h6>
                  <h4>Lorem ipsum dolor <br>sit amet, consectetur.</h4>
                  <p>Vivamus ut tellus mi. Nulla nec cursus elit, id vulputate mi. Sed nec cursus augue. Phasellus lacinia ac sapien vitae dapibus. Mauris ut dapibus velit cras interdum nisl ac urna tempor mollis.</p>
                  <a href="contact.html" class="filled-button">Contact Us</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->
<!-- 
    <div class="request-form">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h4>Request a call back right now ?</h4>
            <span>Mauris ut dapibus velit cras interdum nisl ac urna tempor mollis.</span>
          </div>
          <div class="col-md-4">
            <a href="contact.html" class="border-button">Contact Us</a>
          </div>
        </div>
      </div>
    </div> -->

    
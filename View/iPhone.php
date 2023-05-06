
    <!-- Page Content -->
    <div class="services">
      <div class="container">
        <div class="row">
        <!-- //Chay vong lap get iPhone -->
        <?php
          $iPhone=new iPhone();
          // B1 Tìm tổng số sản phẩm
          // Cách 1: count
          // $count = $hh->getCount();//19
          // Cách 2: rowCount đếm dòng trong bảng
          $result=$iPhone->getiPhone();// $result chính là bảng bao gồm 19 sản phẩm
          $count=$result->rowCount(); // 19
          // Bước 2: Giới hạn 1 trang bao nhiêu sản phẩm "Tự cho"
          $limit=6;
          // Bước 3: Xác định tổng số trang dựa vào count và limit, tính start
          $p=new page();
          // Lay tong so trang
          $page=$p->findPage($count, $limit);// 3
          // Lay start ra
          $start=$p->findStart($limit);// 8
          // Buoc 4: Lay trang hien tai
          $current_page=isset($_GET['page'])?$_GET['page']:1;

        ?>
        <?php
          $iPhone=new iPhone();
          if(isset($_GET['act']) == 'timkiem'){
            $ac = 2;
          }else{
            $ac = 1;
          }
        ?>

        <?php  
          if($ac == 1){
            $result = $iPhone->getListHangHoaAllPage($start, $limit); // 8,8
          }if($ac == 2){
            if(isset($_POST['txtsearch'])){
              $search = $_POST['txtsearch'];
            }
            $result = $iPhone->getListSearch($search);
          }

        ?>  

        <?php
          while($set = $result->fetch()):
        ?>
          <div class="col-md-4">
            <div class="service-item">
              <img src="Content\<?php echo $set["hinh"];?>" alt="" width="50px">
              <div class="down-content">
                <h4><?php echo $set["tenhh"];?></h4>
                <div style="margin-bottom:10px;">
                  <span>
                      <sup>$</sup><?php echo $set["dongia"];?>
                  </span>
                </div>

                <p style="height: 130px;"><?php echo $set["mota"];?></p>
                <a class="filled-button" href="index.php?action=iPhone&act=details&id=<?php echo $set['mahh'];?>">View More</a>
              </div>
            </div>
            <br>
          </div>
        <?php
          endwhile;
        ?>
        </div>

        <br>
        <br>
        <nav>
          <ul class="pagination pagination-lg justify-content-center">
          <?php
            // Nut lui trang khi trang hien tai >1 va tong so trang hien tai >1
            if($current_page > 1 && $page > 1){
              echo '<li class="page-item"><a class="page-link" href="index.php?action=iPhone&page='.($current_page-1).'">Prev</a></li>';
            }
            for($i = 1; $i <= $page; $i++){
          ?>
            <li class="page-item"><a class="page-link" href="index.php?action=iPhone&page=<?php echo $i;?>"><?php echo $i;?></a></li>
          <?php
            }
            // Nut lui toi trang khi trang hien tai < tong so trang
            if($current_page < $page && $page >1){
              echo '<li class="page-item"><a class="page-link" href="index.php?action=iPhone&page='.($current_page+1).'">Next</a></li>';
            }
          ?>
          </ul>
        </nav>
      </div>
    </div>
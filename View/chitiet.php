<script type="text/javascript">
    function chonsize(a) {
        document.getElementById("size").value = a;

    }
</script>
<section>
        <!-- Page Content -->
    <?php
        if(isset($_GET["id"])){
            $id =$_GET["id"];
            //view cần phải có thông tin của id mới hiển thị lên
            //MOdel làm
            $hh = new iPhone();
            $result = $hh->getHangHoaId($id);
            $hinh=$result["hinh"];
            $tenhh=$result["tenhh"];
            $dongia=$result["dongia"];
            $mota=$result["mota"];
            $nhom=$result["Nhom"];
        }
    ?> 
        <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="text-center">
              <img src="Content\<?php echo $hinh;?>" alt="" class="img-fluid wc-image" width="50%">
            </div>

            <br>

            <div class="row">
            <?php
                $result=$hh->getHangHoaNhom($nhom);
                while($set=$result->fetch()):
            ?>
              <div class="col-sm-4 col-12">
                <div>
                  <img src="Content\<?php echo $set["hinh"];?>" alt="" class="img-fluid">
                </div>
                <br>
              </div>
            <?php
                endwhile;
            ?>
            </div>

            <br>
          </div>

          <div class="col-md-5">
            <div class="sidebar-item recent-posts">
              <div class="sidebar-heading">
                <h4><?php echo $tenhh?></h4>
              </div>

              <div class="content">
                <p><?php echo $mota?></p>
              </div>
            </div>

            <br>
            <br>
          
            <h4>Add to Cart</h4>

            <br>

            <form action="index.php?action=giohang" method="post">
                <input type="hidden" name="mahh" value="<?php echo $id;?>" />
              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="">Color</label>
                    <select name="mymausac" class="form-control">
                    <?php
                        $result=$hh->getHangHoaNhom($nhom);
                        while($set=$result->fetch()):
                    ?>
                        <option value="<?php echo $set["mausac"];?>"><?php echo $set["mausac"];?></option>
                    <?php
                        endwhile;
                    ?>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-sm-12">
                  <div class="form-group">
                    <label for="">Quantity</label>
                    <input type="number"  id="soluong" name="soluong" value="1" min="1" required="" class="form-control">
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="form-group">
                    <button type="submit">Add To Cart</button>
                  </div>
                </div>
              </div>
            </form>

            <br>
          </div>
        </div>

        <br>

        <h4>Description</h4>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea illum necessitatibus adipisci cum dolor quam magnam similique quasi iure blanditiis?</p>

        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum minus reprehenderit, porro alias pariatur perferendis, eaque possimus fugit doloribus perspiciatis.</p>

        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur expedita, blanditiis soluta, laudantium veritatis esse nulla quasi praesentium ea architecto vero. Nemo nesciunt veritatis maxime accusamus ipsa optio inventore rem cupiditate vero vitae cumque necessitatibus nisi, sapiente possimus perspiciatis, corporis!</p>

        <br>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde ratione animi aliquid, non ipsum soluta similique rerum commodi! Ullam quam cupiditate reiciendis a labore. Eos rerum deserunt, sequi dolores vitae consectetur harum animi officiis id vel similique qui, laborum corrupti fuga maiores maxime! Quasi, asperiores nobis accusamus similique est modi totam corporis perferendis consequuntur ea tempore, corrupti provident quos quo.</p>



        <br>
        <br>
        <br>
        </div>
        </div>
</section>


<div  class="col-md-4 col-md-offset-4"><h3 ><b>DANH SÁCH CHI TIET HOA DON</b></h3></div>
<div class="row col-12">
</div>
<div class="row">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã So Hoa Don</th>
        <th>Ma Hang Hoa</th>
        <th>So Luong Mua</th>
        <th>Mau Sac</th>
        <th>Thanh Tien</th>
        <th>Tinh Trang</th>
        <th>Sua</th>
        <th>Xoa</th>
      </tr>
    </thead>
    <tbody>
    <tr>
      <?php
        $hh=new cthoadonadmin();
        $result=$hh->getCTHoaDonAll();
        while($set=$result->fetch()):
      ?>
      <td><?php echo $set['masohd'];?> </td>
        <td><?php echo $set['mahh'];?></td>
        <td><?php echo $set['soluongmua'];?></td>
        <td><?php echo $set['mausac'];?></td>
        <td><?php echo $set['thanhtien'];?></td>
        <td><?php echo $set['tinhtrang'];?></td>
        <td><a href="index.php?action=cthoadonadmin&act=edit&id=<?php echo $set['masohd'];?>">Cập nhật</a></td>
        <td><a href="index.php?action=cthoadonadmin&act=delete&id=<?php echo $set['masohd'];?>">Xóa</a></td>
      </tr>
      <?php
        endwhile;
      ?>
    </tbody>
  </table>
</div>
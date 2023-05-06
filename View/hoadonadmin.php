
<div  class="col-md-4 col-md-offset-4"><h3 ><b>DANH SÁCH HOA DON</b></h3></div>
<div class="row col-12">
</div>
<div class="row">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã So Hoa Don</th>
        <th>Mã Khach Hang</th>
        <th>Ma Ngay Dat</th>
        <th>Tong Tien</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
    <tr>
      <?php
        $hh=new hoadonadmin();
        $result=$hh->getHoaDonAll();
        while($set=$result->fetch()):
      ?>
      <td><?php echo $set['masohd'];?> </td>
        <td><?php echo $set['makh'];?></td>
        <td><?php echo $set['ngaydat'];?></td>
        <td><?php echo $set['tongtien'];?></td>
        <td><a href="index.php?action=hoadonadmin&act=edit&id=<?php echo $set['masohd'];?>">Cập nhật</a></td>
        <td><a href="index.php?action=hoadonadmin&act=delete&id=<?php echo $set['masohd'];?>">Xóa</a></td>
      </tr>
      <?php
        endwhile;
      ?>
    </tbody>
  </table>
</div>
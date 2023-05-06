<?php
  $ac = 0;
  if(isset($_GET['act']))
  {
    if($_GET['act'] == "edit")
    {
      $ac = 1;
    }
  }
?>
<div class="col-md-4 col-md-offset-4"><h3><b>CẬP NHẬT SẢN PHẨM</b></h3></div>
<div class="row col-md-4 col-md-offset-4" >
<?php
  if(isset($_GET['id']))
  {
    $id=$_GET['id'];
    $hh=new cthoadonadmin();
    $result=$hh->getCTHoaDonID($id);
    $masohd=$result['masohd'];
    $mahh=$result['mahh'];
    $soluongmua=$result['soluongmua'];
    $mausac=$result['mausac'];
    $thanhtien=$result['thanhtien'];
    $tinhtrang=$result['tinhtrang'];
  }
?>

<?php
  if($ac == 1)
  {
    echo '
    <form action="index.php?action=cthoadonadmin&act=edit_action&id='.$id.'"
    method="post" enctype="multipart/form-data">';
  }
?>
    <table class="table" style="border: 0px; width: 850px; margin-left:-170px">

      <tr>
        <td>Mã So Hoa Don</td>
        <td> <input type="text" class="form-control" name="masohd" value="<?php echo $masohd;?>" readonly/></td>
      </tr>
      <tr>
        <td>Tên hàng</td>
        <td><input type="text" class="form-control" name="mahh" value="<?php echo $mahh;?>" maxlength="100px"></td>
      </tr>
      <tr>
        <td>Đơn giá</td>
        <td><input type="text" class="form-control" name="soluongmua" value="<?php echo $soluongmua;?>" ></td>
      </tr>
      <tr>
        <td>Giảm giá</td>
        <td><input type="text" class="form-control" name="mausac" value="<?php echo $mausac;?>"></td>
      </tr>
      <tr>
        <td>Giảm giá</td>
        <td><input type="text" class="form-control" name="thanhtien" value="<?php echo $thanhtien;?>"></td>
      </tr>
      <tr>
        <td>Giảm giá</td>
        <td><input type="text" class="form-control" name="tinhtrang" value="<?php echo $tinhtrang;?>"></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="submit"/>
        </td>
      </tr>

    </table>
  </form>
</div>
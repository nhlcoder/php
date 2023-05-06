<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Confirmation</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Confirmation</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Order Details Area =================-->
	<section class="order_details section_gap">
        <?php
        if(!isset($_SESSION['makh']) || count($_SESSION['cart']) == 0):
            echo '<script> alert("Bạn chưa đăng nhập") </script>';
            include "login.php";
        ?>

        <?php
            else:
        ?>
		<div class="container">
        <?php
            $hd = new hoadon();
            $result = $hd->getOrder($_SESSION['masohd']);
            $sohd = $result['masohd'];
            $tenkh = $result['tenkh'];
            $diachi = $result['diachi'];
            $sodt = $result['sodienthoai'];
            $ngaydat = $result['ngaydat'];
            $d = new DateTime($ngaydat);
        ?>

			<h3 class="title_confirmation">Thank you. Your order has been received.</h3>
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Order Info</h4>
						<ul class="list">
							<li><a href="#"><span>Số Hóa đơn</span> : <?php echo $sohd;?></a></li>
							<li><a href="#"><span>Ngày lập</span> : <?php echo $d->format('d/m/Y');?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Billing Address</h4>
						<ul class="list">
							<li><a href="#"><span>Họ và tên</span> : <?php echo $tenkh;?></a></li>
							<li><a href="#"><span>Số điện thoại</span> : <?php echo $sodt;?></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Shipping Address</h4>
						<ul class="list">
							<li><a href="#"><span>Địa chỉ</span> : <?php echo $diachi;?></a></li>
							<li><a href="#"><span>Số điện thoại</span> : <?php echo $sodt;?></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="order_details_table">
				<h2>Order Details</h2>
				<div class="table-responsive">
					<table class="table">
						<tbody>
							<tr>
								<th>Số Thứ Tự</th>
								<th>Tên Sản Phẩm</th>
								<th>Màu</th>
							    <th>Giá</th>
								<th>Số Lượng</th>
							</tr>
                        <?php
                            $j = 0;
                            $hanghoa = $hd->getOrderDetail($_SESSION['masohd']);
                            while($set=$hanghoa->fetch()):
                            $j++;
                        ?>
                            <tr>
                                <td><?php echo $j;?></td>
                                <td><?php echo $set['tenhh'];?></td>
                                <td><?php echo $set['mausac'];?> </td>
                                <td><?php echo $set['dongia'];?></td>
								<td><?php echo $set['soluongmua'];?></td>
							</tr>
                            <?php
                            endwhile;
                            ?>
							<tr>
								<td>
									<h4>Subtotal</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>$
                                    <?php
                                    $gh = new giohang();
                                    echo $gh->getTotal();
                                    ?>.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Shipping</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Flat rate: $0.00</p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Total</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>$
                                    <?php
                                    $gh = new giohang();
                                    echo $gh->getTotal();
                                    ?>.00</p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
        <?php
            endif;
        ?>
	</section>
	<!--================End Order Details Area =================-->
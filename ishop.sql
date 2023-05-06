-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2023 at 01:11 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ishop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(25) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `password`, `email`) VALUES
('DuyBro', '41918cda484c5e53ec6e12d17bfee2ae', 'duybro@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon1`
--

CREATE TABLE `cthoadon1` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cthoadon1`
--

INSERT INTO `cthoadon1` (`masohd`, `mahh`, `soluongmua`, `mausac`, `thanhtien`, `tinhtrang`) VALUES
(7, 3, 2, 'Màu Hồng', 1090000, 0),
(9, 3, 2, ' Màu Hồng', 1090000, 0),
(9, 12, 2, 'Màu Be ', 1150000, 0),
(10, 9, 2, 'Màu Kem ', 1490000, 0),
(10, 15, 1, 'Màu Xám Nhạt ', 545000, 0),
(12, 9, 2, 'Màu Kem ', 1490000, 0),
(12, 15, 1, 'Màu Xám Nhạt ', 545000, 0),
(13, 2, 1, 'Màu Trắng', 545000, 0),
(13, 24, 3, 'Màu Đen ', 1800000, 0),
(16, 15, 1, 'Màu Xám Nhạt ', 700, 0),
(17, 20, 1, 'Xanh Bạc Hà ', 499, 0),
(20, 2, 1, 'Màu Trắng', 999, 0),
(22, 2, 1, 'Màu Trắng', 999, 0),
(23, 3, 1, 'Màu Trắng', 899, 0),
(23, 5, 3, 'Màu vàng nâu', 3297, 0),
(25, 2, 1, 'Màu Trắng', 999, 0),
(27, 2, 1, 'Màu Trắng', 999, 0),
(28, 1, 4, 'Màu Trắng', 4396, 0),
(28, 2, 11, 'Màu Trắng', 10989, 0),
(30, 2, 2, 'Màu Trắng', 1998, 0),
(32, 2, 1, 'Màu Trắng', 999, 0),
(34, 3, 1, 'Màu Trắng', 899, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(60) NOT NULL,
  `dongia` float NOT NULL,
  `giamgia` float NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `Nhom` int(4) NOT NULL,
  `maloai` int(11) NOT NULL,
  `dacbiet` bit(1) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` varchar(2000) NOT NULL,
  `soluongton` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `dongia`, `giamgia`, `hinh`, `Nhom`, `maloai`, `dacbiet`, `soluotxem`, `ngaylap`, `mota`, `soluongton`, `mausac`) VALUES
(1, 'Apple iPhone 14 Pro Max', 1099, 0, '1.jpg', 0, 1, b'1', 5, '2020-08-08', 'Chiếc iPhone 14 Pro Max VN/A sở hữu màn hình Super Retina XDR mới với ProMotion có kích thước 6.7 inch.', 50, 'Màu Trắng'),
(2, 'Apple iPhone 14 Pro', 999, 0, '2.jpg', 0, 1, b'1', 3, '2020-08-08', 'iPhone 14 Pro được tích hợp công nghệ mới, đánh dấu thời điểm Apple chính thức từ bỏ notch “tai thỏ”.', 50, ' Màu Hồng'),
(3, 'Apple iPhone 14 Plus', 899, 300000, '3.jpg', 0, 1, b'0', 4, '2020-08-08', 'iPhone 14 Plus là phiên bản thay thế mini trong thế hệ iPhone 14 Series, vốn được Apple giới thiệu trên thế hệ iPhone 12 và 13 series, nhằm tránh nhầm lẫn với dòng Pro Max.', 50, 'Màu Xanh Navy '),
(4, 'Apple iPhone 14', 799, 0, '4.jpg', 1, 3, b'0', 1, '2020-08-08', ' iPhone 14 Series có thiết kế không thay đổi quá nhiều. Phần lưng máy phẳng, các cạnh vuông mang phong cách của những chiếc iPhone 5 đời đầu.', 50, ' Màu Be Đậm '),
(5, 'Apple iPhone 13 Pro Max', 1099, 0, '5.jpg', 1, 3, b'1', 0, '2020-08-08', 'iPhone 13 Pro Max vẫn sở hữu khung viền vuông vức bằng kim loại sang trọng tương tự như iPhone 12 Pro Max.', 50, 'Màu Xanh Navy '),
(6, 'Apple iPhone 13 Pro', 850, 0, '6.jpg', 1, 3, b'0', 0, '2020-08-08', 'iPhone 13 Pro sẽ được trang bị màn hình OLED 6,1 inch tần số làm tươi 120Hz tối đa 1000 nits.', 50, 'Màu Đen '),
(9, 'Apple iPhone 13', 699, 0, '7.jpg', 2, 5, b'1', 1, '2020-08-08', 'iPhone 13 đã không khiến người dùng thất vọng. Sản phẩm được hãng trang bị chipset A15 Bionic kiến ​​trúc 5 lõi GPU.', 50, 'Màu Trắng '),
(10, 'Apple iPhone 13 Mini', 599, 0, '8.jpg', 2, 5, b'1', 1, '2020-08-08', ' iPhone 13 Mini được thiết kế chéo với thiết lập camera kép. Sự thay đổi về vị trí sắp xếp ống kính cũng là một điểm mới khá thú vị.', 50, 'Màu Kem '),
(11, 'Apple iPhone 12 Pro Max', 980, 0, '9.jpg', 3, 1, b'0', 1, '2020-08-08', 'iPhone 12 Pro Max sẽ đem lại cho người dùng hệ thống camera chuyên nghiệp hàng đầu thị trường với nhiều nâng cấp đáng giá.', 50, 'Màu Be '),
(12, 'Apple iPhone 12 Pro', 880, 350000, '10.jpg', 3, 1, b'0', 2, '2020-08-08', ' iPhone 12 Pro 256GB chính hãng VN/A còn được trang bị sức mạnh vượt trội từ con chip A14 Bionic của nhà Apple.', 50, 'Màu Đen '),
(15, 'Apple iPhone 12', 700, 0, '11.jpg', 4, 1, b'0', 1, '2020-08-08', 'iPhone 12 256GB lại mang trong mình một sức mạnh cực kì khủng khiếp, vượt trội hơn tất cả những mẫu smartphone đang có mặt trên thị trường.', 50, 'Màu Xám Nhạt '),
(16, 'Apple iPhone 12 Mini', 599, 300000, '12.jpg', 4, 1, b'0', 2, '2020-08-08', 'iPhone 12 Mini vẫn sở hữu một hệ thống camera kép tương tự như iPhone 11 trước đây nhưng các cảm biến đã được phóng lớn ra một chút, giúp thu được nhiều ánh sáng hơn, từ đó ảnh cho ra cũng có chất lượng tốt hơn.', 50, 'Màu Hồng Đậm '),
(17, 'Apple iPhone SE 2022', 499, 0, '13.jpg', 4, 1, b'1', 2, '2020-08-08', 'Màn hình iPhone SE 64GB (2022) sẽ sử dụng tấm nền IPS LCD, cho chất lượng hiển thị khá tốt.', 50, 'Màu Đen '),
(18, 'Apple iPhone 11 Pro Max', 699, 300000, '14.jpg', 5, 8, b'0', 1, '2020-08-08', 'iPhone 11 Pro Max sẽ tiếp nối cuộc cách mạng về camera của Apple sau iPhone XR.', 50, 'Xanh Bạc Hà '),
(21, 'Apple iPhone SE 2020', 399, 0, '21.jpg', 4, 4, b'0', 1, '2020-08-15', 'Điện thoại trang bị cảm biến vân tay Touch ID huyền thoại đã quay trở lại trên iPhone SE 2020, cùng với đó là thiết kế gần như sao y của iPhone 8. ', 50, 'Màu vàng'),
(22, 'Apple iPhone Xs', 450, 50000, '22.jpg', 1, 4, b'0', 1, '2020-08-04', 'Apple A12 Bionic được xây dựng trên tiến trình 7nm đầu tiên của hãng với 6 nhân giúp iPhone Xs có được một hiệu năng “vô đối” cùng khả năng tiết kiệm năng lượng tối ưu.', 23, 'Màu vàng nâu'),
(24, 'Apple iPhone Xr', 450, 0, '24.jpg', 3, 7, b'1', 1, '2020-07-04', 'iPhone Xr được trang bị một loại công nghệ mới có tên Liquid Retina. Máy có độ phân giải 1792 x 828 Pixels cùng 1.4 triệu điểm ảnh.', 12, 'Xanh đen'),
(27, 'Apple MacBook Air M1 2020', 8, 3, 'apple-macbook-air-2020-mgn63saa-(69).jpg', 1, 3, b'0', 1, '2023-03-19', 'Duy Bro Chinh La Day Chu Dau', 1, 'Men'),
(28, 'Apple MacBook Air M2', 2132, 1, 'apple-macbook-air-m2-2022-(37).jpg', 1, 1, b'1', 12, '2023-03-21', 'Hehe', 1, 'Đen');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon1`
--

CREATE TABLE `hoadon1` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon1`
--

INSERT INTO `hoadon1` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(1, 7, '2020-08-13', 2240000),
(2, 7, '2020-08-13', 2240000),
(3, 7, '2020-08-13', 2240000),
(4, 7, '2020-08-13', 2240000),
(5, 7, '2020-08-13', 2240000),
(6, 7, '2020-08-13', 2240000),
(7, 7, '2020-08-13', 2240000),
(8, 7, '2020-08-13', 2240000),
(9, 7, '2020-08-13', 2240000),
(10, 7, '2020-08-13', 2035000),
(11, 7, '2020-08-13', 2035000),
(12, 7, '2020-08-13', 2035000),
(13, 5, '2020-09-02', 545000),
(14, 7, '2020-09-09', 899),
(16, 8, '2023-03-02', 700),
(17, 8, '2023-03-08', 499),
(18, 8, '2023-03-19', 999),
(19, 8, '2023-03-19', 0),
(20, 8, '2023-03-20', 999),
(21, 8, '2023-03-20', 0),
(22, 8, '2023-03-20', 999),
(23, 8, '2023-03-20', 4196),
(24, 8, '2023-03-20', 0),
(25, 8, '2023-03-20', 999),
(26, 8, '2023-03-20', 0),
(27, 8, '2023-03-20', 999),
(28, 8, '2023-03-21', 15385),
(29, 8, '2023-03-21', 0),
(30, 8, '2023-03-21', 1998),
(31, 8, '2023-03-21', 0),
(32, 8, '2023-03-21', 999),
(33, 8, '2023-03-21', 0),
(34, 8, '2023-03-21', 899);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang1`
--

CREATE TABLE `khachhang1` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` varchar(12) NOT NULL,
  `vaitro` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang1`
--

INSERT INTO `khachhang1` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`, `vaitro`) VALUES
(3, 'a', 'a', 'cfce04b8d560cae30e0ee1e82b132931', 'a@gmail.com', '', '', 0),
(4, 'a', 'a', 'cfce04b8d560cae30e0ee1e82b132931', 'a@gmail.com', '', '', 0),
(5, 'an', 'an', '202cb962ac59075b964b07152d234b70', 'an@gmail.com', '', '', 0),
(6, 'an', 'an', '202cb962ac59075b964b07152d234b70', 'an@gmail.com', '', '', 0),
(7, 'Nguyên', 'nguyen', '202cb962ac59075b964b07152d234b70', 'nguyen@gmail.com', '', '', 0),
(8, 'DuyBro', 'DuyBro', '8cf0529b6aa60994661d0239bfcb0bf4', 'DuyBro@gmail.com', '1234', '1234', 0),
(9, 'DuyBro', 'DuyBro', '8cf0529b6aa60994661d0239bfcb0bf4', 'DuyBro@gmail.com', '1234', '1234', 0),
(10, 'DuyMen', 'DuyMen', '337a481e7507385bc4647f8675f8d637', 'DuyMen@gmail.com', '123', '123', 0),
(11, 'DuyMen', 'DuyMen', '337a481e7507385bc4647f8675f8d637', 'DuyMen@gmail.com', '123', '123', 0),
(12, 'LYNH', 'LYNH', 'bb5cd355a6665f4ac3e338493a9a975a', 'voly1007@gmail.com', '123', '0944123321', 0),
(13, 'LYNH', 'LYNH', 'bb5cd355a6665f4ac3e338493a9a975a', 'voly1007@gmail.com', '123', '0944123321', 0),
(14, 'DuyBro1', 'DuyBro123', 'bb5cd355a6665f4ac3e338493a9a975a', 'duybro12@gmail.com', '123', '123', 0),
(15, 'DuyBro1', 'DuyBro123', 'bb5cd355a6665f4ac3e338493a9a975a', 'duybro12@gmail.com', '123', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `idmenu`) VALUES
(1, 'Apple', 3),
(3, 'Samsung', 3),
(4, 'Xiaomi', 3),
(5, 'LG', 3),
(6, 'Realme', 3),
(7, 'Sony', 3),
(8, 'Vivo', 3),
(10, 'Asus', 4),
(13, 'OnePlus', 4),
(14, 'Samung', 5),
(15, 'Soni', 5),
(16, 'TSL', 5);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `name`, `link`) VALUES
(1, 'Trang Chủ', 'index.php'),
(3, 'Giày', ''),
(4, 'Túi Xách', 'View/sanphamtui.php'),
(5, 'Liên Hệ', 'View/lienhe.php'),
(6, 'Tài Khoản', 'View/gioithieu.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cthoadon1`
--
ALTER TABLE `cthoadon1`
  ADD PRIMARY KEY (`masohd`,`mahh`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`),
  ADD KEY `FK_hanghoa_maloai` (`maloai`);

--
-- Indexes for table `hoadon1`
--
ALTER TABLE `hoadon1`
  ADD PRIMARY KEY (`masohd`),
  ADD KEY `fk_hoadon_kh` (`makh`);

--
-- Indexes for table `khachhang1`
--
ALTER TABLE `khachhang1`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`),
  ADD KEY `FK_loai_menu` (`idmenu`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `hoadon1`
--
ALTER TABLE `hoadon1`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `khachhang1`
--
ALTER TABLE `khachhang1`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `FK_hanghoa_maloai` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`);

--
-- Constraints for table `hoadon1`
--
ALTER TABLE `hoadon1`
  ADD CONSTRAINT `fk_hoadon_kh` FOREIGN KEY (`makh`) REFERENCES `khachhang1` (`makh`);

--
-- Constraints for table `loai`
--
ALTER TABLE `loai`
  ADD CONSTRAINT `FK_loai_menu` FOREIGN KEY (`idmenu`) REFERENCES `menu` (`idmenu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

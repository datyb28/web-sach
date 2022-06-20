-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2016 at 03:35 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`a_id`, `a_name`, `a_status`) VALUES
(1, 'Nhiều tác giả', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_summary` varchar(255) NOT NULL,
  `c_status` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`c_id`, `c_name`, `c_summary`, `c_status`, `parent_id`) VALUES
(1, 'Sách giáo khoa', 'Sách học tập từ 1 đến 12', 1, 0),
(2, 'Sách tham khảo', 'Sách hỗ trợ học tập', 1, 0),
(3, 'Sách chuyên ngành', 'Sách thuộc về các lĩnh vực kinh tế, công nghệ,...', 1, 0),
(4, 'Sách lớp 1', 'Dành cho học sinh lớp 1', 1, 1),
(5, 'Sách lớp 2', 'Dành cho học sinh lớp 2', 1, 1),
(6, 'Sách lớp 3', 'Dành cho học sinh lớp 3', 1, 1),
(7, 'Sách lớp 4', 'Dành cho học sinh lớp 4', 1, 1),
(8, 'Sách lớp 5', 'Dành cho học sinh lớp 5', 1, 1),
(9, 'Sách lớp 6', 'Dành cho học sinh lớp 6', 1, 1),
(10, 'Sách lớp 7', 'Dành cho học sinh lớp 7', 1, 1),
(11, 'Sách lớp 8', 'Dành cho học sinh lớp 8', 1, 1),
(12, 'Sách lớp 9', 'Dành cho học sinh lớp 9', 1, 1),
(13, 'Sách lớp 10', 'Dành cho học sinh lớp 10', 1, 1),
(14, 'Sách lớp 11', 'Dành cho học sinh lớp 11', 1, 1),
(15, 'Sách lớp 12', 'Dành cho học sinh lớp 12', 1, 1),
(16, 'Toán học', '', 1, 2),
(17, 'Vật lý', '', 1, 2),
(18, 'Hóa học', 'Sách tham khảo hóa học', 1, 2),
(20, 'Sinh học', '', 1, 2),
(21, 'Ngữ văn', '', 1, 2),
(22, 'Địa lý', '', 1, 2),
(26, 'Tiếng anh', '', 1, 2),
(27, 'Lịch sử', '', 1, 2),
(28, 'Lập trình', 'Sách dành cho lập trình viên', 1, 3),
(29, 'Cơ khí', 'Sách cơ khí', 1, 3),
(30, 'Kinh tế', 'Sách chuyên ngành về kinh tế', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `l_id` int(11) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `l_email` varchar(255) NOT NULL,
  `l_phone` varchar(255) NOT NULL,
  `l_content` text NOT NULL,
  `l_adddate` datetime NOT NULL,
  `l_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`l_id`, `l_name`, `l_email`, `l_phone`, `l_content`, `l_adddate`, `l_status`) VALUES
(1, 'Nguyen Manh Quan', 'quan@gmail.com', '0989898989', 'Sai toan loi co ban', '2016-03-16 00:00:00', 0),
(2, 'Chung', 'chungback97@gmail.com', '01635262542', 'hay quá đi', '2016-03-16 21:49:10', 0),
(3, 'Yến chó', 'yennhuconcho@gmail.com', '01635465732', 'Yến ngu như chó', '2016-03-17 16:58:05', 0),
(4, 'Phùng Văn Chung', 'chungback97@gmail.com', '01635262542', 'Thử gửi liên hệ lên quản trị', '2016-03-17 22:27:45', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cus_id` int(11) NOT NULL,
  `cus_name` varchar(255) NOT NULL,
  `cus_address` varchar(255) NOT NULL,
  `cus_phone` varchar(255) NOT NULL,
  `cus_email` varchar(255) NOT NULL,
  `cus_note` varchar(255) NOT NULL,
  `cus_adddate` datetime NOT NULL,
  `cus_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cus_id`, `cus_name`, `cus_address`, `cus_phone`, `cus_email`, `cus_note`, `cus_adddate`, `cus_status`) VALUES
(79, 'Phùng Văn Chung', 'Vĩnh Yên - Vĩnh Phúc', '01635262542', 'chungback97@gmail.com', 'Chuyển phát nhanh cho mình nhé', '2016-03-17 10:51:58', 2);

-- --------------------------------------------------------

--
-- Table structure for table `infomations`
--

CREATE TABLE `infomations` (
  `i_id` int(11) NOT NULL,
  `i_company` varchar(255) NOT NULL,
  `i_address` varchar(255) NOT NULL,
  `i_email` varchar(255) NOT NULL,
  `i_phone` varchar(255) NOT NULL,
  `i_logo` varchar(255) NOT NULL,
  `i_facebook` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infomations`
--

INSERT INTO `infomations` (`i_id`, `i_company`, `i_address`, `i_email`, `i_phone`, `i_logo`, `i_facebook`) VALUES
(1, 'Trang bán sách sư phạm', 'Xuân Thủy, Cầu Giấy, Hà Nội', 'admin@ssp.com', '04 3754 7713', 'logo_blue.png', 'https://www.facebook.com/sachsupham/');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--
  
--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `tran_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `o_quantity` int(11) NOT NULL,
  `p_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`tran_id`, `p_id`, `o_quantity`, `p_price`) VALUES
(1, 40, 1, 9200),
(1, 41, 1, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `c_id` int(11) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_describe` text NOT NULL,
  `p_status` int(11) NOT NULL,
  `p_sale` int(11) NOT NULL,
  `p_feature` int(11) NOT NULL,
  `p_page` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `p_adddate` datetime NOT NULL,
  `p_thumbs_img` varchar(255) NOT NULL,
  `pl_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `c_id`, `p_price`, `p_image`, `p_describe`, `p_status`, `p_sale`, `p_feature`, `p_page`, `a_id`, `p_adddate`, `p_thumbs_img`, `pl_id`) VALUES
(39, 'Toán học', 15, 7800, 'giaitich12.jpg', '<p>S&aacute;ch to&aacute;n(Đại số)(Giải t&iacute;ch) lớp 12</p>\r\n', 1, 0, 1, 157, 1, '2016-03-15 13:51:54', 'toan12.png,toan12-2.png,toan12-3.png', 7),
(40, 'Công nghệ', 15, 9200, 'congnghe12.jpg', 'Sách công nghệ lớp 12', 1, 0, 0, 116, 1, '2016-03-15 13:53:59', 'congnghe12.png,congnghe12-2.png,congnghe12-3.png', 7),
(41, 'Giáo dục công dân', 15, 6000, 'gdcd12.jpg', 'Sách giáo dục công dân lớp 12', 1, 0, 0, 120, 1, '2016-03-15 13:58:14', 'gdcd12.png,gdcd12-2.png,gdcd12-3.png', 7),
(43, 'Vật lí', 15, 13400, 'vatli12.jpg', '<p>S&aacute;ch vật l&iacute; lớp 12</p>\r\n', 1, 0, 1, 199, 1, '2016-03-15 14:08:08', 'vatly12.png,vatly12-2.png,vatly12-3.png', 7),
(44, 'Sinh học', 15, 16000, 'sinhhoc12.jpg', 'Sách sinh học lớp 12', 1, 0, 0, 231, 1, '2016-03-15 14:09:38', 'sinhhoc12.png,sinhhoc12-2.png,sinhhoc12-3.png', 7),
(45, 'Tiếng anh', 15, 14500, 'tienganh12.jpg', 'Sách tiếng anh lớp 12', 1, 0, 0, 242, 1, '2016-03-15 15:25:41', 'tienganh12.png,tienganh12-2.png,tienganh12-3.png', 7),
(48, 'Ngữ văn', 15, 10600, 'nguvan12t1.jpg', 'Sách ngữ văn 12 tập 1', 1, 0, 0, 232, 1, '2016-03-15 15:58:34', 'vanhoc12.png,vanhoc12-2.png,vanhoc12-3.png', 7),
(49, 'Tiếng Trung', 14, 12300, 'tiengtrung11.jpg', 'Sách học tiếng Trung Quốc lớp 11', 1, 0, 0, 221, 1, '2016-03-15 16:04:59', 'tiengtrung11.png,tiengtrung11-2.png,tiengtrung11-3.png', 7),
(50, 'Giáo trình thống kê kinh tế', 30, 23000, '220019.jpg', '<p>Gi&aacute;o tr&igrave;nh về kinh tế</p>\r\n', 1, 0, 0, 324, 1, '2016-03-17 15:06:32', ',,', 1),
(51, 'Bài tập chọn lọc hóa học 11', 18, 34000, 'baitapchonlochoa11.jpg', '<p>S&aacute;ch tham khảo b&agrave;i tập h&oacute;a học lớp 11</p>\r\n', 1, 0, 1, 234, 1, '2016-03-17 15:08:13', ',,', 4),
(52, 'Bồi dưỡng học sinh giỏi toán THCS', 16, 45000, 'bdhsg-toan-w.jpg', '<p>S&aacute;ch để bồi dưỡng cho c&aacute;c bạn học sinh THCS</p>\r\n', 1, 0, 0, 264, 1, '2016-03-17 15:10:43', ',,', 1),
(53, 'Giáo trình kinh tế vĩ mô', 30, 52000, '218345.jpg', '<p>Gi&aacute;o tr&igrave;nh kinh tế v&igrave; m&ocirc; d&agrave;nh cho người l&agrave;m kinh tế</p>\r\n', 1, 0, 1, 426, 1, '2016-03-17 15:14:01', ',,', 2),
(54, 'Địa lí', 13, 24000, 'diali10.jpg', '<p>S&aacute;ch địa l&iacute; 10</p>\r\n', 1, 0, 1, 275, 1, '2016-03-17 20:33:18', ',,', 7),
(55, 'Địa lí ', 9, 17500, 'diali6.jpg', '<p>S&aacute;ch địa l&iacute; lớp 6</p>\r\n', 1, 0, 0, 216, 1, '2016-03-17 22:17:46', ',,', 7),
(57, 'Tin học lập trình', 28, 21400, 'thq2bia.jpg', '<p>S&aacute;ch lập tr&igrave;nh tin học bản 1</p>\r\n', 1, 0, 0, 176, 1, '2016-03-17 23:18:12', ',,', 2),
(58, 'Hướng dẫn làm văn mô tả', 21, 34900, '39992-22_5.jpg', '<p>S&aacute;ch hướng dẫn l&agrave;m văn m&ocirc; tả</p>\r\n', 1, 0, 0, 317, 1, '2016-03-18 09:16:38', ',,', 1),
(59, 'Bồi dưỡng vào lớp 10', 26, 34500, 'onthivao10-TA-w.jpg', '<p>S&aacute;ch bồi dướng học sinh v&agrave;o lớp 10 tiếng anh</p>\r\n', 1, 0, 0, 342, 1, '2016-03-18 09:18:51', ',,', 1),
(60, 'Nâng cao trắc nghiệm vật lý ', 17, 39000, 'cb_c89eb3d156c1673fe5ef623960e07911.jpg', '<p>S&aacute;ch n&acirc;ng cao kỹ năng trắc nghiệm vật l&yacute;</p>\r\n', 1, 0, 0, 28000, 1, '2016-03-18 09:22:18', ',,', 1),
(61, 'Lập trình android', 28, 35000, 'Lap-trinh-android.jpg', '<p>S&aacute;ch học lập tr&igrave;nh android</p>\r\n', 1, 0, 0, 369, 1, '2016-03-18 09:24:08', ',,', 1),
(62, 'Giáo trình kỹ thuật lập trình C', 28, 45000, '1409544626_ky-thuat-lap-trinh-c-can-ban-va-nang-cao.jpg', '<p>S&aacute;ch gi&aacute;o tr&igrave;nh lập tr&igrave;nh C</p>\r\n', 1, 0, 0, 426, 1, '2016-03-18 09:25:40', ',,', 3);

-- --------------------------------------------------------

--
-- Table structure for table `publishers`
--

CREATE TABLE `publishers` (
  `pl_id` int(11) NOT NULL,
  `pl_name` varchar(255) NOT NULL,
  `pl_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publishers`
--

INSERT INTO `publishers` (`pl_id`, `pl_name`, `pl_status`) VALUES
(1, 'Nhà xuất bản Công Thương', 1),
(2, 'Nhà xuất bản Đại học Cần Thơ', 1),
(3, 'Nhà xuất bản Đại học Công Nghiệp TP.HCM', 1),
(4, 'Nhà xuất bản Đại học sư phạm TP.Hồ Chí Minh', 1),
(5, 'Nhà xuất bản Đại học Thái Nguyên', 1),
(6, 'Nhà xuất bản Đại học Vinh', 1),
(7, 'NXB Giáo dục Việt Nam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `r_id` int(11) NOT NULL,
  `r_title` varchar(255) NOT NULL,
  `r_content` text NOT NULL,
  `r_sort` int(11) NOT NULL,
  `r_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `s_id` int(11) NOT NULL,
  `s_image` varchar(200) NOT NULL,
  `s_link` varchar(200) NOT NULL,
  `s_button` varchar(255) NOT NULL,
  `s_active` int(11) NOT NULL,
  `s_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`s_id`, `s_image`, `s_link`, `s_button`, `s_active`, `s_status`) VALUES
(1, 'c-slide-1.jpg', 'sach_giao_khoa.php', 'Mua ngay', 1, 1),
(2, 'c-slide-2', 'sach_tham_khao.php', 'Xem ngay', 0, 1),
(3, 'c-slide-3.jpg', 'sach_chuyen_nganh.php', 'Đăng ký', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `tran_id` int(11) NOT NULL,
  `cus_id` int(11) NOT NULL,
  `tran_buydate` datetime NOT NULL,
  `tran_totalprice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`tran_id`, `cus_id`, `tran_buydate`, `tran_totalprice`) VALUES
(1, 79, '2016-03-17 00:00:00', 15200);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `u_account` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_address` varchar(255) NOT NULL,
  `u_permiss` int(11) NOT NULL,
  `u_status` int(11) NOT NULL,
  `u_adddate` datetime NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_account`, `u_password`, `u_name`, `u_address`, `u_permiss`, `u_status`, `u_adddate`, `u_email`, `u_phone`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Phùng Văn Chung', 'Vĩnh Phúc', 2, 1, '2016-03-16 10:57:41', 'chungback97@gmail.com', '01635262542'),
(2, 'yenmasieupham', '50b709f40a2065fb55fd0e7f1caa8309', 'Yến ma', 'Hà Nam', 1, 1, '2016-03-16 11:06:19', 'yenmasieupham@gmail.com', '0923845913'),
(3, 'quan.nm', '92de4ab2220b1792e5a992c145f4b56f', 'Nguyễn Mạnh Quân', 'Hà Nội', 1, 1, '2016-03-16 11:06:58', 'quan.nm@gmail.com', '01749520538'),
(4, 'duc97', '131d0ec166072f3b9033dc82e013751b', 'Hà Anh Đức', 'Hà Nội', 1, 0, '2016-03-16 11:08:07', 'anhducha@gmail.com', '01648295294'),
(5, 'duyga', '223950c0314bcdb699803809ba77c4c4', 'Đặng Văn Duy', 'Hà Nội', 1, 0, '2016-03-16 11:11:27', 'dangvanduy97@gmail.com', '0164738292'),
(6, 'test7', 'c4f34696073e92ebe8749eba3d2079e5', 'Bùi văn test', 'Bình Định', 1, 1, '2016-03-16 11:12:53', 'test01@gmail.com', '0148274495'),
(7, 'admin2', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'Vĩnh Phúc', 2, 1, '2016-03-16 11:13:27', 'admin@gmail.com', '0948237134'),
(8, 'test8', 'c90f8bc040edd14f37ae2e0e1d913fc5', 'Nhân viên test', 'Cao Bằng', 1, 1, '2016-03-16 11:14:08', 'test08@gmail.com', '0248736284'),
(9, 'test09', 'b1a55422f01b0240fc7aa55e62e63b69', 'Test09', 'Nghệ An', 1, 1, '2016-03-16 11:14:51', 'test9@gmail.com', '018594833'),
(10, 'hung98', '38582fac0d3bca5c6a5a4342ad6a425c', 'Bùi Văn Hùng', 'Vĩnh Phúc', 1, 1, '2016-03-16 11:17:58', 'hungbui@gmail.com', '014738294'),
(11, 'phuongnguyen', '06dc67758e6bd6f8b089aee4a915441e', 'Nguyễn Thị Phượng', 'Vĩnh Phúc', 1, 1, '2016-03-16 11:18:35', 'nguyenphuong97@gmail.com', '01646536859'),
(12, 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'Test', '<p>Test</p>\r\n', 1, 1, '2016-03-16 19:27:37', 'chungback97@gmail.com', '01635262542'),
(13, 'chungback2', '498baec1460c04743d4927de9397e61b', 'Chung', '23423423', 1, 1, '2016-03-16 19:34:59', 'chungback97@gmail.com', '01635262542');

--
-- Indexes for dumped tables
--
CREATE TABLE `news` (
  `n_id` int(11) NOT NULL,
  `n_title` varchar(255) NOT NULL,
  `n_image` varchar(255) NOT NULL,
  `n_sum` varchar(255) NOT NULL,
  `n_content` text NOT NULL,
  `n_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `infomations`
--
ALTER TABLE `infomations`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD KEY `tran_id` (`tran_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `a_id` (`a_id`),
  ADD KEY `pl_id` (`pl_id`);

--
-- Indexes for table `publishers`
--
ALTER TABLE `publishers`
  ADD PRIMARY KEY (`pl_id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`tran_id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `infomations`
--
ALTER TABLE `infomations`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `publishers`
--
ALTER TABLE `publishers`
  MODIFY `pl_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `tran_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`tran_id`) REFERENCES `transactions` (`tran_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`) ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `categories` (`c_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`a_id`) REFERENCES `authors` (`a_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`pl_id`) REFERENCES `publishers` (`pl_id`) ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `customers` (`cus_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

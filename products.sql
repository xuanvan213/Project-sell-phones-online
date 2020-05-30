-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th9 27, 2019 lúc 04:05 AM
-- Phiên bản máy phục vụ: 5.7.21
-- Phiên bản PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `mobile`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`, `manu_id`, `type_id`) VALUES
(1, 'Điện thoại Samsung Galaxy S10+ (512GB)', 22990000, 'S10+.jpg', 'Màn hình của máy có kích thước 6.4 inch cùng độ phân giải khủng 2K+ cho bạn thưởng thức những bộ phim hay xem những hình ảnh sắc nét.\r\nCông nghệ HDR10+ tiên tiến nhất hiện nay cho bạn một trải nghiệm hình ảnh thực sự khác biệt so với phần còn lại của thế giới smartphone.\r\n', 2, 1),
(2, 'Điện thoại Samsung Galaxy A50s', 7790000, 'A50.jpg', 'Samsung đã sử dụng thiết kế 3D Glasstic trên chiếc smartphone này giúp mặt lưng tạo ra nhiều hiệu ứng màu sắc khác nhau khi ánh sáng chiếu vào và làm tăng thêm vẻ cao cấp.\r\nHiện rất nhiều người dùng vẫn ưa chuộng sử dụng cổng cắm tai nghe 3.5mm và tin vui là Galaxy A50s không bị lược bỏ cổng kết nối này.\r\n', 2, 1),
(3, 'Điện thoại iPhone Xs Max 256GB', 34990000, 'iphoneXSMax.jpg', 'Sau 1 năm mong chờ, chiếc smartphone cao cấp nhất của Apple đã chính thức ra mắt mang tên iPhone Xs Max. Máy các trang bị các tính năng cao cấp nhất từ chip A12 Bionic, dàn loa đa chiều cho tới camera kép tích hợp trí tuệ nhân tạo.', 1, 1),
(4, 'Điện thoại iPhone Xr 128GB', 19990000, 'iphoneXR.jpg', 'Apple cũng giới thiệu rằng, iPhone Xr được trang bị một loại công nghệ mới có tên Liquid Retina. Máy có độ phân giải 1792 x 828 Pixels cùng 1.4 triệu điểm ảnh.\r\nMượt mà mọi trải nghiệm nhờ chip Apple A12\r\nVới mỗi lần ra mắt, Apple lại giới thiệu một con chip mới và Apple A12 Bionic là con chip đầu tiên sản xuất với tiến trình 7nm được tích hợp trên iPhone Xr.', 1, 1),
(5, 'LG Signature Edition', 42300000, 'LGedition.jpg', 'Về mặt cấu hình, LG Signature Edition (2018) được trang bị chip Snapdragon 845, đi cùng với RAM 6GB và 256GB dung lượng bộ nhớ lưu trữ. Máy sở hữu màn hình OLED QHD+ với kích thước 6 inch. Thiết bị này còn được trang bị chip âm thanh Quad DACDAC giúp tăng trải nghiệm khi nghe nhạc. Ở mặt sau, LG Signature Edition (2018) có camera kép 16 Mpx hỗ trợ bởi AI.', 5, 1),
(6, 'LG V50 ThinQ 5G', 10990000, 'LGThinQ5G.jpg', 'LG V50 ThinQ vẫn có thiết kế như những thiết kế trước đây của hãng nhưng đã được làm mới hơn một chút. Kiểu dáng vuông vắn cùng màn hình \"tai thỏ\", phía sau là cụm camera ba ống kính đặt ngang và cảm biến vân tay.Hệ thông camera của LG V50 ThinQ xách tay có đến 3 ống kính với độ phân giải lần lượt là 12MP, khẩu độ f/1.5, ống tele 12MP, khẩu độ f/2.4 và ống kính gốc siêu rộng 16MP.', 5, 1),
(7, 'Điện thoại iPhone 8 Plus 64GB', 19990000, 'iphone8plus.jpg', 'Smartphone iPhone 8 Plus giữ nguyên hoàn toàn những đường nét thiết kế đã hoàn thiện từ thế hệ trước nhưng sử dụng phong cách 2 mặt kính cường lực kết hợp bộ khung kim loại. Con chip Apple A11 như trên iPhone X cho hiệu năng vượt trội hơn rất nhiều so với trước đây, đặc biệt tối ưu cho 3D và thực tế ảo tăng cường AR, một trải nghiệm hoàn toàn mới mẻ trên smartphone.', 1, 1),
(8, 'Điện thoại Samsung Galaxy A70', 9290000, 'A70.jpg', 'Galaxy A70 có 3 màu sắc bán ra tương tự các dòng sản phẩm thấp hơn trước đó là \"Đen, Trắng và Xanh\". Cả 3 phiên bản này đều được trang bị thêm hiệu ứng lấp lánh nhiều màu khi nghiêng theo góc nhìn rất đẹp mắt.', 2, 1),
(9, 'Điện thoại Samsung Galaxy Note 10', 22990000, 'Note10.jpg', 'Nếu như từ trước tới nay dòng Galaxy Note của Samsung thường ít được các bạn nữ sử dụng bởi kích thước màn hình khá lớn khiến việc cầm nắm trở nên khó khăn thì Samsung Galaxy Note 10 sẽ là chiếc smartphone nhỏ gọn, phù hợp với cả những bạn có bàn tay nhỏ.', 2, 1),
(10, 'Điện thoại iPhone 6s Plus 32GB', 9490000, 'iphone6splus.jpg', 'Điện thoại iPhone 6s Plus 32 GB được nâng cấp độ phân giải camera sau lên 12 MP (thay vì 8 MP như trên iPhone 6 Plus), camera cho tốc độ lấy nét và chụp nhanh, thao tác chạm để chụp nhẹ nhàng. Chất lượng ảnh trong các điều kiện chụp khác nhau tốt. IPhone 6s Plus 32 GB sử dụng vi xử lý A9 tốc độ 1.8 GHz (iPhone 6 Plus chỉ với 1.4 GHz), giúp máy chạy cùng lúc nhiều ứng dụng mượt mà.', 1, 1),
(11, 'Điện thoại iPhone 7 Plus 32GB', 12490000, 'iphone7plus.jpg', 'Mặc dù giữ nguyên vẻ bề ngoài so với dòng điện thoại iPhone đời trước, bù lại iPhone 7 Plus 32GB lại được trang bị nhiều nâng cấp đáng giá như camera kép đầu tiên cũng như cấu hình mạnh mẽ. Ngoài trái tim Apple A10 Fusion 4 nhân với hiệu năng cực kì mạnh mẽ và ấn tượng thì iPhone 7 Plus còn được cập nhật hệ điều hành mới nhất với nhiều tính năng bất ngờ, và thú vị.', 1, 1),
(12, 'Điện thoại Samsung Galaxy A7 (2018) 128GB', 7990000, 'A7.jpg', 'Được nâng cấp cả RAM và bộ nhớ trong, Samsung Galaxy A7 (2018) 128GB đem lại khả năng đa nhiệm, lưu trữ tốt hơn. Đồng thời đây cũng là chiếc smartphone đầu tiên của Samsung được trang bị tới 3 camera ở mặt sau và cảm biến vân tay cạnh bên.', 2, 1),
(13, 'Laptop Apple Macbook Air 2017 i5 1.8GHz/8GB/128GB (MQD32SA/A)', 22990000, 'MacAir2017.jpg', 'MacBook Air 2017 i5 128GB là mẫu laptop văn phòng, có thiết kế siêu mỏng và nhẹ, vỏ nhôm nguyên khối sang trọng. Máy có hiệu năng ổn định, thời lượng pin cực lâu 12 giờ, phù hợp cho hầu hết các nhu cầu làm việc và giải trí. ', 1, 2),
(14, 'Laptop Apple MacBook Pro 2018 Touch i5 2.3GHz/8GB/256GB', 41990000, 'MacAir2018.jpg', 'Thế hệ Macbook Pro 2018 đã được ra mắt với nâng cấp mạnh mẽ về cấu hình và khả năng bảo mật với con chip Apple T2. Máy vẫn giữ nguyên các ưu điểm đặc trưng như màn hình siêu nét, thiết kế cao cấp cùng thanh Touch Bar cho khả năng tương tác tuyệt vời với các ứng dụng. Trên phiên bản 2018, MacBook Pro được nâng cấp lên CPU Core i5 thế hệ 8 KabyLake R, tốc độ tối đa đạt đến 3.8 GHz, dung lượng RAM 8 GB cùng card đồ họa tích hợp hiệu năng cao Intel Iris Plus Graphics 655.', 1, 2),
(15, 'Laptop Asus Vivobook S530UN i5 8265U/4GB/1TB/ MX150/Win10 ', 18090000, 'vivobookS530UN.jpg', 'Nếu việc xách trên tay một chiếc laptop đại diện cho sự trẻ trung, năng động thì laptop ASUS VivoBook S15 S530UF là một sự lựa chọn không thể nào hoàn hảo hơn. Thiết kế mỏng chỉ 18 mm, nặng 1,8 kg dễ dàng cho bạn mang theo mọi nơi. Laptop Asus VivoBook S15 là sự kết hợp hoàn hảo giữa thời trang với công nghệ hiện đại cho bạn cảm giác tự tin khi sử dụng.', 4, 2),
(16, 'Laptop Asus Vivobook S530FN i7 8565U/8GB/512GB/ MX150/Win10/(BQ593T)', 23590000, 'VivoS530FN.jpg', 'Thỏa mái làm việc, giải trí đỉnh cao với Asus S530FN BQ593T, laptop mỏng nhẹ xử lý dữ liệu siêu nhanh. Công nghệ màn hình cao cấp, bảo vệ mắt là một chiếc laptop 15.6 inch, nhưng laptop Asus S530FN BQ593T lại có được vẻ nhỏ gọn đáng kinh ngạc nhờ viền màn hình siêu mỏng.\r\nThêm vào đó, màn hình IPS chống chói giúp bảo vệ mắt bằng cách cho hiển thị hình ảnh sắc nét và sống động dưới bất cứ điều kiện ánh sáng nào, bao gồm những nơi nhiều ánh sáng mặt trời như quán cà phê.\r\n\r\n', 4, 2),
(17, 'Laptop Apple iMac 27 inch 5K Retina i5 3.0GHz/8GB/1TB/ 4GB Radeon 570x', 47990000, 'iMac27.jpg', 'Dân đồ họa, kĩ thuật hay văn phòng không thể bỏ qua chiếc Apple iMac 27 inch 5K Retina i5 (MRQY2SA/A) 2 trong 1 này. Apple iMac được thiết kế tích hợp CPU có cấu hình mạnh cùng với màn hình 27 inch độ phân giải 5K tuyệt sắc. ', 1, 2),
(18, 'Điện thoại LG K40s', 8400000, 'LGK40.jpg', 'Thiết kế của LG K40s cũng khá đơn giản, không cầu kỳ đem lại cảm giác cầm nắm khá thỏa mái. Kích thước máy khá nhỏ gọn nên bạn có thể dễ dàng cho vào túi quần mà không cảm thấy khó chịu. Điểm ấn tượng nhất trên máy chính là đạt chuẩn độ bền cấp quận sự MIL-STD 810G giúp người dùng chống chọi lại các va chạm không đáng có.', 5, 1),
(19, 'Điện thoại LG Q70', 9220000, 'LGQ70.jpg', 'LG gọi đây là công nghệ màn hình Hold In Display với độ phân giải Full HD+, tỉ lệ 18.5:9 với kích thước 6.5 inch. LG Q70 có thiết kế nguyên khối chất liệu vỏ bằng nhựa màu sắc cuốn hút, đây được đánh giá là một chiếc smartphone có thiết kế đẹp nhất của LG. Camera trên LG Q70 cũng rất đáng chú ý với bộ 3 camera gồm cảm biến chính 32 MP + ống kính góc siêu rộng 13 MP + cảm biến độ sâu 5 MP.', 5, 1),
(20, 'Điện thoại LG K50s', 12000000, 'LHK50s.jpg', 'Camera trước của máy cũng có độ phân giải lên tới 13 MP, được trang bị sẵn các chế độ làm đẹp hứa hẹn sẽ không làm phụ lòng những bạn trẻ thích tự sướng.\r\nThời lượng pin chính là một trong những điểm mạnh nhất của LG K50s. Chiếc smartphone này sở hữu viên pin có dung lượng khủng lên đến 4.000 mAh giúp kéo dài thời gian sử dụng đến 2 ngày, hoặc nếu chơi game và xem video liên tục thì bạn hoàn toàn yên tâm, sẽ không bị \"hết xăng\" giữa ngày. LG K50s cũng đi theo xu thế màn hình giọt nước cho bạn một trải nghiệm mới mẻ cùng kích thước màn hình lên tới 6.5 inch', 5, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

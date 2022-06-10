-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2022 at 05:58 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `do_an_web_co_ban`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idad` int(11) NOT NULL,
  `namead` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idad`, `namead`, `email`, `password`, `level`) VALUES
(13, 'Super Admin', 'sadmin@gmail.com', '123', 1),
(14, 'Admin', 'admin@gmail.com', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` char(15) NOT NULL,
  `address` text NOT NULL,
  `token` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `password`, `phone`, `address`, `token`) VALUES
(1, 'Kien', 'kien@abc', '123', '123123123', 'HP', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `photo`) VALUES
(3, 'Bạc Sỉu', 'Bạc sỉu – Nét văn hóa đầy tự hào của người Sài Gòn\r\n\r\nChính vị ngon của sữa trong 1 ly Bạc sỉu sẽ là thứ chinh phục bạn.\r\n\r\nNguồn gốc\r\n\r\nTheo chân những người gốc Hoa đến định cư tại Sài Gòn, Bạc sỉu là cách gọi tắt của \"Bạc tẩy sỉu phé\" trong tiếng Quảng Đông. Bạc là \"trắng\". Tẩy là \"ly\". Sỉu là \"một chút\". Phé là \"cà phê\".\r\n\r\nBạc sỉu chính là \"Ly sữa trắng kèm một chút cà phê\".\r\n\r\nNgười lao động phổ thông khi xưa dùng sữa đặc pha với nước nóng để thay thế cho sữa tươi đắt đỏ trong thời điểm ấy. Tuy vậy, vị sữa đặc pha khá nồng, nên họ biến tấu chút cà phê vào cho ly sữa thêm thơm và hấp dẫn.\r\n\r\nNgười Sài Gòn \"chánh hiệu con mèo đen\" dùng Bạc sỉu nóng. Theo thời gian, người ta thêm đá vào ly “sữa cà phê” này để thưởng thức được cả trong những ngày oi bức.\r\n\r\nQua đôi bàn tay “tài hoa” của các nghệ nhân pha chế của The Coffee House, Bạc sỉu lại mang hương vị rất riêng và rất khác so với những nơi khác. Tại đây, mỗi ly Bạc sỉu được tạo nên từ tinh chất cà phê ĐắkLắk thượng hạng, sữa thơm béo và kỹ thuật pha chế điêu luyện sẽ mang đến cho bạn một hương vị bạc sỉu hoàn toàn mới.\r\n\r\nBởi vì thức uống này có thành phần chính là sữa thêm chút cà phê thơm lừng nên vừa giúp bạn thỏa mãn về vị giác và giúp tỉnh táo để bạn có một ngày học tập và làm việc ngập tràn năng lượng. Thức uống này rất phù hợp những ai vừa muốn trải nghiệm chút vị đắng của cà phê vừa muốn thưởng thức vị ngọt béo ngậy từ sữa.\r\n\r\n', '1654318905.jpg'),
(4, 'Americano Đá', 'Khám phá tách cà phê Americano theo phong cách Mỹ\r\nAmericano bắt nguồn từ Espresso. Đây là một thức uống truyền thống của Mỹ và đã trở nên quen thuộc với các tín đồ cà phê trên thế giới.\r\n\r\nNguồn gốc lịch sử\r\n\r\nCâu chuyện được kể lại rằng trong Thế Chiến Thứ II, những binh sĩ Mỹ đóng quân trên đất Ý đã rơi vào tình trạng \"say bí tỉ\" khi lần đầu tiếp xúc với hương vị Espresso mạnh mẽ vùng bản địa.\r\n\r\nVốn không quen với độ sánh đặc của cà phê nơi đây, họ đã nảy ra ý tưởng thêm nước nóng vào cốc Espresso để làm loãng nó.\r\n\r\nVà từ đó, Americano của người Mỹ (American) ra đời.\r\n\r\nAmericano được các nghệ nhân pha chế bằng cách pha thêm nước với tỷ lệ nhất định vào tách cà phê Espresso, từ đó mang lại hương vị nhẹ nhàng và giữ trọn được mùi hương cà phê đặc trưng.\r\n\r\nLợi ích khi thưởng thức cà phê Americano mỗi ngày\r\n\r\nNgoài việc mang đến sự tỉnh táo, linh hoạt cho người uống, Americano còn có thành phần chống oxy hóa nên nếu thưởng thức hằng ngày sẽ giúp ngăn ngừa xơ gan, giảm hen suyễn, lợi tiểu và hỗ trợ chống ung thư.\r\n\r\nVậy nên, hãy bắt đầu buổi sáng của mình bằng một tách Cà phê Americano nhé!', '1654319768.jpg'),
(5, 'Mocha Đá', 'Không như cà phê Cappuchino chỉ có một lớp bọt sữa trên bề mặt, cà phê Mocha còn hòa quyện cả vị thơm béo của kem tươi và sốt sô-cô-la.\r\n\r\nNgười ta thường ví cà phê như một thức uống kỳ diệu. Chúng không ngọt ngào để nuông chiều cảm xúc của bất kỳ ai nhưng lại mang đến một sự bí ẩn rất cuốn hút, khơi gợi người khác phải khám phá.\r\n\r\nBên cạnh những loại cà phê máy như Espresso, Cappuchino, Latte,… thực khách tại Tê Coffee House cũng dành nhiều tình cảm cho một loại cà phê khác mang tên Mocha. Mocha là một dạng hỗn hợp giữa cà phê và sô-cô-la nóng. Không như cà phê Cappuchino chỉ có một lớp bọt sữa trên bề mặt, cà phê Mocha còn hòa quyện cả vị thơm béo của kem tươi và sốt sô-cô-la. Mùi vị này, hương thơm này tựa như hương vị của một tình yêu chớm nở, vừa có chút vị đắng của Espresso và sự ngọt ngào đầy lôi cuốn.', '1654825237.jpg'),
(6, 'Cà Phê Sữa Đá Chai Fresh 250ML', 'Cà phê sữa chai fresh mới – Bí kíp để ngày dài trọn vị \r\n\r\nCà phê sữa đá thơm ngon, đậm đà đã có thể theo bạn đến về nhà mà vẫn giữ nguyên hương vị thân thuộc.\r\n\r\nNgày nay, với nhiều lý do khác nhau mà người ta lại ít có thời gian hoặc điều kiện để có thể thưởng thức một ly cà phê đúng gu ngay tại quán quen thân thuộc. Để đáp ứng nhu cầu của dân “ghiền” cà phê, The Coffee House giới thiệu dòng sản phẩm Cà phê sữa  chai fresh 250ml vô cùng tiện lợi, an toàn và tiết kiệm khi có thể pha được 3 ly nhưng vẫn giữ trọn vẹn vị ngon thuần túy như pha tại quán.\r\n\r\nKhông dừng lại ở đó, Cà phê sữa đá chai fresh tại The Coffee House luôn được pha mới mỗi ngày từ những nguyên liệu hảo hạng, chất lượng, không sử dụng chất bảo quản nhằm mang đến cho khách hàng sản phẩm cà phê tuyệt hảo và tốt cho sức khỏe.\r\n\r\nCòn chần chờ mà không đặt ngay để có một ngày dài trọn vị!\r\n', '1654324857.jpg'),
(7, 'Trà Đào Cam Sả', 'Trà đào cam sả - Thức uống nhất định phải thử 1 lần khi đến.\r\nCó thể bạn chưa biết, Trà Đào Cam Sả chính là một trong những món đồ uống được rất nhiều thực khách gọi mỗi khi ghé thăm. \r\n\r\nHương vị tuy quen mà lạ, tuy lạ mà quen\r\n\r\nKhi sáng chế ra thức uống này, Barista tại Nhà đã để lại dấu ấn riêng rất Việt trong món trà đào vốn đã quen thuộc đối với mọi người bằng một nguyên liệu rất đỗi dân dã - Sả, một loại cây vốn được trồng và sử dụng rộng rãi như là một gia vị thường thấy trong bữa ăn hằng ngày tại các nước châu Á. Sả có hương thơm của chanh, tính ấm, kết hợp với tính hàn của Cam vàng Mỹ, tạo nên sự kết hợp cân bằng, vừa mang dấu ấn riêng của Việt Nam, vừa có sự pha trộn phương Tây trong ly Trà đào Cam Sả. Vị thanh ngọt của đào Hy Lạp, vị chua dịu của Cam Vàng nguyên vỏ, vị chát của trà đen tươi được ủ mới mỗi 4 tiếng, cùng hương thơm nồng đặc trưng của sả chính là điểm sáng làm nên sức hấp dẫn của thức uống này. \r\n\r\nTrà đào cam sả - Bổ sung thêm C, Tăng cường sức đề kháng\r\n\r\nKhông chỉ hương vị thơm ngon, Trà đào cam sả còn có các tác dụng tuyệt vời cho cơ thể. Có thể kể đến như:\r\n\r\nChống oxy hóa: Trong trà đào có chất chống oxy hóa mạnh mẽ và các hợp chất có thể ngăn ngừa quá trình lão hóa của da. \r\n\r\nTăng cường hệ miễn dịch: Chất chống oxy hóa có trong sả và cam còn góp phần nâng cao hệ thống miễn dịch, làm giảm căng thẳng và mệt mỏi. Một ly trà đào mỗi ngày sẽ bổ sung lượng lớn vitamin C giúp cơ thể.', '1654324909.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `name_receiver` varchar(50) NOT NULL,
  `phone_receiver` char(15) NOT NULL,
  `address_receiver` text NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `name_receiver`, `phone_receiver`, `address_receiver`, `status`, `created_at`, `total_price`) VALUES
(1, 1, 'Kien', '123123123', 'HP', 0, '2022-06-04 04:27:33', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `order_product`
--

CREATE TABLE `order_product` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_product`
--

INSERT INTO `order_product` (`order_id`, `product_id`, `quantity`) VALUES
(1, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `price` float NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `photo`, `price`, `description`) VALUES
(6, 'Trà Vải', '1650075405.jpg', 50000, 'Chút ngọt ngào của Vải, mix cùng vị chua thanh tao từ trà hoa Hibiscus, mang đến cho bạn thức uống đúng chuẩn vừa ngon, vừa healthy.'),
(7, 'Trà Đào', '1650091983.jpg', 50000, 'Sự kết hợp ăn ý giữa Đào cùng trà hoa Hibiscus, tạo nên tổng thể hài hoà dễ gây “thương nhớ” cho team thích món thanh mát, có vị chua nhẹ.'),
(8, 'Trà Yuzu', '1650092470.jpg', 60000, 'Không chỉ nổi bật với sắc đỏ đặc trưng từ trà hoa Hibiscus, Hi-Tea Yuzu còn gây ấn tượng với topping Yuzu (quýt Nhật) lạ miệng, kết hợp cùng trân châu trắng dai giòn sần sật, nhai vui vui.'),
(9, 'Trà Yuzu Vải', '1650092504.jpg', 60000, 'Vị chua chua của trà hoa Hibiscus cùng đá tuyết Yuzu chua dịu trở nên hài hòa hơn nhờ topping trái vải ngọt ngào, sẽ khiến bạn thích thú ngay từ lần thử đầu tiên.'),
(10, 'Đá Tuyết Xoài Đào', '1650092539.jpg', 60000, 'Những miếng đào vàng ươm kết hợp với đá tuyết vị xoài mát lành, cùng nền trà hoa Hibiscus chua dịu đem đến cảm giác lạ miệng, hấp dẫn đến tận ngụm cuối cùng.'),
(11, 'Bánh Mì Thịt Nguội', '1650095790.jpg', 30000, 'Gói gọn trong ổ bánh mì Việt Nam, là từng lớp chả, từng lớp jambon hòa quyện cùng bơ và pate thơm lừng, thêm dưa rau cho bữa sáng đầy năng lượng.'),
(12, 'Chà Bông Phô Mai', '1650095817.jpg', 35000, 'Chiếc bánh với lớp phô mai vàng sánh mịn bên trong, được bọc ngoài lớp vỏ xốp mềm thơm lừng. Thêm lớp chà bông mằn mặn hấp dẫn bên trên.'),
(13, 'Croissant Trứng Muối', '1650095844.jpg', 40000, 'Croissant trứng muối thơm lừng, bên ngoài vỏ bánh giòn hấp dẫn bên trong trứng muối vị ngon khó cưỡng'),
(14, 'Bạc Xỉu', '1654824650.jpg', 30000, 'Bạc sỉu chính là \"Ly sữa trắng kèm một chút cà phê\". Thức uống này rất phù hợp những ai vừa muốn trải nghiệm chút vị đắng của cà phê vừa muốn thưởng thức vị ngọt béo ngậy từ sữa.'),
(15, 'Americano Đá', '1654824787.jpg', 30000, 'Americano được pha chế bằng cách pha thêm nước với tỷ lệ nhất định vào tách cà phê Espresso, từ đó mang lại hương vị nhẹ nhàng và giữ trọn được mùi hương cà phê đặc trưng.'),
(16, 'Cà Phê Sữa Đá Chai Fresh 250ml', '1654825051.jpg', 70000, 'Vẫn là hương vị cà phê sữa đậm đà truyền thống từ cà phê Đắk Lắk nhưng khoác lên mình một chiếc áo mới tiện lợi hơn, tiết kiệm hơn giúp bạn tận hưởng một ngày dài trọn vẹn.'),
(17, 'Trà Đào Cam Sả Đá', '1654825350.jpg', 30000, 'Vị thanh ngọt của đào Hy Lạp, vị chua dịu của Cam Vàng nguyên vỏ, vị chát của trà đen tươi được ủ mới mỗi 4 tiếng, cùng hương thơm nồng đặc trưng của sả chính là điểm sáng làm nên sức hấp dẫn của thức uống này.'),
(18, 'Mocha Đá', '1654825528.jpg', 40000, 'Loại cà phê được tạo nên từ sự kết hợp hoàn hảo của vị đắng đậm đà của Espresso và sốt sô-cô-la ngọt ngào mang tới hương vị đầy lôi cuốn, đánh thức mọi giác quan nên đây chính là thức uống ưa thích của phụ nữ và giới trẻ.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idad`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`order_id`,`product_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `order_product`
--
ALTER TABLE `order_product`
  ADD CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

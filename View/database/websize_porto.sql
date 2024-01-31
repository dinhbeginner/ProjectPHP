-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 24, 2024 lúc 05:43 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `websize_porto`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `discriber` text NOT NULL,
  `star` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id_comment`, `id_khachhang`, `id_product`, `discriber`, `star`, `date`) VALUES
(24, 7, 3, '', 2, '2024-01-24'),
(25, 7, 3, 'tuyệt vời', 5, '2024-01-24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `total` varchar(20) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `id_customer`, `fullname`, `address`, `phone`, `email`, `total`, `order_date`) VALUES
(19, 7, 'dinh nguyen', 'quân 11', '0396516454', 'nguyenvanben2004@gmail.com', '9,928,000', '2024-01-16 17:00:00'),
(20, 7, 'dinh nguyen', 'quân 11', '0396516454', 'tofok63463@vip4e.com', '189,000', '2024-01-16 17:00:00'),
(21, 7, 'dinh nguyen', 'quân 11', '0396516454', 'vendor@gmail.com', '55,000', '2024-01-16 17:00:00'),
(22, 7, 'dinh nguyen', 'quân 11', '0396516454', 'nguyenvanben2004@gmail.com', '48,640,000', '2024-01-16 17:00:00'),
(23, 7, 'dinh nguyen', 'quân 11', '0396516454', 'dinh@gmail.com', '1,102,008,000', '2024-01-16 17:00:00'),
(24, 7, 'dinh nguyen', 'quân 11', '0396516454', 'trungkien44888888@gmail.com', '55,000', '2024-01-16 17:00:00'),
(25, 7, 'dinh nguyen', 'quân 11', '0396516454', 'admin@gmail.com', '289,000', '2024-01-16 17:00:00'),
(26, 7, 'dinh nguyen', 'quân 11', '0396516454', 'nguyenvanben2004@gmail.com', '496,400,000,000', '2024-01-18 17:00:00'),
(27, 7, 'dinh nguyen', 'quân 11', '0396516454', 'nguyenvanben2004@gmail.com', '1,993,000', '2024-01-23 17:00:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_size` varchar(50) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `product_price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_size`, `quantity`, `product_price`) VALUES
(20, 19, 6, 'Dây chuyền DCPTB 362', '', 2, '4.964.000'),
(21, 20, 7, 'Giầy nam màu đen', '41', 1, '189.000'),
(22, 21, 3, 'Loa 3D Ultimate dạng tròn', '', 1, '55.000'),
(23, 22, 16, 'Dây chuyền DCPTB 365', '', 10, '4.864.000'),
(24, 23, 6, 'Dây chuyền DCPTB 362', '', 222, '4.964.000'),
(25, 24, 3, 'Loa 3D Ultimate dạng tròn', '', 1, '55.000'),
(26, 25, 17, 'Đồng hồ thông minh', '', 1, '289.000'),
(27, 26, 6, 'Dây chuyền DCPTB 362', '', 100000, '4.964.000'),
(28, 27, 11, 'Túi du lịch thể thao nam', '', 1, '265.000'),
(29, 27, 16, 'Dây chuyền DCPTB 365', '', 2, '864.000');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_banner_menu`
--

CREATE TABLE `tbl_banner_menu` (
  `id_menu` int(11) NOT NULL,
  `ten_menu` varchar(128) NOT NULL,
  `img` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_banner_menu`
--

INSERT INTO `tbl_banner_menu` (`id_menu`, `ten_menu`, `img`) VALUES
(1, 'WATCHES', 'banner-1.jpg'),
(2, 'CLOTHES', ''),
(3, 'GLASSES', ''),
(4, 'HEADPHONE', ''),
(5, 'SHOES', ''),
(6, 'BAGS', 'banner-3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuc`
--

CREATE TABLE `tbl_danhmuc` (
  `id_danhmuc` int(11) NOT NULL,
  `name_danhmuc` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuc`
--

INSERT INTO `tbl_danhmuc` (`id_danhmuc`, `name_danhmuc`) VALUES
(1, 'HOME'),
(2, 'PRODUCTS'),
(3, 'SALES'),
(4, 'NEWS'),
(5, 'CONTACT US');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_infor_product`
--

CREATE TABLE `tbl_infor_product` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `describe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `id_customer` int(11) NOT NULL,
  `customer` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`id_customer`, `customer`, `username`, `password`, `email`, `address`, `phone`) VALUES
(7, 'dinh nguyen', 'Nguyenhoangdinh', '24f929c6ee111af13378f71e231099f6', 'nguyenvanben@gmail.com', '70 cu xa lu da', 12345789),
(9, 'Bền', 'DinhAn', 'b7dd4dfcc3267ffb54fc4b4c2bc06da5', 'nguyenvanben2004@gmail.com', 'trà vinh', 396516454),
(10, 'r', 'r', '3104a1f15ea653b717071992c3a4181a', 'login@example.com', 'r', 1234567899);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_mau`
--

CREATE TABLE `tbl_mau` (
  `id_product` int(11) NOT NULL,
  `color` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `ten_menu` varchar(50) NOT NULL,
  `imag_danhmuc_` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_menu`
--

INSERT INTO `tbl_menu` (`id_menu`, `id_danhmuc`, `ten_menu`, `imag_danhmuc_`) VALUES
(1, 2, 'WATCHES', 'category-2.jpg'),
(2, 2, 'NECKLACE', 'category-7.jpg'),
(3, 2, 'GLASSES', 'category-5.jpg'),
(4, 2, 'HEADPHONE', 'category-6.jpg'),
(5, 2, 'SHOES', 'category-3.jpg'),
(6, 2, 'BAGS', 'category-4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id_new` int(11) NOT NULL,
  `name_new` text NOT NULL,
  `content_new` text NOT NULL,
  `img_new` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_news`
--

INSERT INTO `tbl_news` (`id_new`, `name_new`, `content_new`, `img_new`) VALUES
(1, 'Nàng thơ xứ Huế\' diện áo dài đón năm mới', 'Hoa khôi Huế - Ngọc Trân - diện áo dài đa sắc trong bộ ảnh chụp ở chợ Bến Thành, Bảo tàng Mỹ thuật TP HCM, đón năm mới.\r\n<img src=\"assets/images/blog/thoitrang/post1.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nCác mẫu áo nằm trong bộ sưu tập mới của nhà thiết kế Phạm Ngọc Tây , lấy ý tưởng thiết kế xưa từ các phiên bản áo dài Le Mur thập niên 1930 đế áo dài Hippy cuối thập niên 1950.\r\nCác mẫu áo nằm trong bộ sưu tập \"Pride Vietnam\" của nhà mốt Phạm Ngọc Tây, lấy ý tưởng thiết kế từ các phiên bản áo dài Le Mur thập niên 1930 (gồm hai vạt trước, đáp eo, mặc với quần satin trắng ống loe) và áo dài Hippy ở cuối thập niên 1950 (chất liệu nhẹ, màu sắc rực rỡ, họa tiết hình hoa cỏ hoặc kỷ hà).\r\n<img src=\"assets/images/blog/thoitrang/post2.jpg\"style=\"width:620px;height:800px\"   alt=\"Post\">\r\n<img src=\"assets/images/blog/thoitrang/post3.jpg\"style=\"width:700px;height:800px\" alt=\"Post\">\r\n.\r\nNhà thiết kế thực hiện các mẫu áo mang phong cách hiện đại với các kiểu có cổ hoặc không cổ, tay ngắn, vai bồng, cổ tay xòe.\r\n<img src=\"assets/images/blog/thoitrang/post4.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nChiếc áo cổ tròn tôn được phần cổ, bờ vai của người mặc, phù hợp thời tiết nhiệt đới của miền Nam.\r\n<img src=\"assets/images/blog/thoitrang/post5.jpg\" style=\"width:620px;height:800px\" \r\n alt=\"Post\">\r\nKiểu áo raglan (ráp thân áo và ống tay bằng việc nối một đường chéo từ cổ áo xuống nách) mang phong cách hoài cổ.\r\n<img src=\"assets/images/blog/thoitrang/post5.jpg\"style=\"width:620px;height:800px\"  alt=\"Post\">\r\nChất liệu của bộ sưu tập gồm linen, nhung,\r\n<img src=\"assets/images/blog/thoitrang/post6.jpg\"style=\"width:620px;height:800px\"  alt=\"Post\">\r\n\r\nCác chi tiết thêu, đính đá, đính hoa nổi đều được làm bằng tay, tạo điểm nhấn. Nhà thiết kế cho biết mong muốn tạo ra các mẫu áo nhung sang trọng nhưng không bị già, có thể diện trong nhiều dịp.\r\n<img src=\"assets/images/blog/thoitrang/post7.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nCác chi tiết thêu, đính đá, đính hoa nổi đều được làm bằng tay, tạo điểm nhấn. Nhà thiết kế cho biết mong muốn tạo ra các mẫu áo sang trọng nhưng không bị già, có thể diện trong nhiều dịp.\r\n<img src=\"assets/images/blog/thoitrang/post8.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nHọa tiết có hình ảnh hoa lá được thêu 3D để tạo điểm nhấn.\r\n<img src=\"assets/images/blog/thoitrang/post9.jpg\"style=\"width:620px;height:800px\"  alt=\"Post\">\r\nNgọc Trân được gọi là nàng thơ xứ Huế qua series giới thiệu văn hóa, ẩm thực cùng tên do cô làm host. Người đẹp từng đăng quang Hoa khôi Du lịch Huế 2015, sau đó thi Hoa hậu Việt Nam 2016 nhưng bỏ cuộc giữa chừng.', 'post1.jpg'),
(2, 'Áo dài của Quang Hải và vợ sắp cưới cảm hứng từ triều phục', 'Áo dài của Quang Hải và vợ sắp cưới cảm hứng từ triều phục\r\nCầu thủ Quang Hải và vợ sắp cưới diện áo cảm hứng từ trang phục của vua Bảo Đại và hoàng hậu Nam Phương khi chụp ảnh cưới.\r\n<img src=\"assets/images/blog/thoitrang/post10.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nTiền vệ tuyển thủ Việt Nam Nguyễn Quang Hải và bạn gái Chu Thanh Huyền làm lễ ăn hỏi ngày 1/1/2024, sau ba năm hẹn hò. Để chuẩn bị cho sự kiện, họ chuẩn bị bốn bộ áo dài do nhà thiết kế Hà Cúc: Một bộ dạm ngõ, hai bộ ăn hỏi và một bộ để chụp ảnh. Trong số đó, trang phục cưới nổi bật và khác biệt khi mang phong cách cổ trang.\r\n\r\nÁo dài chụp hình cưới của Quang Hải và Thanh Huyền mô phỏng triều phục của Vua Bảo Đại và Hoàng hậu Nam Phương trong những năm 1930. Ảnh: Linh Lê\r\n\r\n\r\nNhà thiết kế Hà Cúc cho biết hai bộ áo dài của cô dâu, chú rể được phỏng dựng từ hiện vật và tư liệu hình ảnh trang phục của vua và hoàng hậu giai đoạn thập niên 1930. Chiếc áo của chú rể Quang Hải dựa trên bộ quần áo phục có thật của Vua Bảo Đại được mặc nhiều lần trong các dịp trang trọng, trong đó có chuyến sang Pháp năm 1939. Áo ngũ thân tay chẽn, thêu hình bát bửu, hoa cỏ và thủy ba, tạo hiệu ứng nổi bật bằng sequin.\r\n\r\nTrang phục của Thanh Huyền mô phỏng từ bộ lễ phục hoàng gia đầu tiên của hoàng hậu Nam Phương trong hôn lễ với vua Bảo Đại năm 1934. Áo mang dáng Nhật bình có nguồn gốc từ loại áo Phi phong của triều Minh, được triều Nguyễn tiếp thu, cải cách. Kiểu áo vốn dành cho bậc hậu, phi, cung tần và công chúa thời Nguyễn, nay trở thành loại trang phục phổ biến của phụ nữ Huế trong dịp hôn lễ. Tà áo điểm xuyết bằng sequin, cổ áo thêu tỉ mỉ, nhấn bằng các họa tiết, hình hoa mang ý nghĩa may mắn, hạnh phúc.\r\n<img src=\"assets/images/blog/thoitrang/post11.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\n\r\nVợ chồng cầu thủ Quang Hải sẽ mặc áo Liên Hoa Triều Phụng trong lễ ăn hỏi. Ảnh: Hà Cúc\r\nVợ chồng cầu thủ Quang Hải sẽ mặc áo \"Liên Hoa Triều Phụng\" trong lễ ăn hỏi. Ảnh: Hà Cúc\r\n\r\nVới lễ ăn hỏi, vợ chồng cầu thủ chuẩn bị hai bộ áo dài, tốn hai tuần thực hiện từ lên ý tưởng đến hoàn thiện. Bộ áo màu đỏ mang tên Liên Hoa Triều Phụng, nhấn bằng họa tiết thêu song phụng, ngụ ý song hỷ. Mẫu áo trắng có tên Huyền Điểu Đồng Tâm, thêu hình ảnh đôi chim huyền điểu - loài chim thần, nút thắt đồng tâm, tượng trưng cho tình yêu thanh khiết, khăng khít, thuận hòa. Hà Cúc cho biết nút thắt đồng tâm mang ý nghĩa kết tóc xe duyên, được các cặp uyên ương ưa chuộng, như một lời chúc, mong muốn hạnh phúc trọn đời bên nhau, không chia cách.\r\n\r\nCặp uyên ương làm lễ dạm ngõ hôm 20/12. Lễ ăn hỏi của họ sắp diễn ra ở sân bóng gắn bó với Quang Hải suốt tuổi thơ tại Đông Anh, Hà Nội, chưa công bố thông tin lễ cưới.\r\n\r\nQuang Hải, 26 tuổi, là cầu thủ nổi bật của tuyển quốc gia, từng ghi năm bàn giúp Việt Nam giành HC bạc U23 châu Á 2018. Sau thành công ở giải U23 châu Á 2018, anh cùng đội tuyển Việt Nam vô địch AFF Cup 2018 và được bầu là cầu thủ hay nhất giải. Cùng năm, anh lần đầu giành Quả Bóng Vàng Việt Nam. Thanh Huyền kém chồng ba tuổi, kinh doanh tự do.\r\n<img src=\"assets/images/blog/thoitrang/post12.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nQuang Hải thử mẫu áo trắng, chuẩn bị cho ngày ăn hỏi. Ảnh: Hà Cúc\r\nQuang Hải thử mẫu áo trắng, chuẩn bị cho ngày ăn hỏi. Ảnh: Hà Cúc\r\n\r\nHà Cúc (tên thật Nguyễn Thu Hà) sinh ra trong gia đình có truyền thống kinh doanh nguyên phụ liệu may mặc trên phố Lương Văn Can, Hà Nội. Từ nhỏ, cô đã yêu thích vải vóc, tiếng đạp chân cót két của máy may Liên Xô cũ. Cô mở tiệm thiết kế áo dài hơn 10 năm qua. Ngoài thực hiện áo cho Quang Hải và Thanh Huyền, cô từng thiết kế áo ăn hỏi cho nhiều đôi uyên ương, trong đó có Đoàn Văn Hậu, Doãn Hải My.', 'post10.jpg'),
(3, 'Gương mặt được bình chọn đẹp nhất thế giới 2023', 'Gương mặt được bình chọn đẹp nhất thế giới 2023\nCa sĩ Hàn Nancy Jewel Mcdonie và tài tử Mỹ Timothée Chalamet thắng bình chọn gương mặt đẹp nhất thế giới 2023.\n\nNgày 28/12, trang TC Candler công bố hai danh sách người nổi tiếng có gương mặt đẹp, dành cho nam và nữ. Ở bảng nữ, Nancy Jewel Mcdonie xếp thứ nhất. Cô 23 tuổi, cha người Mỹ và mẹ người gốc Hàn. Nancy hoạt động ở nhóm nhạc Momoland, là em út của nhóm kiêm gương mặt đại diện. Theo Daum, Nancy không chỉ xinh đẹp mà còn sở hữu chất giọng truyền cảm, nội lực và vũ đạo chuyên nghiệp.\n<img src=\"assets/images/blog/thoitrang/post13.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\\r\\n\n \nVị trí thứ hai đến thứ 10 ở bảng nữ lần lượt là Dasha Taran, Minatozaki Sana, Gal Gadot, Jasmine Tookes, Sitala, Eleen Suliman, Andrea Botez, Jisoo, Savannah Clarke.\n<img src=\"assets/images/blog/thoitrang/post14.jpg\"style=\"width:620px;height:800px\" alt=\"Post\\\">\\r\\n\nCa sĩ Nancy. Ảnh: Naver\n\n\nTimothée Chalamet dẫn đầu danh sách 100 sao điển trai nhất. Anh sinh năm 1995 tại Mỹ, nổi tiếng với vai diễn trong Call Me by Your Name năm 2017. Tạp chí GQ gọi Chalamet là \"làn gió mới\", thay đổi quan niệm về vẻ đẹp của đàn ông. Tài tử được nhận xét khuôn mặt thanh tú, mái tóc xoăn phất phơ và thân hình mảnh dẻ khiến anh khác biệt, cuốn hút.\n\nNgoài tài diễn xuất, Chalamet luôn được đánh giá cao về gu thời trang. Tài tử chơi thân với nhiều nhà thiết kế như Hedi Slimane của Celine hay Haider Ackermann. Anh không có stylist mà tự phối đồ mỗi lần đi sự kiện. Chalamet muốn chủ động xây dựng phong cách cá nhân theo sở thích của riêng, không phụ thuộc bất cứ ai. Vogue từng nhận xét sự duyên dáng của Chalamet phá bỏ tiêu chuẩn về vóc dáng của một chàng trai trên màn ảnh.\n\n<img src=\"assets/images/blog/thoitrang/post15.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\\r\\n\nTài tử Timothée Chalamet. Ảnh: GQ\n\nNhững người còn lại trong top 10 sao điển trai gồm Henry Cavill, Khương Đào, Ni-ki, Lucien Laviscount, Austin Palao, Trương Triết Hạn, Bang Chan, Halil İbrahim Ceyhan, V (Kim Tae Hyung nhóm BTS).\n\n\nTC Candler là trang phê bình độc lập về điện ảnh, nghệ thuật, sắc đẹp của Mỹ. Danh sách \"100 gương mặt đẹp nhất thế giới\" được thực hiện lần đầu năm 1990, trong khi danh sách dành cho sao nam ra mắt năm 2014. Tiêu chí bình chọn dựa trên các yếu tố xinh đẹp, quyến rũ, thanh lịch, tự nhiên, sự độc đáo, triển vọng.\n\nTheo tạp chí, những năm gần đây, danh sách thu hút hàng trăm triệu lượt xem trên các nền tảng mạng xã hội, dấy lên nhiều bình luận của khán giả trên thế giới. Năm nay, ban tổ chức chọn 200 gương mặt, trong tổng số hơn 300.000 người từ hơn 50 quốc gia và vùng lãnh thổ.', 'post14.jpg'),
(4, 'Chi Pu mặc đa phong cách khi chạy show ở Trung Quốc', 'Chi Pu mặc đa phong cách khi chạy show ở Trung Quốc\r\nCa sĩ Chi Pu - đề cử \"Mỹ nhân của năm\" tại Ngôi sao của năm - được khen gu thời trang khi chạy show ở Trung Quốc.\r\n<img src=\"assets/images/blog/thoitrang/post16.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nCô dẫn đầu lượt bình chọn của khán giả ở hạng mục Mỹ nhân của năm, bỏ xa các đề cử gồm Thùy Tiên, Hương Giang, Lê Hoàng Phương, Khả Ngân. Giọng ca Đóa hoa hồng  hút fan sau tham gia show Chị đẹp đạp gió rẽ sóng phiên bản Trung Quốc và đoạt cúp. Kết quả chung cuộc sẽ công bố tại gala Ngôi sao của năm vào ngày 6/1 ở TP HCM. Nhiều tháng qua, Chi Pu chạy show ở Trung Quốc qua nhiều chương trình âm nhạc, gameshow, truyền hình thực tế. Cô được khán giả khen về gu thời trang đa dạng.\r\nCô dẫn đầu lượt bình chọn của khán giả tại hạng mục \"Mỹ nhân của năm\", bỏ xa các đề cử gồm Thùy Tiên, Hương Giang, Lê Hoàng Phương, Khả Ngân. Kết quả sẽ công bố tại gala Ngôi sao của năm, ngày 6/1 ở TP HCM.\r\nGiọng ca \"Đóa hoa hồng\" hút fan sau tham gia show \"Chị đẹp đạp gió rẽ sóng\" ở Trung Quốc và đoạt cúp. Nhiều tháng qua, Chi Pu đắt show ở thị trường Trung Quốc khi xuất hiện trong nhiều chương trình âm nhạc, game show, truyền hình thực tế.\r\n<img src=\"assets/images/blog/thoitrang/post17.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nTrailer \'Ngôi sao của năm\'  \r\nTrailer \"Ngôi sao của năm 2023\".\r\n\r\nChi Pu còn xuất hiện trong tiết mục mở đầu chương trình cùng nhiều nghệ sĩ nổi tiếng của Trung Quốc. Cô diện thiết kế ôm sát, trễ vai, xẻ đùi cao theo phong cách sang trọng tôn xương quai xanh, dáng bodycon.\r\nChi Pu còn xuất hiện trong tiết mục mở đầu chương trình cùng nhiều nghệ sĩ nổi tiếng của Trung Quốc. Cô chọn thiết kế ôm sát, trễ vai, xẻ đùi, tôn xương quai xanh, dáng bodycon.\r\n\r\nChi Pu song ca Huỳnh Hiểu Minh  \r\nHôm 31/12/2023, cô biểu diễn tại sự kiện chào năm mới của đài Hồ Nam, hát \"Cầu vồng mỉm cười\" cùng Huỳnh Hiểu Minh. Chi Pu mặc đầm đính kết hoa hồng, phối giày cao gót ton sur ton. Trên Weibo, gu mặc của ca sĩ người Việt nhận nhiều lời khen, video hút hàng triệu lượt xem. Video: Hunan TV\r\n<img src=\"assets/images/blog/thoitrang/post19.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nNgười đẹp chụp ảnh cùng Ella tại hậu trường sự kiện.\r\nNgười đẹp chụp ảnh cùng Ella tại hậu trường sự kiện.\r\n\r\nHồi tháng 11, cô lên sân khấu sự kiện Đêm hội TMALL, diễn loạt hit trước hàng nghìn khán giả Trung Quốc. Người đẹp mặc váy cổ yếm, tua rua, chất liệu ánh kim, thoải mái thể hiện vũ đạo sôi động.\r\nHồi tháng 11, cô lên sân khấu sự kiện Đêm hội TMALL, diễn loạt hit trước hàng nghìn khán giả Trung Quốc. Người đẹp mặc váy cổ yếm, đính kết dây đá và những viên pha lê, thả treo tua rua của nhà mốt Đỗ Long.\r\n\r\nChi Pu hát cùng Vương Phi Phi, Lý Tư Đan Ny  \r\nMàn hòa giọng của Chi Pu với Lý Tư Đan Ny, Vương Phi Phi, Trương Hàm Vận. Video: Nhân vật cung cấp\r\n<img src=\"assets/images/blog/thoitrang/post20.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nChi Pu tạo điểm nhấn khi đeo trang sức đính đá, tạo diện mạo gợi cảm, khiến fan Trung bàn luận sôi nổi trên mạng xã hội.\r\nChi Pu đeo thêm trang sức đính đá, tạo diện mạo gợi cảm qua động tác vũ đạo, khiến fan Trung bàn luận trên mạng xã hội.\r\n\r\nNgày 29/10, Chi Pu diễn tại sự kiện âm nhạc Asian Youth Music Festival 2023 (AYMF) - Đại nhạc hội thanh niên châu Á, đứng chung sân khấu cùng hàng chục ca sĩ khác. Người diện đầm body phối boots lông tone-sur-tone, do nhà thiết kế Đỗ Long thực hiện.\r\nNgày 29/10, Chi Pu diễn tại sự kiện âm nhạc Asian Youth Music Festival 2023 (AYMF) - Đại nhạc hội thanh niên châu Á, đứng chung sân khấu cùng hàng chục ca sĩ khác. Người diện đầm ngắn cúp ngực, cách điệu phần vai, phối boots lông vũ đồng màu.\r\n<img src=\"assets/images/blog/thoitrang/post22.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nChi Pu giao lưu khán giả bằng tiếng Trung và biểu diễn Đóa hoa hồng  \r\nChi Pu giao lưu khán giả bằng tiếng Trung và biểu diễn \"Đóa hoa hồng\". Video: AYMF\r\nTheo stylist Hoàng Ku, anh thường chọn cho Chi Pu trang phục không quá gợi cảm khi biểu diễn ở Trung Quốc để phù hợp văn hóa.\r\n\r\nỞ hậu trường tập luyện cho sự kiện, Chi Phu mặc crop tôn eo 56 cm, phối quần jeans ống rộng, áo khoác và mũ len.\r\nỞ hậu trường tập luyện cho sự kiện, Chi Pu mặc crop top tôn eo 56 cm, phối quần jeans ống rộng, áo khoác, mũ len.\r\n\r\nNgười đẹp liên tục được mời tham gia các show của Trung Quốc bên cạnh sân khấu âm nhạc. Hồi tháng 10/2023, cô mặc đầm kệch vai, phom dáng bèo nhún nữ tính tại chương trình Hello Saturday trên kênh Mango TV.\r\nNgười đẹp còn liên tục xuất hiện tại các game show. Hồi tháng 10/2023, cô mặc đầm lệch vai ghi hình chương trình Hello Saturday trên kênh Mango TV.\r\n\r\nChi Pu mặc nữ tính tại chương trình thực tế nổi tiếng về ẩm thực A Delicious Guess.\r\nChi Pu ăn vận nữ tính với váy, đầm xếp ly, bèo nhún, đính hoa tại chương trình thực tế A Delicious Guess.\r\n\r\nCô phối áo sơ mi với chân váy dáng A hoặc quần jeans.\r\nCô phối sơ mi đa phong cách, khi cùng chân váy dáng A , lúc với quần jeans.\r\n\r\nTrước đó, trên sân khấu các vòng công diễn của Đạp gió, Chi Pu liên tục biến hóa với nhiều phong cách, tạo được ấn tượng với khán giả. Chi Pu tên thật Nguyễn Thùy Chi, 30 tuổi, quê Hà Nội. Cô từng tham gia các phim Chị chị em em, Mười: Lời nguyền trở lại, nhận giải thưởng Nữ diễn viên được yêu thích nhất tại lễ trao giải Ngôi Sao Xanh lần 9. Năm 2017, cô lấn sân ca hát, lần lượt phát hành các sản phẩm như Từ hôm nay,Em sai rồi anh xin lỗi em đi, Mời anh vào tim em, Cung đàn vỡ đôi...\r\n<img src=\"assets/images/blog/thoitrang/post18.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nTrên sân khấu công diễn của \"Đạp gió\", Chi Pu liên tục biến hóa hình ảnh, gây ấn tượng với khán giả.\r\nChi Pu tên thật Nguyễn Thùy Chi, 30 tuổi, quê Hà Nội. Cô từng tham gia các phim \"Chị chị em em\", \"Mười: Lời nguyền trở lại\", nhận giải thưởng Nữ diễn viên được yêu thích nhất tại lễ trao giải Ngôi Sao Xanh lần 9. Năm 2017, cô lấn sân ca hát, lần lượt phát hành các sản phẩm như \"Từ hôm nay\", \"Em sai rồi anh xin lỗi em đi\", \"Mời anh vào tim em\", \"Cung đàn vỡ đôi\"...', 'post22.jpg'),
(5, 'Xuân Hạnh đăng quang Hoa hậu Hoàn vũ Việt Nam 2023', 'Xuân Hạnh đăng quang Hoa hậu Hoàn vũ Việt Nam 2023\r\nLÂM ĐỒNGNgười đẹp Xuân Hạnh, 22 tuổi, quê Ninh Bình, vượt qua 37 thí sinh để đăng quang Hoa hậu Hoàn vũ Việt Nam, tối 31/12.\r\n\r\nKhoảnh khắc Xuân Hạnh đăng quang Hoa hậu Hoàn vũ Việt Nam 2023  \r\nKhoảnh khắc Xuân Hạnh đăng quang cuộc thi. Video: Unimedia\r\n\r\nXuân Hạnh bật khóc khi nhận vương miện từ hoa hậu Nguyễn Thị Ngọc Châu. Ngoài phần thưởng tiền mặt 300 triệu đồng, tân hoa hậu giành quyền dự thi Miss Cosmo - Hoa hậu Hoàn vũ Quốc tế, lần đầu tổ chức tại Việt Nam vào năm 2024.\r\n<img src=\"assets/images/blog/thoitrang/post23.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nKhoảnh khắc Xuân Hạnh đăng quang cuộc thi. Ảnh: Kiếng Cận\r\nXuân Hạnh trong phần thi áo tắm và dạ hội chung kết. Cô cao 1,71 m, số đo ba vòng 82-60-87 cm. Hồi tháng 7, cô đoạt danh hiệu á quân The Face Vietnam 2023, là học trò Vũ Thu Phương. Ảnh: Kiếng Cận\r\n\r\nTân hoa hậu tốt nghiệp Đại học Kinh tế Quốc dân ở Hà Nội. Tại Hoa hậu Hoàn vũ Việt Nam, cô thể hiện phong độ ổn định, vào top 6 thí sinh trình diễn áo tắm đẹp nhất. Đêm chung kết, cô lần lượt trải qua các phần thi đồng diễn áo tắm, dạ hội, ứng xử, được nhận xét thể hiện vẻ tự tin, nhiều năng lượng.\r\n\r\nỞ phần thi ứng xử dành cho top 5, Xuân Hạnh bốc thăm trúng câu hỏi có nội dung: \"Có ý kiến cho rằng giới trẻ ngày nay thường muốn phá vỡ giới hạn truyền thống. Quan điểm của bạn về ý kiến này?\"\r\n\r\nXuân Hạnh nói: \"Chúng ta đang sống ở thời đại mới, mọi thứ ngày càng tốt hơn, nét đẹp truyền thống có thể nhỏ lại nhưng vẫn luôn tồn tại ở đó. Việc bạn phát triển hơn chỉ cho thấy bạn đang làm những điều mới hơn, cũng giống như áo dài - áo dài truyền thống vẫn luôn ở đó, còn áo dài cách tân chỉ là một tên gọi khác. Một điều chúng ta luôn nhớ đến là chúng ta mãi là người Việt Nam máu đỏ da vàng, tình đoàn kết của chúng ta và nét đẹp truyền thống vẫn luôn được giới trẻ bảo tồn và phát triển theo hướng tốt đẹp. Mong giới trẻ luôn nhớ rằng chúng ta sẽ luôn phát triển nhưng cũng luôn nhớ về nét đẹp truyền thống của Việt Nam\".\r\n\r\nỞ phần thi hùng biện dành cho top 2, cô đưa ra chiến lược, kế hoạch về dự án cộng đồng hỗ trợ người vô gia cư. Xuân Hạnh thể hiện tư duy, cách phản biện tự tin.\r\n<img src=\"assets/images/blog/thoitrang/post24.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nHoa hậu và á hậu cuộc thi. Ảnh: Kiếng Cận\r\nHoa hậu Xuân Hạnh (trái) và á hậu cuộc thi Hoàng Thị Nhung. Ảnh: Kiếng Cận\r\n\r\nDanh hiệu á hậu thuộc về thí sinh Hoàng Thị Nhung. Năm nay, ban tổ chức thay đổi format, không có danh hiệu á hậu 2 như các cuộc thi hiện tại trong nước và quốc tế.\r\n\r\nCô cao 1,79 m, số đo ba vòng là 86-62-98 cm, từng vào top 16 Hoa hậu Hoàn vũ Việt Nam 2022. Người đẹp cho biết rèn luyện nhiều kỹ năng như ngoại ngữ, thuyết trình, ứng xử một năm trước khi trở lại cuộc thi. Hiện cô là một doanh nhân, mở công ty về hướng nghiệp.\r\n<img src=\"assets/images/blog/thoitrang/post25.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nHoàng Nhung tại phần thi áo tắm vòng chung kết. Ảnh: Kiếng Cận\r\nHoàng Nhung tại phần thi áo tắm vòng chung kết. Ảnh: Kiếng Cận\r\n\r\nChung kết diễn ra trong gần ba giờ đồng hồ, khoảnh khắc đăng quang của tân hoa hậu diễn ra vào thời khắc chuẩn bị chuyển giao năm mới với màn bắn pháo hoa kéo dài 15 phút.\r\n\r\nChương trình diễn ra với nội dung chắt lọc, nhịp điệu nhanh, do MC Thanh Thanh Huyền, Đức Bảo dẫn dắt. Màn \"final walk\" (bước chân cuối cùng) của Đương kim hoa hậu Ngọc Châu diễn ra ngắn gọn. Sân khấu được ban tổ chức đầu tư về ý tưởng, âm thanh, ánh sáng, xen kẽ giữa phần thi của thí sinh là màn trình diễn của các ca sĩ gồm Như Quỳnh, Thu Phương, Anh Tú, Hương Giang, Vũ Thảo My.\r\n\r\nHoa hậu Hoàn vũ Việt Nam 2023 trở lại với tên gọi quốc tế mới là Miss Cosmo Vietnam, công bố hồi tháng 8. Cuộc thi năm nay chọn chủ đề Tôi luyện nên tôi, hướng tới tìm đại diện xinh đẹp, tư duy hiện đại, biết tự chủ.\r\n\r\nCác thí sinh trải qua chín tập truyền hình thực tế, giám khảo chọn ra top 38 bước vào bán kết, chung kết. Hội đồng giám khảo gồm bác sĩ nhân trắc học Lê Diệp Linh, MC - ca sĩ Quỳnh Hoa, đạo diễn Kathy Uyên, người mẫu Vũ Thu Phương, Hoa hậu Hương Giang, H\'Hen Niê, Nguyễn Trần Khánh Vân.\r\n<img src=\"assets/images/blog/thoitrang/post26.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nTop 38 chung kết đồng diễn mở màn. Ảnh: Kiếng Cận\r\nTop 38 chung kết đồng diễn mở màn. Ảnh: Kiếng Cận', 'post23.jpg'),
(6, 'Gu mặc đời thường của Hoa hậu Xuân Hạnh', 'Gu mặc đời thường của Hoa hậu Xuân Hạnh\r\nHoa hậu Hoàn vũ Việt Nam 2023 Xuân Hạnh thường diện crop top, sơ mi với quần ống rộng, thể hiện hình ảnh năng động ở đời thường.\r\n<img src=\"assets/images/blog/thoitrang/post27.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nNgười đẹp gây chú ý khi đăng quang cuộc thi tối 31/12/2023 ở Lâm Đồng. Xuân Hạnh được nhận xét có gương mặt ưa nhìn, hình thể cân đối. Cô mới bước vào làng giải trí khoảng sáu tháng qua sau danh hiệu á quân The Face Vietnam 2023. Đời thường, hoa hậu thể hiện gu thời trang giản dị.\r\nNgười đẹp đăng quang cuộc thi tối 31/12/2023 ở Lâm Đồng. Cô mới bước vào làng giải trí sau danh hiệu á quân The Face Vietnam hồi tháng 7 cùng năm. Đời thường, hoa hậu thể hiện gu thời trang đơn giản.\r\n<img src=\"assets/images/blog/thoitrang/post28.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nXuân Hạnh tạo dáng với kiểu đầm dây, hởi lưng theo phong cách nữ tính. Cô có hình thể cân đối với chiều cao 1,71 m, số đo ba vòng 82-60-87 cm, dễ dàng diện các kiểu trang phục khác nhau.\r\nXuân Hạnh tạo dáng với đầm dây hở lưng theo phong cách nữ tính. Cô được nhận xét có hình thể cân đối, cao 1,71 m, số đo ba vòng 82-60-87 cm, nên dễ dàng diện các kiểu trang phục.\r\n<img src=\"assets/images/blog/thoitrang/post29.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nHoa hậu phối chân váy kẻ với áo cách điệu khi đi cà phê với bạn bè.\r\nHoa hậu phối chân váy kẻ cùng áo cách điệu khi đi cà phê với bạn bè.\r\n\r\nXuân Hạnh tại bán kết cuộc thi. Video: Unimedia\r\n\r\nCô thường diện crop top phối quần ống rộng, giày thể thao khi dạo phố.\r\nCô mặc crop top phối quần ống rộng, giày thể thao khi dạo phố.\r\n\r\nXuân Hạnh còn yêu thích các kiểu áo thun, sơ mi theo phong cách năng động.\r\nXuân Hạnh còn chọn các kiểu áo thun, sơ mi theo phong cách năng động, phù hợp với tuổi 22.\r\n\r\nNgười đẹp phối sơ mi với chân váy khi nhận bằng khen về nghiên cứu khoa học. Xuân Hạnh đã tốt nghiệp Đại học Kinh tế Quốc dân ở Hà Nội.\r\n<img src=\"assets/images/blog/thoitrang/post30.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nHình ảnh đời thường khi còn là sinh viên của Xuân Hạnh.\r\nHình ảnh đời thường của Xuân Hạnh khi còn là sinh viên.\r\n\r\nXuân Hạnh phối đồ thoải mái trong các chuyến du lịch, dã ngoại.\r\nCô phối đồ thoải mái trong các chuyến du lịch, dã ngoại.\r\n\r\nXuân Hạnh tự nhận bản thân còn thiếu sót, hứa sẽ cải thiện thời gian tới. Cô sẽ có chín tháng chuẩn bị mọi thứ để tham gia Miss Cosmo - Hoa hậu Hoàn vũ Quốc tế, lần đầu tổ chức tại Việt Nam.\r\n<img src=\"assets/images/blog/thoitrang/post31.jpg\"style=\"width:620px;height:800px\" alt=\"Post\">\r\nHoa hậu tự nhận còn thiếu sót trước những bình luận trái chiều của khán giả trên mạng xã hội. Cô mong khán giả có cái nhìn khách quan, hứa cải thiện trong thời gian tới. Người đẹp sẽ có chín tháng chuẩn bị để tham gia Miss Cosmo - Hoa hậu Hoàn vũ Quốc tế, lần đầu tổ chức tại Việt Nam.\r\n\r\nCác màn trình diễn của Xuân Hạnh tại Tuần Thời trang Quốc tế Việt Nam 2023  \r\nXuân Hạnh trên sàn diễn thời trang hồi tháng 7/2023. Video: Multimedia', 'post27.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `product_price` varchar(20) NOT NULL,
  `product_price_new` varchar(20) NOT NULL,
  `product_img` varchar(255) NOT NULL,
  `product_img2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `id_danhmuc`, `id_menu`, `product_price`, `product_price_new`, `product_img`, `product_img2`) VALUES
(1, 'Loa Bluetooth 3D đỉnh cao', 2, 4, '59.000', '49.000', 'product-1.jpg', 'product-1-2.jpg'),
(2, 'Túi xách nữ màu nâu thông thường', 2, 6, '299.000', '249.000', 'product-2.jpg', 'product-2-2.jpg'),
(3, 'Loa 3D Ultimate dạng tròn', 2, 4, '79.000', '55.000', 'product-3.jpg', 'product-3-2.jpg'),
(4, 'Ba lô xanh cho giới trẻ - S', 2, 6, '289.000', '255.000', 'product-4.jpg', 'product-4-2.jpg'),
(5, 'Casual Spring Blue Shoes', 2, 5, '249.000', '235.000', 'product-5.jpg', 'product-5-2.jpg'),
(6, 'Dây chuyền DCPTB 362', 2, 2, '', '964.000', 'product-29.jpg', 'product-29-2.jpg'),
(7, 'Giầy nam màu đen', 2, 5, '', '189.000', 'product-7.jpg', 'product-7-2.jpg'),
(8, 'Kính nam màu nâu-đen', 2, 3, '79.000', '65.000', 'product-8.jpg', 'product-8-2.jpg'),
(9, 'Kính râm nam màu đen', 2, 3, '', '79.000', 'product-9.jpg', 'product-9-2.jpg'),
(10, 'Giày thể thao bóng rổ màu xanh', 2, 5, '179.000', '165.000', 'product-10.jpg', 'product-10-2.jpg'),
(11, 'Túi du lịch thể thao nam', 2, 6, '279.000', '265.000', 'product-11.jpg', 'product-11-2.jpg'),
(12, 'Túi xách màu nâu', 2, 6, '', '249.000', 'product-12.jpg', 'product-12-2.jpg'),
(13, 'Túi xách nữ chất liệu cao cấp', 2, 6, '359.000', '329.000', 'product-13.jpg', 'product-13-2.jpg'),
(14, 'Dây chuyền DCPTB 363', 2, 2, '', '964.000', 'product-19-1.jpg', 'product-19-2.jpg'),
(15, 'Dây chuyền DCPTB 364', 2, 2, '', '954.000', 'product-26.jpg', 'product-26-2.jpg'),
(16, 'Dây chuyền DCPTB 365', 2, 2, '', '864.000', 'product-27.jpg', 'product-27-2.jpg'),
(17, 'Đồng hồ thông minh', 2, 1, '', '289.000', 'product-17.jpg', 'product-17-2.jpg'),
(18, 'Dây chuyền DCPTB 366', 2, 2, '', '732.000', 'product-28-2.jpg', 'product-28-1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_size`
--

CREATE TABLE `tbl_size` (
  `id_size` int(11) NOT NULL,
  `id_sizegiay` int(11) NOT NULL,
  `size_giay` int(11) NOT NULL,
  `id_sizeao` int(11) NOT NULL,
  `size_ao` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_size`
--

INSERT INTO `tbl_size` (`id_size`, `id_sizegiay`, `size_giay`, `id_sizeao`, `size_ao`) VALUES
(1, 5, 40, 2, 'M'),
(2, 5, 41, 2, 'L'),
(3, 5, 42, 2, 'XL'),
(4, 5, 43, 2, 'XXL');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_banner_menu`
--
ALTER TABLE `tbl_banner_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Chỉ mục cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `tbl_infor_product`
--
ALTER TABLE `tbl_infor_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`id_customer`);

--
-- Chỉ mục cho bảng `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Chỉ mục cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id_new`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `tbl_size`
--
ALTER TABLE `tbl_size`
  ADD PRIMARY KEY (`id_size`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuc`
--
ALTER TABLE `tbl_danhmuc`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_infor_product`
--
ALTER TABLE `tbl_infor_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id_new` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `tbl_size`
--
ALTER TABLE `tbl_size`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

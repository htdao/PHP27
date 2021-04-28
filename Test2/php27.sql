-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 27, 2021 lúc 05:12 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php27`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `parent_id` int(10) DEFAULT NULL COMMENT 'danh mục cha',
  `thumbnail` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL COMMENT 'Mô tả thể loại',
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Ngày tạo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `thumbnail`, `slug`, `description`, `created_at`) VALUES
(1, 'Tin tức', NULL, 'aaaaaa.jpg', 'thoi-su', 'Chuyên mục thời sự', '2021-04-22 08:12:27'),
(2, 'Học viện', NULL, 'img-banner-1.jpg', 'tin-trong-nuoc', 'Chuyện mục thời sự - Tin trong nước', '2021-04-22 01:32:40'),
(3, 'Cẩm năng', NULL, '91073722_251850472886101_3153719027172376576_o.jpg', 'tin-nuoc-ngoai', 'Chuyện mục thời sự - Tin nước ngoài', '2021-04-22 01:29:09'),
(4, 'Tướng mới', NULL, 'de6c9c3fd4c4a6faa9d49124d72d0a145ec66697a0715.jpg', 'van-hoa-xa-hoi', 'Chuyên mục văn hóa - xã hội', '2021-04-22 01:36:13'),
(5, 'Trang phục mới', 7, '64d712b709033324c7e2e68648200b2b5cf634703fb39.jpg', 'cong-nghe', 'Chuyên mục công nghệ', '2021-04-22 01:38:37'),
(6, 'Cập nhật trò chơi', 1, '91912348_112586293729630_1018046530646441984_o.jpg', 'tin-tuc-lap-trinh', 'Chyện mục công nghệ - tin tức lập trình', '2021-04-22 01:38:45'),
(7, 'Trang phục', NULL, 'a8711ec71b74022f658d35c1c8f4f63b5fbb7a7bc5ba5.jpg', 'tin-tuc-cong-nghe', 'Chyên mục công nghệ - tin tức công nghệ', '2021-04-22 01:40:50'),
(28, 'Giải đấu', NULL, '174602293_1659797610879823_5990333416136882099_n.jpg', 'gia-dau-lqm', 'Hà Thị Đào', '2021-04-22 01:40:55'),
(33, 'Sự kiện', NULL, 'aaaaaa.jpg', 'su-kien', 'Nạp quân huy nhận avatar Tel\'annas free', '2021-04-22 01:41:31'),
(34, 'Đấu trường danh vọng', 33, '89532069_232039621533853_5035630437645418496_n.jpg', 'dau-truong-danh-vong', 'Đấu trường danh vọng 2021', '2021-04-21 22:54:38'),
(35, 'Mini game', 33, '91593775_251850579552757_2537916275653345280_o.jpg', NULL, '', '2021-04-22 01:42:01'),
(36, 'Cờ liên quân', 2, 'acnp22.png', 'co-lien-quan', 'Cờ liên quân ', '2021-04-22 01:36:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `heros`
--

CREATE TABLE `heros` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `heros`
--

INSERT INTO `heros` (`id`, `title`, `thumbnail`, `description`, `created_at`) VALUES
(1, NULL, '3dcab39c87d77193a8d7e6ab710d459a5ec2770772cf9.jpg', NULL, '2021-04-21 21:36:13'),
(5, NULL, '6c967aaa8a93a9c61a0c1627ccb6e19f5d9d58e82b2df.jpg', NULL, '2021-04-21 22:08:38'),
(6, NULL, '92bee19cd0b8558cd39a9c53582309a25f0843f4c4527.jpg', NULL, '2021-04-21 21:38:58'),
(7, NULL, 'b85f496bf0380fd9bdf490a1dd74ea0e5d3826133a4ea.jpg', NULL, '2021-04-21 22:09:29'),
(8, NULL, '64d712b709033324c7e2e68648200b2b5cf634703fb39.jpg', NULL, '2021-04-21 22:01:39'),
(9, NULL, '2caa9143a657fbd05f7fb07ce6b551875ec666c016b81.jpg', NULL, '2021-04-21 22:10:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `newpost`
--

CREATE TABLE `newpost` (
  `id` int(10) NOT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `newpost`
--

INSERT INTO `newpost` (`id`, `title`, `description`, `thumbnail`, `created_at`) VALUES
(1, 'Nakroth', 'Nakroth siêu việt', 'tuong-NAKROTH.jpg', '2021-04-21 22:13:55'),
(3, 'Ngộ Không', 'Ngộ không siêu việt', 'ngokhong06.jpg', '2021-04-21 16:42:27'),
(4, 'Violet', 'Volet vợ người ta', 'Hình-nền-LQ-Mobile-Violet.jpg', '2021-04-21 16:40:57'),
(5, 'Airi', 'Airi kimono tuyệt sắc', 'fb33c47636da0a90195464b0ce73971d.jpg', '2021-04-21 16:45:19'),
(6, 'Krixi', 'Krixi tiên nữ hác ám', 'a53a64310938ebbc2c486a30c6e3ba0c.jpg', '2021-04-21 16:48:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) NOT NULL,
  `title` varchar(255) DEFAULT NULL COMMENT 'Tiêu đề bài viết',
  `description` text DEFAULT NULL COMMENT 'Mô tả bài viết',
  `thumbnail` varchar(255) DEFAULT NULL COMMENT 'ảnh bài viết',
  `content` text DEFAULT NULL COMMENT 'Nội dung bài viết',
  `slug` varchar(255) DEFAULT NULL,
  `view_count` bigint(20) DEFAULT NULL COMMENT 'số lượng xem',
  `user_id` int(10) DEFAULT NULL COMMENT 'tác giả',
  `category_id` int(10) DEFAULT NULL COMMENT 'Bài post này thuộc danh mục nào',
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Ngày tạo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `thumbnail`, `content`, `slug`, `view_count`, `user_id`, `category_id`, `created_at`) VALUES
(0, 'CHUỖI SỰ KIỆN 1/5 FIGHT AS ONE', 'Chuỗi Sự Kiện 1/5 Fight as One đã chính thức ra mắt', '0427_Prize-in-Vp29-intro.jpg', 'Hộp trang phục ngẫu nhiên chứa một trong những vật phẩm sau:\r\n\r\nChọn 1 trang phục: Valhein Cá mập \"Nghiêm túc\" / Omen Chiến binh trăng khuyết / Annette Thần tượng âm nhạc / Mina Kẹo hay Ghẹo / Volkath Ma kỵ tử sĩ / Elsu Chiến binh bóng tối / Moren Lính cứu hỏa / Baldum Liệt hỏa dung nham hoặc 20 giấy vẽ bùa Tuyệt Sắc.\r\n\r\nChọn 1 trang phục: Fennik Phi hành gia / Aleister Siêu sao bóng rổ / Hayate Quỷ diện / Violet Đặc Dị / Nakroth Quán quân / Mganga Pháp sư mèo / Nakroth Quán quân / Eland\'orr Học viện Carano / Kriknak ST.L-162 hoặc 10 giấy vẽ bùa Tuyệt Sắc.\r\n\r\nChọn 1 trang phục: Veres Thần thoại Hy Lạp / Airi Phó kiếm đạo / Slimz Thỏ nhồi bông / Valhein Số 7 thần sầu / Aoi Sát thủ đô thị / Lindis Dạ tiệc hoặc 5 giấy vẽ bùa Tuyệt Sắc.\r\n\r\nHuy hiệu Bãi Biển x10\r\n\r\nHuy hiệu Bãi Biển x2\r\n\r\nHuy hiệu Bãi Biển x1', NULL, 134, 1, 2, '2021-04-27 05:15:31'),
(1, 'LỊCH THI ĐẤU VÒNG PLAY OFF ĐTDV', 'Lịch thi đấu vòng play off ĐTDV', '174602293_1659797610879823_5990333416136882099_n.jpg', 'Trận Playoff đầu tiên là màn cuộc gặp gỡ của hai đội tuyển sở hữu người chơi đi rừng hàng đầu Đấu Trường Danh Vọng. Quang Hải có một mùa giải thăng hoa cùng V Gaming khi lội ngược dòng ở lượt về khi chỉ chịu khuất phục trước nhà Đương Kim Vô Địch Saigon Phantom và toàn thắng các trận đấu với các đội tuyển còn lại. Với Fap Esports, đây có lẽ là mùa giải leo tháp khá khó khăn khi những đối thủ trước mắt đều có phong độ rất cao.\r\n\r\nĐội thắng trong trận Playoff đầu tiên sẽ có màn đối đầu với Team Flash. Được đánh giá thiếu ổn định hơn so với những mùa giải hủy diệt trước đây, nhưng Team Flash vẫn kịp có một màn trình diễn cực kỳ thuyết phục ngay trước Playoff khi thắng Box Gaming 3 - 1, tự quyết vị trí thứ 2 trên BXH. Liệu Team Flash đã sẵn sàng để trở lại và có màn tái đấu với Saigon Phantom tại Chung kết ĐTDV mùa Xuân 2021?', 'hiep-uoc-inf-sup-do-my-tuyen-bo-som-trien-khai-ten-lua-o-chau-a-doi-pho-trung-quoc', 1000, 1, 28, '2021-04-27 05:18:21'),
(2, 'TOP SKIN ĐƯỢC SỬ DỤNG NHỀU NHẤT', 'Top kin được mua và sử dụng nhiều nhất trong LQM', '64d712b709033324c7e2e68648200b2b5cf634703fb39.jpg', 'Cùng điểm qua top trang phục được game thủ mua và sử dụng nhiều nhất trong tuần đấu vừa qua', 'galaxy-note10-co-gi-hay-ho-hon-galaxy-s10', 1, 2, 7, '2021-04-22 03:15:05'),
(4, 'MỞ BÁN RƯƠNG TEL\'ANNAS VŨ KHÚC YÊU HỒ', 'Chính thức mở bán trang phục được monh chờ nhất Tel\'anas  Vũ Khúc Yêu Hồ', 'aaaaaa.jpg', 'Từ ngày 20 - 22/04 trang phục Tel\'Annas Vũ khúc yêu hồ sẽ có giá 499 quân huy thay vì 799 quân huy\r\n\r\nTừ ngày 23- 26/04 trang phục Tel\'Annas Vũ khúc yêu hồ sẽ có giá 599 quân huy thay vì 799 quân huy\r\n\r\nTừ ngày 27/04 - 03/05 trang phục Tel\'Annas Vũ khúc yêu hồ sẽ có giá 699 quân huy thay vì 799 quân huy\r\n\r\nTừ ngày 04/05 trang phục trang phục Tel\'Annas Vũ khúc yêu hồ sẽ có giá là 799 quân huy', 'laptrinh', 123, 10, 1, '2021-04-26 14:58:55'),
(5, 'NẠP QUÂN HUY - NHẬN AVATAR TEL\'ANNAS', 'Nạp quân huy để nhận nhiều ưu đãi từ 20-24 tháng 2', '1066-SK-nạp-QH-1280(1).jpg', 'Trong thời gian diễn ra sự kiện, mỗi người chơi cần tích lũy nạp đủ Quân Huy theo 3 mốc. Khi nạp đủ mốc tương ứng, có thể nhận quà!', NULL, 123, 5, 1, '2021-04-22 01:01:05'),
(6, 'SỰ KIỆN HÈ SÔI ĐỘNG 2021', 'Chào đón mùa hè bằng chuỗi sự kiện hấp dẫn', '1920x864(28) (1).jpg', 'Tham gia ngay sự kiện ghép hình vô cùng thú vị và nhận FREE skin Liliana Thủy Thủ Hồ Ly cực hot và dễ thương cho mùa hè này anh em nhé.\r\n\r\nCùng hoàn thành các nhiệm vụ để sở hữu cho mình những lượt quay rút thăm hình ngẫu nhiên. Khi số hình sở hữu đạt tới những mốc nhất định, anh em sẽ nhận được những phần quà đặc sắc tương ứng.\r\n\r\nĐặc biệt, khi thu thập đủ 12 hình, người chơi sẽ sở hữu ngay skin Liliana Thủy Thủ Hồ Ly siêu đỉnh!', NULL, 2001, 4, 4, '2021-04-22 11:17:50'),
(10, 'CHUỖI SỰ KIỆN 1/5 FIGHT AS ONE', ' Chuỗi sự kiện 1/5 chính thức ra mắt', '1280x720(33).jpg', 'Tạo đội và làm nhiệm vụ đội để tích điểm.Mỗi người chơi có thể tạo đội hoặc gia nhập đội. Người tạo đội có mã code của đội để mời người khác. Người chưa có đội sẽ có thể nhập code để tham gia đội.Người chưa có đội có thể ấn nút Tham gia nhanh (tự động gửi yêu cầu tham gia 10 đội ngẫu nhiên). Chỉ có thể ấn 1 lần mỗi ngày.Trước khi đủ 5 người trong đội, người chơi có 24 tiếng để rời đội (chỉ có cơ hội rời 1 lần duy nhất). Sau khi đủ 5 người, đội sẽ được tính là tạo thành công và người chơi không thể rời đội nữa.Sau khi đội đã tạo thành công, mỗi người chơi làm nhiệm vụ đội để kiếm điểm cho đội. Đạt mốc nhất định thì cả đội sẽ nhận thưởng.', NULL, 345, 10, 2, '2021-04-26 15:32:06'),
(11, 'TỔNG HỢP CHUỖI SỰ KIỆN HÈ SÔI ĐỘNG 2021', 'Tổng hợp chuỗi sự kiện chào hè 2021Đặc biệt, khi thu thập đủ 12 hình, người chơi sẽ sở hữu ngay skin Liliana Thủy Thủ Hồ Ly siêu đỉnh!', '1920x864(28) (1).jpg', 'Tham gia ngay sự kiện ghép hình vô cùng thú vị và nhận FREE skin Liliana Thủy Thủ Hồ Ly cực hot và dễ thương cho mùa hè này anh em nhé.Cùng hoàn thành các nhiệm vụ để sở hữu cho mình những lượt quay rút thăm hình ngẫu nhiên. Khi số hình sở hữu đạt tới những mốc nhất định, anh em sẽ nhận được những phần quà đặc sắc tương ứng.Đặc biệt, khi thu thập đủ 12 hình, người chơi sẽ sở hữu ngay skin Liliana Thủy Thủ Hồ Ly siêu đỉnh!', NULL, 34, 1, 2, '2021-04-23 15:11:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `avatar` longtext DEFAULT NULL COMMENT 'Đường dẫn ảnh',
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'Ngày tạo',
  `auth` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `created_at`, `auth`) VALUES
(1, 'Trần Minh Đức', 'ductm.kma@gmail.com', '1f32aa4c9a1d2ea010adcf2348166a04', '91073722_251850472886101_3153719027172376576_o.jpg', '2021-04-22 02:39:12', 1),
(2, 'Vũ Văn Thương', 'thuongvv.hust@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'lisa.jpg', '2021-04-22 02:39:19', 1),
(3, 'Nguyễn Văn Hiệp', 'hiepbk@gmail.com', 'b59c67bf196a4758191e42f76670ceba', 'lisa3.webp', '2021-04-22 09:56:36', 0),
(4, 'Hoàng Trung Hiếu', 'hieuht@gmail.com', '$2y$10$ogjblHkl8/z5zVVZJj/PbumuFc3jiGZHWqaF5emuVNfPYPBf8nfyW', 'meo2.jpg', '2021-04-22 09:56:19', 0),
(5, 'Nguyễn Hải Anh', 'haianh.bka@gmail.com', '668264ba93b2342e2bb93a00d6ddc44d', 'lisa4.jpg', '2021-04-22 09:57:04', 0),
(6, 'Trần Danh Tùng', 'tungtd.kma@gmail.com', 'jiGZHWqaF5emuVNfPYPBf8nfyW', 'lisa4.jpg', '2021-04-21 07:11:51', 0),
(9, 'Hà Thị Đào', 'htdao00@gmail.com', '698d51a19d8a121ce581499d7b701668', 'avt.jpg', '2021-04-21 07:11:54', 1),
(10, 'Hà Thị Đào', 'htdao@gmail.com', '202cb962ac59075b964b07152d234b70', 'lisa3.webp', '2021-04-27 11:10:09', 0),
(11, 'Hà Thị Đào', 'htdao00@gmail.com', '698d51a19d8a121ce581499d7b701668', 'meo3.jpg', '2021-04-21 08:10:03', 1),
(12, 'Nguyễn Văn A1', '637811@sv.vnua.edu.vn', 'd41d8cd98f00b204e9800998ecf8427e', 'meo2.jpg', '2021-04-23 15:10:32', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `parent_id` (`parent_id`) USING BTREE;

--
-- Chỉ mục cho bảng `heros`
--
ALTER TABLE `heros`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `newpost`
--
ALTER TABLE `newpost`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `user_id` (`user_id`) USING BTREE,
  ADD KEY `category_id` (`category_id`) USING BTREE;

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `heros`
--
ALTER TABLE `heros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `newpost`
--
ALTER TABLE `newpost`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 13, 2022 lúc 08:51 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `skinlele`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `ten_san` varchar(250) NOT NULL,
  `mo_ta` text NOT NULL,
  `anh` varchar(250) NOT NULL,
  `gia` float NOT NULL,
  `khuyen_mai` float NOT NULL,
  `danh_muc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `ten_san`, `mo_ta`, `anh`, `gia`, `khuyen_mai`, `danh_muc`) VALUES
(1, '[Màu 1-11] Son Tint Bóng Siêu Lì, Cho Đôi Môi Căng Mọng Merzy Aurora Dewy Tint 5.5g', 'Son Tint Bóng Siêu Lì, Cho Đôi Môi Căng Mọng Merzy Aurora Dewy Tint là dòng son tint thuộc thương hiệu Merzy chứa 30% chất dưỡng ẩm như được phủ pha lê cùng với độ bám màu cao mang đến cho bạn đôi môi ẩm mượt, căng mọng tràn đầy sức sống. ', 'https://product.hstatic.net/1000006063/product/8809510683367_00b357f6b104417d8813389a56a7af0d_1024x1024.png', 299000, 139000, 'sale'),
(2, '[Pre-order - BST Muteral Nude 21/22/23] Son Thỏi Lì, Lên Màu Siêu Xinh Romand Zero Matte Lipstick 3g (trả hàng sau 7 ngày)', 'Son Thỏi Lì, Lên Màu Siêu Xinh Romand Zero Matte Lipstick - Shell Beach Nude Collection là son thỏi nằm trong phiên bản Shell Beach Nude Collection mới của thương hiệu Romand được cải tiến về thiết kế lẫn chất son mềm mịn, hoàn hảo và đẹp mắt hơn, cho bạn đôi môi mịn mượt mờ lì tràn đầy sức sống.', 'https://product.hstatic.net/1000006063/product/z3870243968691_6ca5b6fff84b5fa83b802e028a3aed63_d4c2afebc0a6408e9104d14582f9589d_1024x1024.jpg', 619000, 268000, 'sale'),
(3, '[Pre-order - BST Muteral Nude N01/N02] Phấn Má Hồng Ngọt Ngào Dạng Nén Romand Better Than Cheek (trả hàng sau 7 ngày)', 'Phấn Má Hồng Ngọt Ngào Dạng Nén Romand Better Than Cheek là phấn má hồng của thương hiệu Romand nổi tiếng trong giới làm đẹp chuyên nghiệp tại Hàn Quốc, giúp mang lại đôi gò má hồng hào và gương mặt thêm rạng rỡ, tươi sáng một cách nhanh chóng và hoàn hảo nhất.', 'https://product.hstatic.net/1000006063/product/gg_ads_1080x1080px1_b9a856d42dcc4d639f213bdccbd0acd9_1024x1024.png', 240000, 149000, 'sale'),
(4, '[MÀU 1-38] Son Kem Lì, Lên Màu Siêu Chuẩn Bbia Last Velvet Lip Tint 5g', 'Son Kem Lì, Lên Màu Siêu Chuẩn Bbia Last Velvet Lip Tint là dòng son kem lì của thương hiệu Bbia, với nhiều phiên bản son liên tục được hãng cho ra mắt, thương hiệu Bbia cực kỳ nhanh nhạy khi nắm bắt xu hướng màu son hot nhất hiện nay với bảng màu vô cùng thời thượng. Son lì nhưng mịn như nhung, rất nhẹ và mướt môi, không làm khô môi hay lộ vân môi, lớp finish lì tuyệt đối nhưng sau khi ăn sẽ để lại lớp màu hồng đỏ tiệp lại trên môi cực xinh', 'https://product.hstatic.net/1000006063/product/sp8708872680_41bb52d48b4f4539b3fec0616964ccd9_1024x1024.png', 240000, 149000, 'sale'),
(5, 'Son Thỏi Lì, Lên Màu Chuẩn, Mịn Mượt Nhẹ Môi Merzy Noir In The Lipstick 3.3g', 'Son Thỏi Lì, Lên Màu Chuẩn Merzy Noir In The Lipstick là son thỏi đến từ thương hiệu Merzy nằm trong phiên bản mới có tên gọi Merzy Noir Collection với chất son thỏi mịn mượt, nhẹ tênh và bảng màu son mang đến cảm giác mạnh mẽ và bí ẩn, cho đôi môi bạn trông đầy đặn và quyến rũ hơn \r\n\r\n', 'https://product.hstatic.net/1000006063/product/8809510684418_a69608d38917449abec21eb2dc3bcb11_1024x1024.png', 299000, 160000, 'sale'),
(6, 'Son Tint Lì, Lâu Trôi Cho Đôi Môi Ẩm Mịn Merzy The Watery Dew Tint 4g', 'Son Tint Lì, Lâu Trôi Cho Đôi Môi Ẩm Mịn Merzy The Watery Dew Tint là son tint lì đến từ thương hiệu Merzy với kết cấu son tint bóng có độ ẩm cao như một lớp màng nước phủ trên bề mặt và độ bám màu tốt, bền màu, duy trì màu sắc lâu trôi chỉ với lần thoa đầu tiên, cho đôi môi luôn được căng mọng, ẩm mịn tràn đầy sức sống. ', 'https://product.hstatic.net/1000006063/product/z3762575182079_6f80351ff61d3b1d8130702537324bb2_63e5a0339d0e44f4be9fa5de70b5974c_1024x1024.jpg', 599000, 286000, 'sale'),
(7, '[Pre-order - BST Muteral Nude N01/N02] Phấn Má Hồng Ngọt Ngào Dạng Nén Romand Better Than Cheek (trả hàng sau 7 ngày)', 'Phấn Má Hồng Ngọt Ngào Dạng Nén Romand Better Than Cheek là phấn má hồng của thương hiệu Romand nổi tiếng trong giới làm đẹp chuyên nghiệp tại Hàn Quốc, giúp mang lại đôi gò má hồng hào và gương mặt thêm rạng rỡ, tươi sáng một cách nhanh chóng và hoàn hảo nhất.', 'https://product.hstatic.net/1000006063/product/kq_b13a30f0c0c3407e937eb86999d4d2a1_1024x1024.png', 240000, 149000, 'sale'),
(8, '[Pre-order - BST Muteral Nude 12/13] Son Tint Bóng, Siêu Lì Cho Đôi Môi Căng Mọng Romand Dewyful Water Tint 5g (trả hàng sau 7 ngày)', 'Son Tint Bóng, Siêu Lì Cho Đôi Môi Căng Mọng Romand Dewyful Water Tint là son tint lì đến từ thương hiệu Romand với chất son tint lì giúp môi căng mọng, mịn mượt son lên môi nhẹ và mướt mịn, dễ tán đều và bền màu, lâu trôi cùng với bảng màu rực rỡ đa dạng mang đến cho bạn đôi môi căng mọng tràn đầy sức sống, tự tin cả ngày dài.', 'https://product.hstatic.net/1000006063/product/kq3_c7344fce0a7447438bcd2cf98d3a7941_1024x1024.png', 610000, 268000, 'sale');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

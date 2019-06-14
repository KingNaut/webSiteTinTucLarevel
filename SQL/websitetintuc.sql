-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2019 at 03:28 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitetintuc`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviets`
--

CREATE TABLE `baiviets` (
  `id` int(10) UNSIGNED NOT NULL,
  `tenbv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidungbv` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `duongdanbv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkanhmota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `luotxem` int(11) NOT NULL,
  `macm` int(10) UNSIGNED NOT NULL,
  `matv` int(10) UNSIGNED NOT NULL,
  `tomtatnoidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baiviets`
--

INSERT INTO `baiviets` (`id`, `tenbv`, `noidungbv`, `duongdanbv`, `linkanhmota`, `luotxem`, `macm`, `matv`, `tomtatnoidung`, `created_at`, `updated_at`) VALUES
(1, 'Nét ẩm thực đặc trưng của 3 miền Bắc Trung Nam', '<p><strong>Sự tinh tế trong ẩm thực miền Bắc</strong></p>\r\n\r\n<p>Bắc bộ l&agrave; nơi tổ ti&ecirc;n định cư l&acirc;u đời n&ecirc;n từ m&oacute;n ăn đến c&aacute;i mặc đều được s&agrave;ng lọc v&agrave; trở th&agrave;nh chuẩn mực, kh&ocirc;ng dễ g&igrave; thay đổi. Người miền Bắc chọn m&oacute;n ăn thanh đạm, nhẹ nh&agrave;ng, c&oacute; vị chua nhẹ. C&aacute;c m&oacute;n đặc trưng của người miền Bắc: phở H&agrave; Nội, b&uacute;n thang H&agrave; Nội, b&uacute;n chả H&agrave; Nội, b&aacute;nh t&ocirc;m Hồ T&acirc;y, b&uacute;n ốc, thịt đ&ocirc;ng, x&ocirc;i cốm v&ograve;ng, chả gi&ograve;, miến x&agrave;o cua bể...</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Net am thuc dac trung cua 3 mien Bac Trung Nam hinh anh 1\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/pho1.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Phở b&ograve; H&agrave; Nội.&nbsp;<em>Ảnh: fuchsia511.wordpress.com</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Net am thuc dac trung cua 3 mien Bac Trung Nam hinh anh 2\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/pho2.jpg\" title=\"Nét ẩm thực đặc trưng của 3 miền Bắc Trung Nam hình ảnh 2 Bún thang Hà Nội. Ảnh: Internet.\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>B&uacute;n thang H&agrave; Nội.&nbsp;<em>Ảnh: Internet.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Net am thuc dac trung cua 3 mien Bac Trung Nam hinh anh 3\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/pho3.jpg\" title=\"Nét ẩm thực đặc trưng của 3 miền Bắc Trung Nam hình ảnh 3 Bún chả Hà Nội. Ảnh: Huy Tân.\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>B&uacute;n chả H&agrave; Nội.<em>&nbsp;Ảnh: Huy T&acirc;n.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Net am thuc dac trung cua 3 mien Bac Trung Nam hinh anh 4\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/pho4.jpg\" title=\"Nét ẩm thực đặc trưng của 3 miền Bắc Trung Nam hình ảnh 4 Bún tôm Hà Nội. Ảnh: blog.tamtay.vn\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>B&uacute;n đậu mắm t&ocirc;m H&agrave; Nội.&nbsp;<em>Ảnh: blog.tamtay.vn</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>M&oacute;n ăn miền Bắc kh&ocirc;ng chỉ ch&uacute; trọng v&agrave;o những m&oacute;n trong ng&agrave;y lễ Tết, một đặc trưng nữa rất Bắc bộ ch&iacute;nh l&agrave; những m&oacute;n qu&agrave; b&aacute;nh. Đ&acirc;y kh&ocirc;ng phải l&agrave; những m&oacute;n ăn để no những n&oacute; lại đem lại cho người ta nhiều h&aacute;o hức, đặc biệt, n&oacute; lưu giữ nhiều kỷ niệm đẹp trong tuổi thơ của mỗi người d&acirc;n xứ Bắc. C&aacute;c m&oacute;n đặc trưng: c&aacute;c loại mứt l&agrave;m từ sấu, b&aacute;nh cốm&hellip;&nbsp;</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Net am thuc dac trung cua 3 mien Bac Trung Nam hinh anh 5\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/pho5.bmp\" title=\"Nét ẩm thực đặc trưng của 3 miền Bắc Trung Nam hình ảnh 5 Cốm vòng. Ảnh: www.diendan.eva.vn.\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Cốm v&ograve;ng.&nbsp;<em>Ảnh: Eva.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Net am thuc dac trung cua 3 mien Bac Trung Nam hinh anh 6\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/pho6.jpg\" title=\"Nét ẩm thực đặc trưng của 3 miền Bắc Trung Nam hình ảnh 6 Mứt sấu Hà Nội.\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mứt sấu H&agrave; Nội.&nbsp;<em>Ảnh: Eva</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Đậm đ&agrave; m&oacute;n ăn miền Trung</strong></p>\r\n\r\n<p>Người miền Trung sử dụng cay nhiều nhưng độ ngọt lại &iacute;t hơn miền Nam. Đặc biệt l&agrave; người Huế, từ m&oacute;n ăn d&agrave;nh cho người b&igrave;nh d&acirc;n hay vua ch&uacute;a đều rất nhiều m&oacute;n, nhiều gia vị v&agrave; đặc biệt l&agrave; vị chua v&agrave; cay như mắm c&agrave;, mắm t&ocirc;m&hellip; C&aacute;c m&oacute;n đặc trưng của người miền Trung: b&uacute;n b&ograve; Huế, b&aacute;nh b&egrave;o, b&aacute;nh x&egrave;o, b&aacute;nh đập, chả ram, b&uacute;n c&aacute;, b&aacute;nh tr&aacute;ng thịt luộc&hellip;</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Net am thuc dac trung cua 3 mien Bac Trung Nam hinh anh 7\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/mam1.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mắm c&agrave;.&nbsp;<em>Ảnh: diendan.vn.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Net am thuc dac trung cua 3 mien Bac Trung Nam hinh anh 8\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/mam2.jpg\" title=\"Nét ẩm thực đặc trưng của 3 miền Bắc Trung Nam hình ảnh 8 Mắm tôm. Ảnh: hues.vn.\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Mắm t&ocirc;m chua.&nbsp;<em>Ảnh: hues.vn.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Net am thuc dac trung cua 3 mien Bac Trung Nam hinh anh 9\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/mam3.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>B&uacute;n b&ograve;.&nbsp;<em>Ảnh: www.flickr.com.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Net am thuc dac trung cua 3 mien Bac Trung Nam hinh anh 10\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/mam4.jpg\" title=\"Nét ẩm thực đặc trưng của 3 miền Bắc Trung Nam hình ảnh 10 Bánh bèo. Ảnh: www.yelp.com.\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>B&aacute;nh b&egrave;o.&nbsp;<em>Ảnh: www.yelp.com.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Net am thuc dac trung cua 3 mien Bac Trung Nam hinh anh 11\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/mam5.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>B&aacute;nh x&egrave;o.&nbsp;<em>Ảnh: www.vietfoodfriends.cz.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Net am thuc dac trung cua 3 mien Bac Trung Nam hinh anh 12\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/hutieu5.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Ch&egrave; chuối.&nbsp;<em>Ảnh: www.chengon.com.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>N&eacute;t ẩm thực đa dạng của miền Nam</strong></p>\r\n\r\n<p>M&oacute;n ăn của người miền Nam đơn giản, kh&ocirc;ng cầu kỳ như ch&iacute;nh con người nơi đ&acirc;y l&agrave; thật th&agrave;, giản dị. Miền Nam m&oacute;n ăn đa dạng, biến h&oacute;a kh&ocirc;n lường với vị ngọt, cay, b&eacute;o do sử dụng nước dừa. C&aacute;c m&oacute;n ăn đặc trưng sử dụng ngọt nhiều: b&aacute;nh (b&aacute;nh in, b&aacute;nh men, b&aacute;nh &iacute;t, b&aacute;nh b&ograve;&hellip;), ch&egrave; (ch&egrave; kiếm, ch&egrave; chuối), x&ocirc;i, nem nướng, ch&aacute;o g&agrave;, g&agrave; r&ocirc; ti&hellip; đều sử dụng nước dừa hay cốm dừa để tăng vị b&eacute;o, vị ngọt. C&aacute;c m&oacute;n đặc trưng: c&aacute; l&oacute;c nướng trui, gỏi cuốn, b&uacute;n mắm, hủ tiếu Nam Vang&hellip;</p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Net am thuc dac trung cua 3 mien Bac Trung Nam hinh anh 13\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/hutieu1.jpg\" title=\"Nét ẩm thực đặc trưng của 3 miền Bắc Trung Nam hình ảnh 13 Hủ tiếu Nam Vang. Ảnh: www.amthuc365.vn.\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Hủ tiếu Nam Vang.&nbsp;<em>Ảnh: www.amthuc365.vn.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Net am thuc dac trung cua 3 mien Bac Trung Nam hinh anh 14\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/hutieu2.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>C&aacute; l&oacute;c nướng trui.&nbsp;<em>Ảnh: www.vannghetiengiang.vn.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Net am thuc dac trung cua 3 mien Bac Trung Nam hinh anh 15\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/hutieu3.jpg\" title=\"Nét ẩm thực đặc trưng của 3 miền Bắc Trung Nam hình ảnh 15 Bún mắm miền Tây. Ảnh: mecon.vn.\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>Lẩu mắm miền T&acirc;y.&nbsp;<em>Ảnh: mecon.vn.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Net am thuc dac trung cua 3 mien Bac Trung Nam hinh anh 16\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/hutieu4.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>B&aacute;nh b&ograve;.&nbsp;<em>Ảnh: mecon.vn.</em></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Đặc điểm m&oacute;n ăn từng miền tuy kh&aacute;c nhau, nhưng vẫn c&oacute; những điểm tương đồng, thể hiện qua cơ cấu bữa ăn, nguy&ecirc;n tắc chế biến như nước d&ugrave;ng, nước mắm, gia vị hỗn hợp, rau phong ph&uacute;, c&aacute;c loại nước chấm chế biến đa dạng ph&ugrave; hợp với m&oacute;n ăn. V&igrave; vậy, kh&ocirc;ng chỉ người Việt m&agrave; nhiều người nước ngo&agrave;i đều rất y&ecirc;u th&iacute;ch văn h&oacute;a ẩm thực của đất nước h&igrave;nh chữ S.</p>', 'net-am-thuc-dac-trung-cua-3-mien-bac-trung-nam', 'https://znews-photo.zadn.vn/w660/Uploaded/rdsis/2014_04_11/pho2.jpg', 0, 1, 1, 'Ở mỗi miền đất nước, người dân lại có khẩu vị ăn uống khác nhau, góp phần mang đến sự phong phú, đa dạng cho văn hóa ẩm thực Việt Nam', '2019-02-24 07:44:22', '2019-02-24 07:44:22'),
(2, 'Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam', '<p><span style=\"font-size:16px\"><strong>H&agrave; Nội</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Nhắc đến H&agrave; Nội, b&ecirc;n cạnh những địa danh đi c&ugrave;ng năm thang của mảnh đất ng&agrave;n năm văn hiến, người ta c&ograve;n nghĩ ngay đến c&aacute;i n&ocirc;i ẩm thực v&ocirc; c&ugrave;ng nổi tiếng của Việt Nam. Ẩm thực H&agrave; Nội thể hiện r&otilde; n&eacute;t văn h&oacute;a ở nơi đ&acirc;y: d&ugrave; c&oacute; sự pha trộn giữa n&eacute;t truyền thống v&agrave; hiện đại nhưng tinh tế, thanh lịch.</span></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:16px\"><a href=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092551-1.jpg\" title=\"Phở Hà Nội (Ảnh: Kênh 14)\"><img alt=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" src=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092551-1.jpg\" title=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" /></a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">Phở H&agrave; Nội (Ảnh: K&ecirc;nh 14)</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\">H&agrave; Nội c&oacute; h&agrave;ng trăm m&oacute;n để &quot;m&ecirc;&quot;, từ phở b&ograve;, phở g&agrave; ngọt vị nước d&ugrave;ng; b&uacute;n chả với mắm chấm chua ngọt dậy vị cho đến b&uacute;n đậu ăn c&ugrave;ng thịt luộc, chả cốm mềm mịn v&agrave; mắm t&ocirc;m thơm phức&hellip; Ngo&agrave;i ra th&igrave; chả c&aacute; L&atilde; Vọng, b&aacute;nh cuốn Thanh Tr&igrave;, x&ocirc;i x&eacute;o, h&aacute;o sườn&hellip; cũng l&agrave; những m&oacute;n ngon m&agrave; ai đến H&agrave; Nội cũng n&oacute;ng l&ograve;ng được nếm thử.</span></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:16px\"><a href=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092551-2.jpg\" title=\"Bát mắm tôm có thể được coi như linh hồn của món bún đậu. - Ảnh: tinmoi\"><img alt=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" src=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092551-2.jpg\" title=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" /></a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">B&aacute;t mắm t&ocirc;m c&oacute; thể được coi như linh hồn của m&oacute;n b&uacute;n đậu. - Ảnh: tinmoi</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\">N&oacute;i về những m&oacute;n ăn vặt, H&agrave; Nội lại c&agrave;ng ghi điểm khi m&ugrave;a n&agrave;o cũng c&oacute; &quot;của ngon vật lạ&quot; từ c&aacute;c tỉnh l&acirc;n cận trở về v&agrave; cả những đặc sản rất ri&ecirc;ng biệt như &ocirc; mai, sấu, cốm, mứt sen... Nh&igrave;n chung m&oacute;n ăn H&agrave; Nội, m&oacute;n n&agrave;o cũng đặc sắc v&agrave; thể hiện quan điểm của người H&agrave; th&agrave;nh xưa: ăn kh&ocirc;ng chỉ để no, m&agrave; để thưởng thức những hương vị tinh t&uacute;y của đất trời.</span></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:16px\"><a href=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092644-3.jpg\" title=\"Ô mai (Ảnh: Afamily)\"><img alt=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" src=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092644-3.jpg\" title=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" /></a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">&Ocirc; mai (Ảnh: Afamily)</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Huế</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">N&oacute;i về ẩm thực Huế, người ta thường d&ugrave;ng hai từ để mi&ecirc;u tả: rất cay v&agrave; rất ngon. M&oacute;n ăn Huế c&oacute; vị cay nồng, nhưng lại v&ocirc; c&ugrave;ng ngon, đậm đ&agrave;, gi&agrave;u hương vị, khiến bạn d&ugrave; chảy nước mắt (v&igrave; cay) nhưng vẫn muốn thưởng thức nhiều hơn nữa.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Nức tiếng nhất ở Huế đ&oacute; l&agrave; m&oacute;n b&uacute;n b&ograve; với th&agrave;nh phần gồm b&uacute;n, thịt bắp b&ograve;, gi&ograve; heo, c&ugrave;ng nước d&ugrave;ng hầm từ xương b&ograve; ngọt thơm v&agrave; nước d&ugrave;ng dậy vị mắm ruốc. Một lần được ăn b&uacute;n b&ograve; Huế, người ta sẽ kh&oacute; m&agrave; h&agrave;i l&ograve;ng với b&uacute;n b&ograve; ở đ&acirc;u kh&aacute;c, cho d&ugrave; m&oacute;n b&uacute;n đ&oacute; c&oacute; được nấu bởi đầu bếp kh&aacute;ch sạn 5 sao.</span></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:16px\"><a href=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092735-4.jpg\" title=\"Bún bò mệ Kéo ở Gia Hội - Ảnh: Thái Lộc\"><img alt=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" src=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092735-4.jpg\" title=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" /></a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">B&uacute;n b&ograve; mệ K&eacute;o ở Gia Hội - Ảnh: Th&aacute;i Lộc</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\">Một đặc sản đậm chất Huế m&agrave; kh&ocirc;ng đ&acirc;u ngon bằng, đ&oacute; l&agrave; cơm hến, ăn c&ugrave;ng ch&uacute;t mắm ruốc, t&oacute;p mỡ vừa gi&ograve;n, vừa mịn, vừa thơm cực cuốn h&uacute;t. Huế cũng rất nổi tiếng với những m&oacute;n b&aacute;nh v&ocirc; c&ugrave;ng thơm ngon như b&aacute;nh bột lọc, b&aacute;nh nậm, b&aacute;nh b&egrave;o&hellip; Sự tinh tế của người Cố đ&ocirc; đ&atilde; biến những m&oacute;n b&aacute;nh n&agrave;y trở th&agrave;nh một phần v&ocirc; c&ugrave;ng kh&ocirc;ng thể thiếu của Huế. Ngo&agrave;i m&oacute;n mặn, m&oacute;n chay của Huế cũng được chế biến cực kỳ tinh tế, thơm ngon v&agrave; nổi bật, rất đ&aacute;ng để thưởng thức.</span></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:16px\"><a href=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092735-5.jpg\" title=\"Bánh Huế \"><img alt=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" src=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092735-5.jpg\" title=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" /></a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">B&aacute;nh Huế</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\">M&oacute;n ăn ở Huế ngon, thức uống cũng kh&ocirc;ng k&eacute;m phần quyến rũ. M&oacute;n giải kh&aacute;t được y&ecirc;u th&iacute;ch ở Huế - ch&egrave; nổi tiếng khắp cả nước v&agrave; được nh&acirc;n rộng ở nhiều tỉnh th&agrave;nh. C&aacute;c qu&aacute;n ch&egrave; ở Huế thường nằm s&acirc;u trong c&aacute;c ng&oacute;c ng&aacute;ch v&agrave; được gọi bằng c&aacute;i t&ecirc;n th&acirc;n thương: ch&egrave; Hẻm. Mỗi loại ch&egrave; c&oacute; một hương vị ri&ecirc;ng, nhưng đều ngọt m&aacute;t, thanh nh&atilde; như con người Huế. Ngo&agrave;i ra, thức uống truyền thống &ndash; tr&agrave; cung đ&igrave;nh Huế với c&aacute;ch pha chế tinh tế, trang nh&atilde;, với nhiều t&aacute;c dụng thanh lọc cơ thể, bồi bổ sức khỏe cũng l&agrave;m du kh&aacute;ch thập phương m&ecirc; mẩn.</span></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:16px\"><a href=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092735-6.jpg\" title=\"Chè Hẻm (Ảnh: Yan)\"><img alt=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" src=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092735-6.jpg\" title=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" /></a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">Ch&egrave; Hẻm (Ảnh: Yan)</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Hội An</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Hội An tuy kh&ocirc;ng lớn, nhưng danh tiếng của nơi đ&acirc;y th&igrave; quả thật &ldquo;kh&ocirc;ng phải dạng vừa đ&acirc;u&rdquo;, đặc biệt, ẩm thực Hội An đ&atilde; trở th&agrave;nh một thương hiệu, lu&ocirc;n được du kh&aacute;ch khắp mọi miền tr&ecirc;n thế giới khen kh&ocirc;ng ngớt. C&aacute;c m&oacute;n ăn ở Hội An c&oacute; một đặc trưng l&agrave; vị ngọt thanh đi k&egrave;m với vị cay kh&aacute; ngon miệng, cộng với c&aacute;ch trang tr&iacute; trang nh&atilde;, nhiều m&agrave;u sắc bắt mắt.</span></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:16px\"><a href=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092837-7.jpg\" title=\"Cơm gà (Ảnh: Kênh 14)\"><img alt=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" src=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092837-7.jpg\" title=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" /></a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">Cơm g&agrave; (Ảnh: K&ecirc;nh 14)</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\">Được nhiều kh&aacute;ch du lịch phương xa biết đến nhất ch&iacute;nh l&agrave; tiệm b&aacute;nh m&igrave; ngon nhất thế giới. Vỏ b&aacute;nh m&igrave; gi&ograve;n tan, nh&acirc;n b&aacute;nh đa dạng, ngon l&agrave;nh cộng với m&oacute;n nước sốt gia truyền đặc trưng tạo n&ecirc;n n&eacute;t quyến rũ ri&ecirc;ng cho m&oacute;n ăn đ&atilde; trở th&agrave;nh thương hiệu trong mắt b&egrave; bạn thế giới.</span></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:16px\"><a href=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092837-8.jpg\" title=\"Bánh mì Phượng\"><img alt=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" src=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092837-8.jpg\" title=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" /></a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">B&aacute;nh m&igrave; Phượng</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\">Đến với Hội An, bạn cũng kh&ocirc;ng thể qu&ecirc;n thưởng thức những đặc sản nổi tiếng kh&aacute;c như mỳ Quảng, cao lầu, cơm g&agrave; &ndash; những mỹ thực đặc sản của miền đất n&agrave;y. Đồng thời c&aacute;c m&oacute;n ăn vặt đường phố như b&aacute;nh đập, b&aacute;nh vạc, b&aacute;nh bao, ch&egrave; cũng rất ngon v&agrave; đ&aacute;ng để thử.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">T&Agrave;I TRỢ</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><a href=\"https://vads.net.vn/ad/click-tracking?action_name=9bVzb@U3Rm14sFYB8DPPLowro6RtQuct2EMCIpXKvXf2YuSstAeoHKvbaKJGkhb749J8LNQJaTAwrlyi5m6rMUb4JmVFs@QNrsFGXYUUT@EE_@$_GfRXGkMPPttN0XTDM12nbIBzdhzpRpWSqy52GkMY1h1jaioEX7wtIUc9MDnEhNeI3qWzQ2yjCtKq9F@74jG1slDIi1ySGvO5s@PE27cgEuYqdv3duXU6nRSCvMjfFQ_@$_SpDbUPR4BmDDdywlwXEcUiIDtMnWII3fZq5e0Bl5ScwtkH1VY9PLbpu83KZAGE_@$_OjXlz69DD2NG277DPlqrKSJwrWMR1W@mkgJH6v@DVcg==\" target=\"_blank\"><img alt=\"Cú sốc trong đêm tân hôn của cặp vợ chồng trẻ Hà Nội\" src=\"https://baogia.vads.vn/images/2019/02/15/15/40/tingiuabaiPC.jpg\" /></a></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><a href=\"https://vads.net.vn/ad/click-tracking?action_name=9bVzb@U3Rm14sFYB8DPPLowro6RtQuct2EMCIpXKvXf2YuSstAeoHKvbaKJGkhb749J8LNQJaTAwrlyi5m6rMUb4JmVFs@QNrsFGXYUUT@EE_@$_GfRXGkMPPttN0XTDM12nbIBzdhzpRpWSqy52GkMY1h1jaioEX7wtIUc9MDnEhNeI3qWzQ2yjCtKq9F@74jG1slDIi1ySGvO5s@PE27cgEuYqdv3duXU6nRSCvMjfFQ_@$_SpDbUPR4BmDDdywlwXEcUiIDtMnWII3fZq5e0Bl5ScwtkH1VY9PLbpu83KZAGE_@$_OjXlz69DD2NG277DPlqrKSJwrWMR1W@mkgJH6v@DVcg==\" target=\"_blank\">C&uacute; sốc trong đ&ecirc;m t&acirc;n h&ocirc;n của cặp vợ chồng trẻ H&agrave; Nội</a><a href=\"https://vads.net.vn/ad/click-tracking?action_name=9bVzb@U3Rm14sFYB8DPPLowro6RtQuct2EMCIpXKvXf2YuSstAeoHKvbaKJGkhb749J8LNQJaTAwrlyi5m6rMUb4JmVFs@QNrsFGXYUUT@EE_@$_GfRXGkMPPttN0XTDM12nbIBzdhzpRpWSqy52GkMY1h1jaioEX7wtIUc9MDnEhNeI3qWzQ2yjCtKq9F@74jG1slDIi1ySGvO5s@PE27cgEuYqdv3duXU6nRSCvMjfFQ_@$_SpDbUPR4BmDDdywlwXEcUiIDtMnWII3fZq5e0Bl5ScwtkH1VY9PLbpu83KZAGE_@$_OjXlz69DD2NG277DPlqrKSJwrWMR1W@mkgJH6v@DVcg==\" target=\"_blank\">Tin t&agrave;i trợ</a></span></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:16px\"><a href=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092837-9.jpg\" title=\"Cao lầu (Ảnh: Kênh 14)\"><img alt=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" src=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092837-9.jpg\" title=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" /></a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">Cao lầu (Ảnh: K&ecirc;nh 14)</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\"><strong>C&aacute;c tỉnh ven biển miền Trung</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Kh&aacute;ch du lịch bốn phương m&ecirc; t&iacute;t c&aacute;c v&ugrave;ng biển ở miền Trung Việt Nam kh&ocirc;ng chỉ bởi cảnh đẹp thỏa m&atilde;n con mắt, m&agrave; c&ograve;n bởi m&oacute;n ăn ngon thỏa m&atilde;n dạ d&agrave;y. C&oacute; thể n&oacute;i rằng, những v&ugrave;ng biển n&agrave;y ch&iacute;nh l&agrave; thi&ecirc;n đường của c&aacute;c m&oacute;n hải sản tươi, ngon v&agrave; đặc biệt gi&aacute; cực rẻ.</span></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:16px\"><a href=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608093002-10.jpg\" title=\"Cá lồi xối mỡ Phan Thiết (Ảnh: Chudu24)\"><img alt=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" src=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608093002-10.jpg\" title=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" /></a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">C&aacute; lồi xối mỡ Phan Thiết (Ảnh: Chudu24)</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\">Người miền Trung c&oacute; c&aacute;ch chế biến hải sản mang đậm vị d&acirc;n d&atilde; đặc trưng, cuốn h&uacute;t. Người ta nghĩ ra rất nhiều c&aacute;ch để chế biến: x&agrave;o, nướng, hấp, nấu lẩu, phơi nắng&hellip; mỗi m&oacute;n một m&ugrave;i, một vị nhưng đều kh&ocirc;ng l&agrave;m mất đi sự tươi ngon, đậm đ&agrave; của đại dương s&acirc;u thẳm.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">C&oacute; thể kể qua một v&agrave;i m&oacute;n hải sản, gắn liền với nhiều v&ugrave;ng biển dọc miền Trung nắng gi&oacute; như c&aacute; lồi xối mỡ ở Phan Thiết, đẻn biển Quảng B&igrave;nh, c&aacute;c loại c&aacute; phơi kh&ocirc; ở Đ&agrave; Nẵng&hellip; v&agrave; đặc biệt l&agrave; m&oacute;n lẩu thuyền ch&agrave;i dung dị, thơm ngon v&ocirc; c&ugrave;ng cuốn h&uacute;t.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>S&agrave;i G&ograve;n</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Với sự giao thoa của nhiều nền văn h&oacute;a Đ&ocirc;ng v&agrave; T&acirc;y, xưa v&agrave; nay, n&oacute;i về ẩm thực S&agrave;i G&ograve;n, người ta thường d&ugrave;ng từ đặc sắc, phong ph&uacute; để mi&ecirc;u tả. C&aacute;c m&oacute;n ăn ở S&agrave;i G&ograve;n được chia theo phố, theo khu, c&oacute; đủ cả c&aacute;c cửa tiệm sang trọng đến những m&oacute;n vỉa h&egrave; b&igrave;nh d&acirc;n. V&agrave; để ăn hết những m&oacute;n ngon của S&agrave;i G&ograve;n, một chuyến đi v&agrave;i ng&agrave;y chắc chắn l&agrave; chưa đủ.</span></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:16px\"><a href=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608093002-11.jpg\" title=\"Hủ tiếu Mỹ Tho có sợi hủ tiếu được làm từ loại gạo chỉ trồng ở địa phương. Ảnh: Tourmientay.\"><img alt=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" src=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608093002-11.jpg\" title=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" /></a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">Hủ tiếu Mỹ Tho c&oacute; sợi hủ tiếu được l&agrave;m từ loại gạo chỉ trồng ở địa phương. Ảnh: Tourmientay.</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\">S&agrave;i G&ograve;n l&agrave; thi&ecirc;n đường ẩm thực của những thi&ecirc;n đường ẩm thực. Ở xứ sở ẩm thực m&agrave;u sắc n&agrave;y, bất cứ ai, đến từ nơi n&agrave;o tr&ecirc;n thế giới cũng c&oacute; thể t&igrave;m được m&oacute;n ăn thỏa m&atilde;n được dạ d&agrave;y, được sở th&iacute;ch của m&igrave;nh. Nhưng ngon nổi bật v&agrave; đặc trưng nhất phải kể đến cơm tấm với những thịt sườn ra tấm ra miếng nướng ăn k&egrave;m cơm, đồ chua, nước mắm.</span></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:16px\"><a href=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608093002-12.jpg\" title=\"Cơm tấm (Ảnh: Kênh 14)\"><img alt=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" src=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608093002-12.jpg\" title=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" /></a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">Cơm tấm (Ảnh: K&ecirc;nh 14)</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\">Ngo&agrave;i ra h&agrave;ng trăm m&oacute;n ngon l&agrave;nh như ph&aacute; lấu, hải sản vỉa h&egrave;, hủ tiếu, sinh tố cũng khiến bạn &quot;qu&ecirc;n đường về&quot; bởi qu&aacute; ngon, qu&aacute; rẻ. Thực tế đồ ăn S&agrave;i G&ograve;n kh&ocirc;ng qu&aacute; lạ, bởi n&oacute; đến từ khắp mọi miền tr&ecirc;n thế giới, nhưng c&oacute; lẽ khi về đến S&agrave;i G&ograve;n nhờ với văn h&oacute;a thưởng thức ph&oacute;ng kho&aacute;ng, cởi mở của nơi đ&acirc;y, ch&uacute;ng đ&atilde; c&oacute; một hương vị rất mới v&agrave; mang n&eacute;t đặc biệt ri&ecirc;ng, rất S&agrave;i G&ograve;n.</span></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:16px\"><a href=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608093112-13.jpg\" title=\"Hải sản vỉa hè (Ảnh: Kênh 14)\"><img alt=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" src=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608093112-13.jpg\" title=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" /></a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">Hải sản vỉa h&egrave; (Ảnh: K&ecirc;nh 14)</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Miền T&acirc;y</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Miền T&acirc;y l&agrave; thi&ecirc;n đường của những loại hoa quả, với những miệt vườn rộng lớn, đầy ắp những loại tr&aacute;i c&acirc;y tươi ngon, gi&aacute; rẻ. C&aacute;c loại quả đặc trưng của v&ugrave;ng nhiệt đới ngon ngọt, căng mẩy: thanh long, ch&ocirc;m ch&ocirc;m, qu&yacute;t, dừa&hellip; mỗi m&ugrave;a một loại tr&aacute;i c&acirc;y lu&ocirc;n khiến kh&aacute;ch du lịch thập phương lu&ocirc;n kh&ocirc;ng k&igrave;m được l&ograve;ng.</span></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:16px\"><a href=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608093112-14.jpg\" title=\"Miệt vườn xum xuê cây trái ở Miền Tây (Ảnh: Ivivu)\"><img alt=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" src=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608093112-14.jpg\" title=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" /></a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">Miệt vườn xum xu&ecirc; c&acirc;y tr&aacute;i ở Miền T&acirc;y (Ảnh: Ivivu)</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\">Ngo&agrave;i những loại quả ngon, tr&aacute;i ngọt, miền T&acirc;y c&ograve;n nổi tiếng với những đặc sản dung dị của miền s&ocirc;ng nước, miệt vườn. Kh&aacute;ch đến miền T&acirc;y gh&eacute; nh&agrave; người d&acirc;n địa phương, thường được chi&ecirc;u đ&atilde;i những m&oacute;n ngon với nguy&ecirc;n liệu c&oacute; sẵn từ vườn c&acirc;y, s&ocirc;ng nước gần nh&agrave;, với c&aacute;ch chế biến kh&ocirc;ng cầu kỳ nhưng thức ăn rất tươi ngon, đậm đ&agrave; hương vị.</span></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:16px\"><a href=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608093112-15.jpg\" title=\"Cá kho trái giác (Ảnh: Zing)\"><img alt=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" src=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608093112-15.jpg\" title=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" /></a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">C&aacute; kho tr&aacute;i gi&aacute;c (Ảnh: Zing)</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\">C&oacute; thể kể đến một số m&oacute;n đặc sản của c&aacute;c tỉnh th&agrave;nh ở miền T&acirc;y như c&aacute; l&oacute;c nướng trui, lẩu mắm Cần Thơ, gỏi bưởi kh&ocirc; c&aacute; l&oacute;c An Giang, đu&ocirc;ng dừa Bến Tre, nem nướng C&aacute;i Răng &ndash; Cần Thơ, mắm c&ograve;ng xứ rẫy Tiền Giang... Hương vị đậm đ&agrave; của v&ugrave;ng s&ocirc;ng nước khiến bạn chỉ nếm một lần cũng v&ocirc; c&ugrave;ng kh&oacute; qu&ecirc;n.</span></p>\r\n\r\n<table align=\"center\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:400px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><span style=\"font-size:16px\"><a href=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608093211-16.jpg\" title=\"Cá đồng chưng cách thủy cùng hành tím (Ảnh: Zing)\"><img alt=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" src=\"http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608093211-16.jpg\" title=\"Những điểm du lịch được ví như thiên đường ẩm thực của Việt Nam\" /></a></span></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">C&aacute; đồng chưng c&aacute;ch thủy c&ugrave;ng h&agrave;nh t&iacute;m (Ảnh: Zing)</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\"><em>(Theo Tr&iacute; thức trẻ)</em></span></p>', 'nhung-diem-du-lich-duoc-vi-nhu-thien-duong-am-thuc-cua-viet-nam', 'http://imgs.vietnamnet.vn/Images/vnn/2015/06/08/09/20150608092837-7.jpg', 0, 3, 1, 'Không chỉ được lòng du khách nhờ cảnh đẹp mê ly mà những điểm du lịch dưới đây còn níu chân khách du lịch bằng những món ăn ngon tuyệt cú mèo, và được ví như thiên đường ẩm thực của Việt Nam.', '2019-02-24 07:47:21', '2019-02-24 07:47:21'),
(3, '15 phút làm món dưa leo trộn chua cay ăn kèm món gì cũng ngon', '<p><span style=\"font-size:16px\"><strong>Bạn cần chuẩn bị những nguy&ecirc;n liệu sau cho&nbsp;</strong>m&oacute;n dưa leo trộn&nbsp;<strong>chua cay:</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">2 quả dưa leo</span></p>\r\n\r\n<p><span style=\"font-size:16px\">6 quả ớt đỏ</span></p>\r\n\r\n<p><span style=\"font-size:16px\">5 t&eacute;p tỏi</span></p>\r\n\r\n<p><span style=\"font-size:16px\">V&agrave;i c&acirc;y rau m&ugrave;i</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Một &iacute;t ti&ecirc;u tứ xuy&ecirc;n</span></p>\r\n\r\n<p><span style=\"font-size:16px\">1 mẩu gừng</span></p>\r\n\r\n<p><span style=\"font-size:16px\">15ml dầu h&agrave;o</span></p>\r\n\r\n<p><span style=\"font-size:16px\">15ml dầu ăn</span></p>\r\n\r\n<p><span style=\"font-size:16px\">60ml nước tương</span></p>\r\n\r\n<p><span style=\"font-size:16px\">60ml giấm</span></p>\r\n\r\n<p><span style=\"font-size:16px\">15g đường</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Một &iacute;t muối.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Chế biến:</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Dưa leo rửa sạch với ch&uacute;t muối. Bổ đ&ocirc;i quả dưa theo chiều dọc rồi d&ugrave;ng th&igrave;a nạo bỏ phần hạt dưa.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"Thái dưa leo thành dạng con chì, dài cỡ ngón tay, cho một ít muối vào bát dưa leo rồi trộn đều. Gừng thái sợi, tỏi thái lát, ớt thái nhỏ, rau mùi thái khúc và tách riêng phần lá với phần cuống.\" id=\"img_46ea3390-3653-11e9-9f05-6dfd5a053a94\" src=\"http://giadinh.mediacdn.vn/thumb_w/640/2019/2/22/photo-0-15508067049101002728417.jpg\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Th&aacute;i dưa leo th&agrave;nh dạng con ch&igrave;, d&agrave;i cỡ ng&oacute;n tay, cho một &iacute;t muối v&agrave;o b&aacute;t dưa leo rồi trộn đều. Gừng th&aacute;i sợi, tỏi th&aacute;i l&aacute;t, ớt th&aacute;i nhỏ, rau m&ugrave;i th&aacute;i kh&uacute;c v&agrave; t&aacute;ch ri&ecirc;ng phần l&aacute; với phần cuống.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"Cho dầu ăn vào nồi, thêm tỏi, gừng, tiêu tứ xuyên, ớt và cuống rau mùi vào xào ở lửa nhỏ. Tiếp đó cho dầu hào, nước tương, giấm, đường vào đun chung sau đó tắt bếp.\" id=\"img_87f9c7b0-3653-11e9-ac24-49b34cedcfb6\" src=\"http://giadinh.mediacdn.vn/thumb_w/640/2019/2/22/photo-1-15508067049111540298640.jpg\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Cho dầu ăn v&agrave;o nồi, th&ecirc;m tỏi, gừng, ti&ecirc;u tứ xuy&ecirc;n, ớt v&agrave; cuống rau m&ugrave;i v&agrave;o x&agrave;o ở lửa nhỏ. Tiếp đ&oacute; cho dầu h&agrave;o, nước tương, giấm, đường v&agrave;o đun chung sau đ&oacute; tắt bếp.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"Để nguội phần hỗn hợp gia vị trộn vừa đun. Sau đó cho dưa leo và phần lá rau mùi vào trộn đều. Để dưa leo vào tủ lạnh khoảng 1 giờ là dùng được.\" id=\"img_88119570-3653-11e9-8305-257647080328\" src=\"http://giadinh.mediacdn.vn/thumb_w/640/2019/2/22/photo-2-15508067049122122126989.jpg\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Để nguội phần hỗn hợp gia vị trộn vừa đun. Sau đ&oacute; cho dưa leo v&agrave; phần l&aacute; rau m&ugrave;i v&agrave;o trộn đều. Để dưa leo v&agrave;o tủ lạnh khoảng 1 giờ l&agrave; d&ugrave;ng được.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"\" id=\"img_470a8cd0-3653-11e9-a595-170df68e454b\" src=\"http://giadinh.mediacdn.vn/thumb_w/640/2019/2/22/photo-3-1550806704913233836199.jpg\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><strong>Th&agrave;nh phẩm:</strong></span></p>\r\n\r\n<p><span style=\"font-size:16px\">M&oacute;n dưa leo trộn chua cay n&agrave;y tuy c&aacute;ch l&agrave;m rất đơn giản nhưng vị ngon th&igrave; cực kỳ xuất sắc. Với vị chua - cay - mặn - ngọt h&agrave;i h&ograve;a, bạn c&oacute; thể dễ d&agrave;ng kết hợp n&oacute; với bất kỳ m&oacute;n mặn n&agrave;o d&ugrave; l&agrave; m&oacute;n kho hay nướng hay chi&ecirc;n đều ngon tuyệt!</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"Chúc bạn thành công và ngon miệng với món dưa leo trộn chua cay này nhé!\" id=\"img_880ba200-3653-11e9-894b-7515f532d964\" src=\"http://giadinh.mediacdn.vn/thumb_w/640/2019/2/22/photo-4-15508067049141937311058.jpeg\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Ch&uacute;c bạn th&agrave;nh c&ocirc;ng v&agrave; ngon miệng với m&oacute;n dưa leo trộn chua cay n&agrave;y nh&eacute;!</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Theo&nbsp;<em>Sohu/aFamily</em></span></p>', '15-phut-lam-mon-dua-leo-tron-chua-cay-an-kem-mon-gi-cung-ngon', 'http://giadinh.mediacdn.vn/thumb_w/640/2019/2/22/photo-4-15508067049141937311058.jpeg', 0, 4, 1, 'Thi thoảng bạn hãy đổi món ăn kèm thay vì dưa muối cà muối đã quá quen thuộc thì dưa leo trộn chua cay sẽ mang đến \"làn gió mới\" cho bữa cơm gia đình.', '2019-02-24 07:54:55', '2019-02-24 07:54:55'),
(4, 'Thực phẩm bẩn bủa vây người dân', '<h3><span style=\"font-size:16px\"><strong>Quản l&yacute; lỏng lẻo, chồng ch&eacute;o</strong></span></h3>\r\n\r\n<p><span style=\"font-size:16px\">B&aacute;o c&aacute;o của UBMTTQ TP.HCM, chỉ t&iacute;nh ri&ecirc;ng 6 th&aacute;ng đầu năm 2014, to&agrave;n TP đ&atilde; c&oacute; đến 56 vụ ngộ độc thực phẩm với 1874 người ngộ độc, c&oacute; tới 16 người tử vong. Theo Chi cục ATVSTP TP, số vụ ngộ độc đ&atilde; giảm 28% so với những năm trước đ&acirc;y.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">&Ocirc;ng Huỳnh L&ecirc; Th&aacute;i H&ograve;a - Chi cục trưởng chi cục ATVSTP - cũng cho rằng, việc quản l&yacute; ATTP tr&ecirc;n địa b&agrave;n TP c&ograve;n tồn tại nhiều vấn đề bất cập. Ti&ecirc;u biểu như nguồn n&ocirc;ng sản, thực phẩm nhập v&agrave;o TP chưa được kiểm so&aacute;t nguồn gốc. Hiện nay c&oacute; khoảng 80% số sản phẩm n&ocirc;ng sản tại TP l&agrave; được nhập về từ c&aacute;c tỉnh kh&aacute;c. Trong khi đ&oacute;, việc kiểm so&aacute;t ATTP chủ yếu th&ocirc;ng qua test nhanh v&agrave; lấy mẫu tại 3 chợ đầu mối, v&agrave; c&aacute;c mẫu n&agrave;y cũng chỉ mang t&iacute;nh &ldquo;đại diện&rdquo;.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Hơn nữa, v&igrave; TP.HCM chưa c&oacute; kho lạnh n&ecirc;n nếu kết quả test nhanh c&aacute;c mẫu h&agrave;ng tr&ecirc;n cho ra kết quả dương t&iacute;nh, th&igrave; việc lưu giữ l&ocirc; h&agrave;ng để chờ định lượng l&agrave; điều kh&ocirc;ng thể. Khi kết quả định lượng cho thấy c&oacute; dư lượng thuốc bảo vệ thực vật vượt mức cho ph&eacute;p th&igrave; l&ocirc; h&agrave;ng đ&atilde; được lưu th&ocirc;ng ra ngo&agrave;i thị trường, đ&atilde; được người d&acirc;n ti&ecirc;u thụ.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Theo &ocirc;ng H&ograve;a, việc quản l&yacute; kinh doanh v&agrave; sử dụng phụ gia cũng l&agrave; một vấn đề &ldquo;nhức nhối&rdquo; đối với cơ quan chức năng. Tại một số chợ, phụ gia thực phẩm lẽ ra cần được quản l&yacute; ri&ecirc;ng th&igrave; lại được b&agrave;y b&aacute;n chung với phụ gia ng&agrave;nh c&ocirc;ng nghiệp. Đối với phụ gia sang chiết th&igrave; việc ghi nh&atilde;n cũng chưa được thực hiện đ&uacute;ng.&nbsp;</span></p>\r\n\r\n<table align=\"center\">\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\"><img alt=\"Thuc pham ban bua vay nguoi dan hinh anh 1\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/pgi_xvauqbnau/2014_10_01/13551968062_RYKTjpg.jpg\" title=\"Thực phẩm bẩn bủa vây người dân hình ảnh 1 Thực phẩm bẩn gây mất an toàn vệ sinh thực phẩm\" /></span></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p><span style=\"font-size:16px\">Thực phẩm bẩn g&acirc;y mất an to&agrave;n vệ sinh thực phẩm.</span></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><span style=\"font-size:16px\">Trong khi đ&oacute;, đến nay, luật vẫn kh&ocirc;ng quy định người kinh doanh phụ gia phải c&oacute; chứng chỉ h&agrave;nh nghề trước khi được cấp giấy chứng nhận kinh doanh. Người kinh doanh phụ gia hạn chế về kiến thức n&ecirc;n chưa đủ tr&igrave;nh độ hướng dẫn cho người sử dụng. Đ&oacute; l&agrave; một trong những l&yacute; do c&aacute;c cơ sở kinh doanh thức ăn v&agrave; người d&acirc;n vẫn &ldquo;v&ocirc; tư&rdquo; sử dụng phụ gia ngo&agrave;i danh mục hoặc vượt qu&aacute; h&agrave;m lượng cho ph&eacute;p.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h3><span style=\"font-size:16px\">Người d&acirc;n biết ăn g&igrave;?</span></h3>\r\n\r\n<p><span style=\"font-size:16px\">Những năm gần đ&acirc;y, th&ocirc;ng tin li&ecirc;n quan đến c&aacute;c chất nguy hại c&oacute; trong thực phẩm li&ecirc;n tục trở th&agrave;nh vấn đề người d&acirc;n quan t&acirc;m, bức x&uacute;c. C&oacute; thể liệt k&ecirc; như Melamine trong sữa v&agrave; c&aacute;c sản phẩm từ sữa; bột bắp rang ch&aacute;y c&oacute; trong bột c&agrave; ph&ecirc;; DEHP d&ugrave;ng l&agrave;m chất tạo đục, kh&aacute;ng sinh trong nu&ocirc;i trồng thủy sản, gia s&uacute;c gia cầm; Tinopal c&oacute; trong b&uacute;n; 3-MCPD c&oacute; trong nước tương; c&aacute;c chất tăng trọng, tạo nạc ở lợn; h&oacute;a chất kh&ocirc;ng r&otilde; nguồn gốc l&agrave;m thịt thối rữa trở th&agrave;nh thịt tươi; h&oacute;a chất nhuộm m&agrave;u gia cầm&hellip;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">GS Chu Phạm Ngọc Sơn - Ph&oacute; chủ tịch UB TƯMTTQ TP - cho rằng, rất kh&oacute; dự đo&aacute;n v&agrave; kiểm so&aacute;t hết tất cả những chất nguy hại c&oacute; thể c&oacute; trong thực phẩm với số lượng h&oacute;a chất lớn v&agrave; rất đa dạng hiện nay. Phần lớn c&aacute;c phương tiện kiểm nghiệm hiện c&oacute; trong nước chủ yếu kiểm so&aacute;t c&aacute;c đối tượng nhắm đến, chứ chưa cho ph&eacute;p nhận diện th&ecirc;m c&aacute;c chất lạ kh&aacute;c kh&ocirc;ng nằm trong tầm nhắm.&nbsp;</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Khi cơ quan chức năng than kh&oacute; trong quản l&yacute; nguồn gốc, kh&oacute; kiểm so&aacute;t c&aacute;c chất nguy hại c&oacute; trong thực phẩm kiểm nghiệm th&igrave; người ti&ecirc;u d&ugrave;ng c&oacute; th&ocirc;ng th&aacute;i cũng b&oacute; tay.Hiện nay, một số mặt h&agrave;ng thực phẩm c&oacute; thể c&ograve;n phải chịu sự quản l&yacute; của 3 bộ: NNPTNT, C&ocirc;ng Thương, Y tế v&agrave; th&ecirc;m Hải quan nếu được nhập từ nước ngo&agrave;i về. Theo GS Sơn, sự chồng ch&eacute;o đ&oacute; vừa g&acirc;y kh&oacute; cho quản l&yacute;, vừa l&agrave;m nh&agrave; sản xuất tốn k&eacute;m chi ph&iacute; khi muốn đưa sản phẩm ra thị trường.</span></p>', 'thuc-pham-ban-bua-vay-nguoi-dan', 'https://znews-photo.zadn.vn/w660/Uploaded/pgi_xvauqbnau/2014_10_01/13551968062_RYKTjpg.jpg', 0, 5, 1, 'Hội nghị chuyên đề “Vệ sinh an toàn thực phẩm trong tình hình hiện nay” do UBMTTQ TP.HCM tổ chức đã đưa ra vấn đề liên quan đến quản lý an toàn vệ sinh thực phẩm.', '2019-02-24 07:57:34', '2019-02-24 07:57:34'),
(5, 'Phát hiện cơ sở sản xuất mỡ bẩn kinh hoàng ở Hà Nội', '<p><span style=\"font-size:16px\">Tại thời điểm kiểm tra, lực lượng chức năng ph&aacute;t hiện hơn 1 tấn mỡ nước c&ugrave;ng nhiều thực phẩm chế biến mỡ, t&oacute;p mỡ v&agrave; b&igrave; lợn ngổn ngang khắp cơ sở sản xuất kh&aacute; mất vệ sinh.</span></p>\r\n\r\n<p><span style=\"font-size:16px\">Khoảng 8h30 ng&agrave;y 9/9, Đội 6, Ph&ograve;ng Cảnh s&aacute;t m&ocirc;i trường phối hợp với Chi cục Th&uacute; y TP&nbsp;<a href=\"https://news.zing.vn/tieu-diem/ha-noi.html\">H&agrave; Nội</a>&nbsp;tiến h&agrave;nh kiểm tra cơ sở chế biến b&igrave; lợn v&agrave; mỡ lợn tại tổ 13, x&atilde; T&acirc;n Hội, huyện Đan Phượng, H&agrave; Nội) do b&agrave; Nguyễn Thị Nga l&agrave;m chủ cơ sở.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"Phat hien co so san xuat mo ban kinh hoang o Ha Noi hinh anh 1\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/sotnvw/2014_09_09/Mo4_QCDX.jpg\" style=\"width:480px\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">Tại thời điểm kiểm tra, tổ c&ocirc;ng t&aacute;c ph&aacute;t hiện cơ sở n&agrave;y đang chiết suất mỡ nước từ mỡ lợn bẩn bằng h&igrave;nh thức đun, r&aacute;n. Ngo&agrave;i ra, tổ c&ocirc;ng t&aacute;c c&ograve;n ph&aacute;t hiện cơ sở đang t&iacute;ch trữ 1.310 l&iacute;t mỡ nước, 110 kg mỡ lợn sống, 100kg t&oacute;p mỡ, 75kg b&igrave; lợn sống v&agrave; 140kg b&igrave; lợn đ&atilde; qua sơ chế.</span></p>\r\n\r\n<p><span style=\"font-size:16px\"><img alt=\"Phat hien co so san xuat mo ban kinh hoang o Ha Noi hinh anh 2\" src=\"https://znews-photo.zadn.vn/w660/Uploaded/sotnvw/2014_09_09/Cong_nghe_mo_QWSJ.jpg\" style=\"width:480px\" /></span></p>\r\n\r\n<p><span style=\"font-size:16px\">To&agrave;n bộ số h&agrave;ng h&oacute;a tr&ecirc;n đều kh&ocirc;ng c&oacute; giấy tờ chứng minh nguồn gốc xuất xứ. Tổ c&ocirc;ng t&aacute;c đ&atilde; tiến h&agrave;nh lập bi&ecirc;n bản thu giữ to&agrave;n bộ số h&agrave;ng h&oacute;a tr&ecirc;n giao cho Trạm Th&uacute; y huyện Đan Phượng ti&ecirc;u hủy v&agrave; ho&agrave;n thiện hồ sơ để ra quyết định xử phạt theo quy định của ph&aacute;p luật./.</span></p>', 'phat-hien-co-so-san-xuat-mo-ban-kinh-hoang-o-ha-noi', 'https://znews-photo.zadn.vn/w660/Uploaded/sotnvw/2014_09_09/Mo4_QCDX.jpg', 0, 5, 1, 'Tổ công tác phát hiện cơ sở này đang chiết suất mỡ nước từ mỡ lợn bẩn bằng hình thức đun, rán.', '2019-02-24 07:59:03', '2019-02-24 07:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `binhluans`
--

CREATE TABLE `binhluans` (
  `id` int(10) UNSIGNED NOT NULL,
  `tennguoibl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailnguoibl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidungbl` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mabv` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `binhluans`
--

INSERT INTO `binhluans` (`id`, `tennguoibl`, `emailnguoibl`, `noidungbl`, `mabv`, `created_at`, `updated_at`) VALUES
(1, 'King Naut', 'king@naut.com', 'Bài Viết Rất Hay Và ý nghĩa', 1, NULL, NULL),
(2, 'King Naut', 'king@naut.com', 'Thật Kinh khủng', 5, '2019-02-24 08:02:14', '2019-02-24 08:02:14'),
(4, 'King Naut', 'saxas@gmail.com', 'xzjc czkjch czxjncjzxcn czjxncjznc xzjncjnxzc zjcnjzxnc zxjncjzxc zxjncjzxc xcnxzcnz cjzxncjxznc cxzcnzxjcn czxncjxznc xzkcnxkzn', 5, '2019-02-24 08:14:36', '2019-02-24 08:14:36'),
(5, 'King Naut', 'saxas@gmail.com', 'Khi cơ quan chức năng than khó trong quản lý nguồn gốc, khó kiểm soát các chất nguy hại có trong thực phẩm kiểm nghiệm thì người tiêu dùng có thông thái cũng bó tay.Hiện nay, một số mặt hàng thực phẩm có thể còn phải chịu sự quản lý của 3 bộ: NNPTNT, Công Thương, Y tế và thêm Hải quan nếu được nhập từ nước ngoài về. Theo GS Sơn, sự chồng chéo đó vừa gây khó cho quản lý, vừa làm nhà sản xuất tốn kém chi phí khi muốn đưa sản phẩm ra thị trường.', 4, '2019-02-24 19:27:47', '2019-02-24 19:27:47'),
(6, 'King Naut', 'saxas@gmail.com', 'zsxsxs dsas sádasdac đá', 5, '2019-02-24 21:40:30', '2019-02-24 21:40:30'),
(7, 'King Naut', 'saxas@gmail.com', 'mxjbczxbnmxbz', 3, '2019-02-27 01:44:18', '2019-02-27 01:44:18'),
(8, 'King Naut', 'saxas@gmail.com', 'jhhhhhhhhhhhhbbbbbbbbbbbbbhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 5, '2019-02-27 01:45:41', '2019-02-27 01:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `cauhinhs`
--

CREATE TABLE `cauhinhs` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` int(11) NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chuyenmucs`
--

CREATE TABLE `chuyenmucs` (
  `id` int(10) UNSIGNED NOT NULL,
  `tencm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duongdancm` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chuyenmucs`
--

INSERT INTO `chuyenmucs` (`id`, `tencm`, `duongdancm`, `created_at`, `updated_at`) VALUES
(1, 'Ẩm Thực Mọi Miền', 'am-thuc', '2019-02-24 07:02:20', '2019-02-24 07:21:10'),
(3, 'Du Lịch Ẩm Thực', 'du-lich-am-thuc', '2019-02-24 07:03:11', '2019-02-24 07:03:11'),
(4, 'Chế Biến Món Ngon', 'che-bien-mon-ngon', '2019-02-24 07:03:22', '2019-02-24 07:03:22'),
(5, 'Tin Ẩm Thực', 'tin-am-thuc', '2019-02-24 07:03:36', '2019-02-24 07:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(43, '2014_10_12_000000_create_users_table', 1),
(44, '2014_10_12_100000_create_password_resets_table', 1),
(45, '2019_01_06_144546_create_cauhinhs_table', 1),
(46, '2019_01_06_154539_create_chuyenmucs_table', 1),
(47, '2019_01_08_065901_create_phanhois_table', 1),
(48, '2019_01_08_134726_create_baiviets_table', 1),
(49, '2019_01_08_144336_create_binhluans_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phanhois`
--

CREATE TABLE `phanhois` (
  `id` int(10) UNSIGNED NOT NULL,
  `tennguoiph` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailnguoiph` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidungph` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phanhois`
--

INSERT INTO `phanhois` (`id`, `tennguoiph`, `emailnguoiph`, `noidungph`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Mạnh Tuấn', 'tuan@gmail.com', 'Web Rất Hay !', '2019-02-24 08:15:57', '2019-02-24 08:15:57'),
(2, 'Nguyễn Mạnh Tuấn', 'tuan@gmail.com', 'web Rất tốt!', '2019-02-24 18:45:08', '2019-02-24 18:45:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lever` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `lever`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Mạnh Tuấn', 'manhtuan@gmail.com', '1', NULL, '$2y$10$dwQpXlSp3U.xgnFfdRhyA.k37OSA4jzJd80Gv9VCtE/joLt/cXXkG', 'oh2l9nz826qwugFAr6fnMyoNcBRxgOEmspFkHZn8PHxLopEC0Vx30SPMxYpo', '2019-02-24 07:01:10', '2019-02-25 08:17:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviets`
--
ALTER TABLE `baiviets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `baiviets_macm_foreign` (`macm`),
  ADD KEY `baiviets_matv_foreign` (`matv`);

--
-- Indexes for table `binhluans`
--
ALTER TABLE `binhluans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `binhluans_mabv_foreign` (`mabv`);

--
-- Indexes for table `cauhinhs`
--
ALTER TABLE `cauhinhs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chuyenmucs`
--
ALTER TABLE `chuyenmucs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `phanhois`
--
ALTER TABLE `phanhois`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviets`
--
ALTER TABLE `baiviets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `binhluans`
--
ALTER TABLE `binhluans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cauhinhs`
--
ALTER TABLE `cauhinhs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chuyenmucs`
--
ALTER TABLE `chuyenmucs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `phanhois`
--
ALTER TABLE `phanhois`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviets`
--
ALTER TABLE `baiviets`
  ADD CONSTRAINT `baiviets_macm_foreign` FOREIGN KEY (`macm`) REFERENCES `chuyenmucs` (`id`),
  ADD CONSTRAINT `baiviets_matv_foreign` FOREIGN KEY (`matv`) REFERENCES `users` (`id`);

--
-- Constraints for table `binhluans`
--
ALTER TABLE `binhluans`
  ADD CONSTRAINT `binhluans_mabv_foreign` FOREIGN KEY (`mabv`) REFERENCES `baiviets` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

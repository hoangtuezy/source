-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2020 at 10:05 AM
-- Server version: 5.7.24
-- PHP Version: 5.6.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `source`
--

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `tm` int(11) NOT NULL,
  `ip` varchar(16) COLLATE latin1_general_ci NOT NULL DEFAULT '0.0.0.0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`id`, `tm`, `ip`) VALUES
(1, 1583379470, '127.0.0.1'),
(2, 1583380781, '127.0.0.1'),
(3, 1583382925, '127.0.0.1'),
(4, 1583388377, '127.0.0.1'),
(5, 1583390062, '127.0.0.1'),
(6, 1583390978, '127.0.0.1'),
(7, 1583392755, '127.0.0.1'),
(8, 1583393852, '127.0.0.1'),
(9, 1583395085, '127.0.0.1'),
(10, 1583395991, '127.0.0.1'),
(11, 1583396959, '127.0.0.1'),
(12, 1583398741, '127.0.0.1'),
(13, 1583399703, '127.0.0.1'),
(14, 1583402449, '127.0.0.1'),
(15, 1583456374, '127.0.0.1'),
(16, 1583457480, '127.0.0.1'),
(17, 1583458380, '127.0.0.1'),
(18, 1583462796, '127.0.0.1'),
(19, 1583463704, '127.0.0.1'),
(20, 1583464700, '127.0.0.1'),
(21, 1583465650, '127.0.0.1'),
(22, 1583466858, '127.0.0.1'),
(23, 1583468591, '127.0.0.1'),
(24, 1583469631, '127.0.0.1'),
(25, 1583470593, '127.0.0.1'),
(26, 1583473302, '127.0.0.1'),
(27, 1583474443, '127.0.0.1'),
(28, 1583475386, '127.0.0.1'),
(29, 1583476636, '127.0.0.1'),
(30, 1583550353, '127.0.0.1'),
(31, 1583716036, '127.0.0.1'),
(32, 1583721069, '127.0.0.1'),
(33, 1583722075, '127.0.0.1'),
(34, 1583723118, '127.0.0.1'),
(35, 1583724019, '127.0.0.1'),
(36, 1583725126, '127.0.0.1'),
(37, 1583726087, '127.0.0.1'),
(38, 1583727122, '127.0.0.1'),
(39, 1583728381, '127.0.0.1'),
(40, 1583729288, '127.0.0.1'),
(41, 1583733687, '127.0.0.1'),
(42, 1583735171, '127.0.0.1'),
(43, 1583736564, '127.0.0.1'),
(44, 1583737771, '127.0.0.1'),
(45, 1583739516, '127.0.0.1'),
(46, 1583740533, '127.0.0.1'),
(47, 1583741841, '127.0.0.1'),
(48, 1583742753, '127.0.0.1'),
(49, 1583743662, '127.0.0.1'),
(50, 1583744607, '127.0.0.1'),
(51, 1583746368, '127.0.0.1'),
(52, 1583747293, '127.0.0.1'),
(53, 1583749012, '127.0.0.1'),
(54, 1583749962, '127.0.0.1'),
(55, 1583750943, '127.0.0.1'),
(56, 1583804245, '127.0.0.1'),
(57, 1583899721, '127.0.0.1'),
(58, 1583902384, '127.0.0.1'),
(59, 1583910243, '127.0.0.1'),
(60, 1583912269, '127.0.0.1'),
(61, 1583914075, '127.0.0.1'),
(62, 1583915176, '127.0.0.1'),
(63, 1583916146, '127.0.0.1'),
(64, 1583918213, '127.0.0.1'),
(65, 1583919712, '127.0.0.1'),
(66, 1583975362, '127.0.0.1'),
(67, 1583976346, '127.0.0.1'),
(68, 1583978077, '127.0.0.1'),
(69, 1583978996, '127.0.0.1'),
(70, 1583980150, '127.0.0.1'),
(71, 1583981260, '127.0.0.1'),
(72, 1583982369, '127.0.0.1'),
(73, 1583983345, '127.0.0.1'),
(74, 1583984330, '127.0.0.1'),
(75, 1583985505, '127.0.0.1'),
(76, 1583986845, '127.0.0.1'),
(77, 1583987874, '127.0.0.1'),
(78, 1583988952, '127.0.0.1'),
(79, 1583993008, '127.0.0.1'),
(80, 1583994936, '127.0.0.1'),
(81, 1583995869, '127.0.0.1'),
(82, 1583997190, '127.0.0.1'),
(83, 1583998128, '127.0.0.1'),
(84, 1583999500, '127.0.0.1'),
(85, 1584000550, '127.0.0.1'),
(86, 1584001512, '127.0.0.1'),
(87, 1584002506, '127.0.0.1'),
(88, 1584004851, '127.0.0.1'),
(89, 1584005772, '127.0.0.1'),
(90, 1584006680, '127.0.0.1'),
(91, 1584069276, '127.0.0.1'),
(92, 1584147656, '127.0.0.1'),
(93, 1584148722, '127.0.0.1'),
(94, 1584149878, '127.0.0.1'),
(95, 1584150905, '127.0.0.1'),
(96, 1584151846, '127.0.0.1'),
(97, 1584153190, '127.0.0.1'),
(98, 1584154361, '127.0.0.1'),
(99, 1584155927, '127.0.0.1'),
(100, 1584157392, '127.0.0.1'),
(101, 1584158665, '127.0.0.1'),
(102, 1584159571, '127.0.0.1'),
(103, 1584160495, '127.0.0.1'),
(104, 1584161423, '127.0.0.1'),
(105, 1584162352, '127.0.0.1'),
(106, 1584163334, '127.0.0.1'),
(107, 1584321814, '127.0.0.1'),
(108, 1584327550, '127.0.0.1'),
(109, 1584328643, '127.0.0.1'),
(110, 1584329815, '127.0.0.1'),
(111, 1584331084, '127.0.0.1'),
(112, 1584332511, '127.0.0.1'),
(113, 1584333450, '127.0.0.1'),
(114, 1584334481, '127.0.0.1'),
(115, 1584338497, '127.0.0.1'),
(116, 1584341765, '127.0.0.1'),
(117, 1584342720, '127.0.0.1'),
(118, 1584344705, '127.0.0.1'),
(119, 1584345962, '127.0.0.1'),
(120, 1584346966, '127.0.0.1'),
(121, 1584347895, '127.0.0.1'),
(122, 1584348889, '127.0.0.1'),
(123, 1584349624, '192.168.1.41'),
(124, 1584350056, '127.0.0.1'),
(125, 1584351068, '127.0.0.1'),
(126, 1584352047, '127.0.0.1'),
(127, 1584352959, '127.0.0.1'),
(128, 1584407300, '127.0.0.1'),
(129, 1584408217, '127.0.0.1'),
(130, 1584409156, '127.0.0.1'),
(131, 1584410060, '127.0.0.1'),
(132, 1584411336, '127.0.0.1'),
(133, 1584412242, '127.0.0.1'),
(134, 1584413172, '127.0.0.1'),
(135, 1584414227, '127.0.0.1'),
(136, 1584415182, '127.0.0.1'),
(137, 1584416088, '127.0.0.1'),
(138, 1584417102, '127.0.0.1'),
(139, 1584418680, '127.0.0.1'),
(140, 1584419582, '127.0.0.1'),
(141, 1584420502, '127.0.0.1'),
(142, 1584421435, '127.0.0.1'),
(143, 1584493724, '127.0.0.1'),
(144, 1584501151, '127.0.0.1'),
(145, 1584503474, '127.0.0.1'),
(146, 1584505997, '127.0.0.1'),
(147, 1584516855, '127.0.0.1'),
(148, 1584579898, '127.0.0.1'),
(149, 1584581931, '127.0.0.1'),
(150, 1584584198, '127.0.0.1'),
(151, 1584585137, '127.0.0.1'),
(152, 1584586283, '127.0.0.1'),
(153, 1584588861, '127.0.0.1'),
(154, 1584589959, '127.0.0.1'),
(155, 1584590866, '127.0.0.1'),
(156, 1584591808, '127.0.0.1'),
(157, 1584593007, '127.0.0.1'),
(158, 1584593971, '127.0.0.1'),
(159, 1584598087, '127.0.0.1'),
(160, 1584599074, '127.0.0.1'),
(161, 1584600001, '127.0.0.1'),
(162, 1584600913, '127.0.0.1'),
(163, 1584674192, '127.0.0.1'),
(164, 1584751967, '127.0.0.1'),
(165, 1584925568, '127.0.0.1'),
(166, 1584926575, '127.0.0.1'),
(167, 1584927544, '127.0.0.1'),
(168, 1584937048, '127.0.0.1'),
(169, 1584948718, '127.0.0.1'),
(170, 1584955242, '127.0.0.1'),
(171, 1585101641, '127.0.0.1'),
(172, 1585103093, '127.0.0.1'),
(173, 1585104203, '127.0.0.1'),
(174, 1585104481, '192.168.1.41'),
(175, 1585104544, '192.168.1.2'),
(176, 1585105115, '127.0.0.1'),
(177, 1585106064, '127.0.0.1'),
(178, 1585109502, '127.0.0.1'),
(179, 1585110439, '127.0.0.1'),
(180, 1585116524, '127.0.0.1'),
(181, 1585117704, '127.0.0.1'),
(182, 1585118792, '127.0.0.1'),
(183, 1585119723, '127.0.0.1'),
(184, 1585120687, '127.0.0.1'),
(185, 1585121599, '127.0.0.1'),
(186, 1585123185, '127.0.0.1'),
(187, 1585124566, '127.0.0.1'),
(188, 1585125483, '127.0.0.1'),
(189, 1585126426, '127.0.0.1'),
(190, 1585127351, '127.0.0.1');

-- --------------------------------------------------------

--
-- Table structure for table `table_album`
--

CREATE TABLE `table_album` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_list` int(11) NOT NULL,
  `noibat` int(11) NOT NULL,
  `top_nb` tinyint(2) NOT NULL,
  `type` varchar(100) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung_cn` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `mota_cn` text NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `ten_cn` varchar(225) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_album`
--

INSERT INTO `table_album` (`id`, `id_list`, `noibat`, `top_nb`, `type`, `photo`, `thumb`, `ten_vi`, `noidung_cn`, `tenkhongdau`, `link`, `title`, `keywords`, `description`, `mota_vi`, `noidung_vi`, `mota_cn`, `ten_en`, `ten_cn`, `mota_en`, `noidung_en`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `luotxem`, `ten_kr`, `mota_kr`, `noidung_kr`) VALUES
(1, 0, 0, 0, 'album', '4-9687.jpg', '4-9687_410.66810344828x600.jpg', 'Album 01', '', 'album-01', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1584350501, 0, 0, '', '', ''),
(2, 0, 0, 0, 'album', '4-7397.jpg', '4-7397_410.66810344828x600.jpg', 'Album 01', '', 'album-01', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1584350503, 0, 0, '', '', ''),
(3, 0, 0, 0, 'album', '4-3106.jpg', '4-3106_410.66810344828x600.jpg', 'Album 01', '', 'album-01', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1584350504, 0, 0, '', '', ''),
(4, 0, 0, 0, 'album', '4-169.jpg', '4-169_410.66810344828x600.jpg', 'Album 01', '', 'album-01', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1584350505, 0, 0, '', '', ''),
(5, 0, 0, 0, 'album', '4-6801.jpg', '4-6801_410.66810344828x600.jpg', 'Album 01', '', 'album-01', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1584350506, 0, 0, '', '', ''),
(6, 0, 0, 0, 'album', '4-4468.jpg', '4-4468_410.66810344828x600.jpg', 'Album 01', '', 'album-01', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1584350507, 0, 0, '', '', ''),
(7, 0, 0, 0, 'album', '4-5315.jpg', '4-5315_410.66810344828x600.jpg', 'Album 01', '', 'album-01', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1584350508, 0, 0, '', '', ''),
(8, 0, 0, 0, 'album', '4-4061.jpg', '4-4061_410.66810344828x600.jpg', 'Album 01', '', 'album-01', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1584350509, 0, 0, '', '', ''),
(9, 0, 0, 0, 'album', '4-3426.jpg', '4-3426_410.66810344828x600.jpg', 'Album 01', '', 'album-01', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1584350510, 0, 0, '', '', ''),
(10, 0, 0, 0, 'album', '4-6845.jpg', '4-6845_410.66810344828x600.jpg', 'Album 01', '', 'album-01', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1584350512, 0, 0, '', '', ''),
(11, 0, 0, 0, 'album', '4-9344.jpg', '4-9344_410.66810344828x600.jpg', 'Album 01', '', 'album-01', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1584350513, 0, 0, '', '', ''),
(12, 0, 0, 0, 'album', '4-1031.jpg', '4-1031_410.66810344828x600.jpg', 'Album 01', '', 'album-01', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1584350514, 0, 0, '', '', ''),
(13, 0, 0, 0, 'album', '4-4513.jpg', '4-4513_410.66810344828x600.jpg', 'Album 01', '', 'album-01', '', '', '', '', '', '', '', '', '', '', '', 1, 1, 1584350515, 0, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_album_list`
--

CREATE TABLE `table_album_list` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `quangcao` varchar(255) NOT NULL,
  `quangcao_thumb` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_album_photo`
--

CREATE TABLE `table_album_photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_album` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(1024) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_baiviet`
--

CREATE TABLE `table_baiviet` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `noibat` int(11) NOT NULL,
  `banchay` int(11) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `khuyenmai_vi` text NOT NULL,
  `khuyenmai_en` text NOT NULL,
  `thongtin_vi` text NOT NULL,
  `thongtin_en` text NOT NULL,
  `baohanh_vi` varchar(255) NOT NULL,
  `baohanh_en` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `des_char` int(11) NOT NULL,
  `is_noindex` int(11) NOT NULL,
  `giaban` int(11) NOT NULL,
  `giacu` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `ten_cn` varchar(255) NOT NULL,
  `mota_en` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_en` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL,
  `link` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_baiviet`
--

INSERT INTO `table_baiviet` (`id`, `id_cat`, `id_list`, `id_item`, `id_sub`, `type`, `noibat`, `banchay`, `photo`, `thumb`, `ten_vi`, `masp`, `tenkhongdau`, `khuyenmai_vi`, `khuyenmai_en`, `thongtin_vi`, `thongtin_en`, `baohanh_vi`, `baohanh_en`, `title`, `keywords`, `description`, `des_char`, `is_noindex`, `giaban`, `giacu`, `mota_vi`, `noidung_vi`, `name_vi`, `name_en`, `ten_en`, `ten_cn`, `mota_en`, `mota_cn`, `noidung_en`, `noidung_cn`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `luotxem`, `ten_kr`, `mota_kr`, `noidung_kr`, `link`) VALUES
(1, 0, 0, 0, 0, 'quy-trinh', 1, 0, 'tiepnhan-1654.png', 'tiepnhan-1654_160x160.png', 'Tư Vấn', '', 'tu-van', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores similique voluptatum, culpa ad iure sed placeat nihil modi provident laborum nemo, reprehenderit aliquid voluptas quaerat hic quam sapiente temporibus nostrum!', '', '', '', '', '', '', '', '', '', 1, 1, 1583389899, 1583392793, 0, '', '', '', ''),
(2, 0, 0, 0, 0, 'quy-trinh', 1, 0, '', '', 'Tiếp nhận', '', 'tiep-nhan', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores similique voluptatum, culpa ad iure sed placeat nihil modi provident laborum nemo, reprehenderit aliquid voluptas quaerat hic quam sapiente temporibus nostrum!', '', '', '', '', '', '', '', '', '', 1, 1, 1583390069, 1583392789, 3, '', '', '', ''),
(3, 0, 0, 0, 0, 'quy-trinh', 1, 0, '', '', 'Báo Giá', '', 'bao-gia', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores similique voluptatum, culpa ad iure sed placeat nihil modi provident laborum nemo, reprehenderit aliquid voluptas quaerat hic quam sapiente temporibus nostrum!', '', '', '', '', '', '', '', '', '', 1, 1, 1583390110, 1583392784, 0, '', '', '', ''),
(4, 0, 0, 0, 0, 'quy-trinh', 1, 0, '', '', 'Thiết Kế', '', 'thiet-ke', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores similique voluptatum, culpa ad iure sed placeat nihil modi provident laborum nemo, reprehenderit aliquid voluptas quaerat hic quam sapiente temporibus nostrum!', '', '', '', '', '', '', '', '', '', 1, 1, 1583390119, 1583392780, 6, '', '', '', ''),
(5, 0, 0, 0, 0, 'quy-trinh', 1, 0, '', '', 'Thi Công', '', 'thi-cong', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores similique voluptatum, culpa ad iure sed placeat nihil modi provident laborum nemo, reprehenderit aliquid voluptas quaerat hic quam sapiente temporibus nostrum!', '', '', '', '', '', '', '', '', '', 1, 1, 1583390125, 1583392776, 0, '', '', '', ''),
(6, 0, 0, 0, 0, 'quy-trinh', 1, 0, '', '', 'Bảo Hành', '', 'bao-hanh', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores similique voluptatum, culpa ad iure sed placeat nihil modi provident laborum nemo, reprehenderit aliquid voluptas quaerat hic quam sapiente temporibus nostrum!', '', '', '', '', '', '', '', '', '', 1, 1, 1583390163, 1583392772, 0, '', '', '', ''),
(39, 0, 0, 0, 0, 'tin-tuc', 1, 0, '2-2608.jpg', '2-2608_590x360.jpg', 'Tin Tức 03', '', 'tin-tuc-03', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1584346732, 0, 0, '', '', '', ''),
(40, 0, 0, 0, 0, 'tin-tuc', 1, 0, '2-2968.jpg', '2-2968_590x360.jpg', 'Tin Tức 03', '', 'tin-tuc-03', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1584346734, 0, 0, '', '', '', ''),
(41, 0, 0, 0, 0, 'tin-tuc', 1, 0, '2-5937.jpg', '2-5937_590x360.jpg', 'Tin Tức 03', '', 'tin-tuc-03', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1584346735, 0, 0, '', '', '', ''),
(37, 0, 0, 0, 0, 'tin-tuc', 1, 0, '2-5441.jpg', '2-5441_590x360.jpg', 'Tin tức 01', '', 'tin-tuc-01', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque amet fuga corrupti blanditiis sapiente neque iste harum ea possimus deleniti sequi, laboriosam odit obcaecati qui velit. Repudiandae minus neque laboriosam.', '', '', '', '', '', '', '', '', '', 1, 1, 1584331960, 1584333474, 14, '', '', '', ''),
(38, 0, 0, 0, 0, 'tin-tuc', 1, 0, '2-1783.jpg', '2-1783_590x360.jpg', 'Tin Tức 03', '', 'tin-tuc-03', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1584346731, 0, 0, '', '', '', ''),
(9, 0, 0, 0, 0, 'vi-sao-chon', 1, 0, 'vsc2-975.png', 'vsc2-975_173x173.png', 'Cam kết chất lượng', '', 'cam-ket-chat-luong', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum unde, illum nam consectetur mollitia at sit commodi, fuga ut maiores temporibus id! Blanditiis ducimus culpa sed eveniet, voluptates eos! Tenetur voluptates nobis, voluptate excepturi, vel praesentium natus libero velit totam sint officiis, asperiores distinctio est voluptas nam quae maxime laudantium vero quis. Deserunt esse inventore culpa suscipit, tenetur praesentium earum, amet, impedit, accusantium nostrum quidem incidunt ipsa! Repellendus optio harum eius similique voluptatem, explicabo reiciendis, reprehenderit labore animi iure sint officiis itaque? Dolor iure similique voluptate, provident vel quas iste, autem labore! Voluptatibus iusto fugit, ut, delectus consectetur officia nobis itaque voluptas sunt facilis velit qui? Culpa tempora quas inventore modi unde aut voluptates veniam sint, similique nisi ipsa blanditiis eum sequi expedita. Repellat blanditiis veritatis repellendus tenetur animi soluta aspernatur, quia. Neque illo hic reprehenderit a! Voluptatibus esse nisi enim, sed ratione ex excepturi aperiam explicabo quos illum aut ipsa eaque ut ab quisquam quibusdam animi porro fuga, unde voluptate earum neque velit eligendi, repellat. Odio, cumque sequi. Accusamus ipsa libero nihil alias veniam iure eligendi! Vel, minima. Itaque, expedita minima. Dolorum nesciunt soluta, suscipit dolore animi perspiciatis? Tempora aut qui exercitationem quaerat ab commodi, accusamus nostrum dolorem perferendis est perspiciatis repudiandae ratione dolor, delectus totam id consequatur earum non. Consectetur corporis reiciendis animi modi, veniam suscipit doloremque qui beatae accusamus architecto vitae, asperiores ab tempore commodi nulla unde magnam sint consequuntur blanditiis excepturi! Iste rerum, maxime? Itaque atque nemo quidem quia esse unde, cum inventore quo maxime, consectetur velit harum. Temporibus sit in ea porro unde veniam atque, iure distinctio esse asperiores! Atque repudiandae quibusdam recusandae animi placeat! Cumque fugit dolorum reprehenderit, doloribus, delectus porro. Nihil necessitatibus saepe quam incidunt quidem recusandae, aut facilis velit iure reprehenderit quisquam impedit minus totam aspernatur cupiditate odio provident unde. Non, quasi!', '', '', '', '', '', '', '', '', '', 1, 1, 1583399660, 1583726815, 0, '', '', '', ''),
(10, 0, 0, 0, 0, 'vi-sao-chon', 1, 0, 'vsc1-4246.png', 'vsc1-4246_173x173.png', 'Tiết kiệm thời gian', '', 'tiet-kiem-thoi-gian', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum unde, illum nam consectetur mollitia at sit commodi, fuga ut maiores temporibus id! Blanditiis ducimus culpa sed eveniet, voluptates eos! Tenetur voluptates nobis, voluptate excepturi, vel praesentium natus libero velit totam sint officiis, asperiores distinctio est voluptas nam quae maxime laudantium vero quis. Deserunt esse inventore culpa suscipit, tenetur praesentium earum, amet, impedit, accusantium nostrum quidem incidunt ipsa! Repellendus optio harum eius similique voluptatem, explicabo reiciendis, reprehenderit labore animi iure sint officiis itaque? Dolor iure similique voluptate, provident vel quas iste, autem labore! Voluptatibus iusto fugit, ut, delectus consectetur officia nobis itaque voluptas sunt facilis velit qui? Culpa tempora quas inventore modi unde aut voluptates veniam sint, similique nisi ipsa blanditiis eum sequi expedita. Repellat blanditiis veritatis repellendus tenetur animi soluta aspernatur, quia. Neque illo hic reprehenderit a! Voluptatibus esse nisi enim, sed ratione ex excepturi aperiam explicabo quos illum aut ipsa eaque ut ab quisquam quibusdam animi porro fuga, unde voluptate earum neque velit eligendi, repellat. Odio, cumque sequi. Accusamus ipsa libero nihil alias veniam iure eligendi! Vel, minima. Itaque, expedita minima. Dolorum nesciunt soluta, suscipit dolore animi perspiciatis? Tempora aut qui exercitationem quaerat ab commodi, accusamus nostrum dolorem perferendis est perspiciatis repudiandae ratione dolor, delectus totam id consequatur earum non. Consectetur corporis reiciendis animi modi, veniam suscipit doloremque qui beatae accusamus architecto vitae, asperiores ab tempore commodi nulla unde magnam sint consequuntur blanditiis excepturi! Iste rerum, maxime? Itaque atque nemo quidem quia esse unde, cum inventore quo maxime, consectetur velit harum. Temporibus sit in ea porro unde veniam atque, iure distinctio esse asperiores! Atque repudiandae quibusdam recusandae animi placeat! Cumque fugit dolorum reprehenderit, doloribus, delectus porro. Nihil necessitatibus saepe quam incidunt quidem recusandae, aut facilis velit iure reprehenderit quisquam impedit minus totam aspernatur cupiditate odio provident unde. Non, quasi!', '', '', '', '', '', '', '', '', '', 1, 1, 1583399719, 1583726682, 0, '', '', '', ''),
(14, 0, 1, 0, 0, 'du-an', 1, 0, 'b26-2976.jpg', 'b26-2976_340x270.jpg', 'Dự án 0012020', '', 'du-an-0012020', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1583463769, 1583475818, 14, '', '', '', ''),
(15, 0, 1, 0, 0, 'du-an', 1, 0, 'b30-3442.jpg', 'b30-3442_340x270.jpg', 'Dự á n 1241251', '', 'du-a-n-1241251', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1583463781, 1583473240, 1, '', '', '', ''),
(16, 0, 2, 0, 0, 'du-an', 1, 0, 'a17-9019.jpg', 'a17-9019_340x270.jpg', 'ALbum 01121212', '', 'album-01121212', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1583463794, 0, 0, '', '', '', ''),
(17, 0, 2, 0, 0, 'du-an', 1, 0, 'a17-6803.jpg', 'a17-6803_340x270.jpg', 'ALbum 01121212', '', 'album-01121212', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1583463794, 0, 0, '', '', '', ''),
(18, 0, 2, 0, 0, 'du-an', 1, 0, 'a17-6230.jpg', 'a17-6230_340x270.jpg', 'ALbum 01121212', '', 'album-01121212', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1583463794, 0, 0, '', '', '', ''),
(19, 0, 2, 0, 0, 'du-an', 1, 0, 'a17-6057.jpg', 'a17-6057_340x270.jpg', 'ALbum 01121212', '', 'album-01121212', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1583463794, 0, 0, '', '', '', ''),
(20, 0, 2, 0, 0, 'du-an', 1, 0, 'a17-4812.jpg', 'a17-4812_340x270.jpg', 'ALbum 01121212', '', 'album-01121212', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1583463794, 0, 0, '', '', '', ''),
(21, 0, 2, 0, 0, 'du-an', 1, 0, 'a17-71.jpg', 'a17-71_340x270.jpg', 'ALbum 01121212', '', 'album-01121212', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1583463794, 0, 0, '', '', '', ''),
(22, 0, 2, 0, 0, 'du-an', 1, 0, 'a17-8668.jpg', 'a17-8668_340x270.jpg', 'ALbum 01121212', '', 'album-01121212', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1583463795, 0, 0, '', '', '', ''),
(23, 0, 2, 0, 0, 'du-an', 1, 0, 'a17-126.jpg', 'a17-126_340x270.jpg', 'ALbum 01121212', '', 'album-01121212', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1583463795, 0, 0, '', '', '', ''),
(24, 0, 2, 0, 0, 'du-an', 1, 0, 'a17-976.jpg', 'a17-976_340x270.jpg', 'ALbum 01121212', '', 'album-01121212', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1583463795, 0, 0, '', '', '', ''),
(25, 0, 2, 0, 0, 'du-an', 1, 0, 'a17-3583.jpg', 'a17-3583_340x270.jpg', 'ALbum 01121212', '', 'album-01121212', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1583463795, 0, 0, '', '', '', ''),
(43, 0, 0, 0, 0, 'khach-hang', 1, 0, '4-105.jpg', '4-105_144x144.jpg', 'Khách hàng 04', '', 'khach-hang-04', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum mollitia fuga tempora, enim dolor maiores alias inventore ipsa harum aspernatur. Ab aspernatur nisi, molestias eveniet laborum id nemo velit hic.', '', '', '', '', '', '', '', '', '', 1, 1, 1584410626, 1584412117, 0, '', '', '', ''),
(44, 0, 0, 0, 0, 'khach-hang', 1, 0, '2-727.jpg', '2-727_144x144.jpg', 'Khách hàng 01', '', 'khach-hang-01', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum mollitia fuga tempora, enim dolor maiores alias inventore ipsa harum aspernatur. Ab aspernatur nisi, molestias eveniet laborum id nemo velit hic.', '', '', '', '', '', '', '', '', '', 1, 1, 1584410627, 0, 2, '', '', '', ''),
(45, 0, 0, 0, 0, 'khach-hang', 1, 0, '394045392914998-1573.png', '394045392914998-1573_144x144.png', 'Khách hàng 02', '', 'khach-hang-02', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum mollitia fuga tempora, enim dolor maiores alias inventore ipsa harum aspernatur. Ab aspernatur nisi, molestias eveniet laborum id nemo velit hic.', '', '', '', '', '', '', '', '', '', 1, 1, 1584410628, 1584412107, 0, '', '', '', ''),
(42, 0, 0, 0, 0, 'tin-tuc', 1, 0, '2-9422.jpg', '2-9422_590x360.jpg', 'Tin Tức 03', '', 'tin-tuc-03', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 1, 1, 1584346736, 0, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_baiviet_cat`
--

CREATE TABLE `table_baiviet_cat` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_baiviet_item`
--

CREATE TABLE `table_baiviet_item` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_baiviet_list`
--

CREATE TABLE `table_baiviet_list` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `ten_cn` varchar(255) NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `quangcao` varchar(255) NOT NULL,
  `quangcao_thumb` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `noibat` int(11) NOT NULL,
  `noidung_vi` text NOT NULL,
  `noidung_en` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_baiviet_list`
--

INSERT INTO `table_baiviet_list` (`id`, `type`, `ten_vi`, `ten_en`, `ten_cn`, `name_vi`, `name_en`, `mota_vi`, `mota_en`, `tenkhongdau`, `quangcao`, `quangcao_thumb`, `links`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `noibat`, `noidung_vi`, `noidung_en`, `mota_cn`, `noidung_cn`, `ten_kr`, `mota_kr`, `noidung_kr`) VALUES
(1, 'du-an', 'Căn hộ chung cư', '', '', '', '', '', '', 'can-ho-chung-cu', '', '', '', '', '', '', '', '', 1, 1, 1583463720, 0, 1, '', '', '', '', '', '', ''),
(2, 'du-an', 'Office văn phòng', '', '', '', '', '', '', 'office-van-phong', '', '', '', '', '', '', '', '', 1, 1, 1583463729, 0, 1, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_baiviet_photo`
--

CREATE TABLE `table_baiviet_photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_baiviet` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(1024) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_baiviet_photo`
--

INSERT INTO `table_baiviet_photo` (`id`, `id_baiviet`, `type`, `photo`, `thumb`, `ten`, `mota`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, 15, 'du-an', 'a8-7896.jpg', 'a8-7896_340x270.jpg', '', '', 0, 1, 0, 0),
(2, 15, 'du-an', 'a12-9180.jpg', 'a12-9180_340x270.jpg', '', '', 0, 1, 0, 0),
(3, 15, 'du-an', 'a14-1238.jpg', 'a14-1238_340x270.jpg', '', '', 0, 1, 0, 0),
(4, 15, 'du-an', 'a15-3199.jpg', 'a15-3199_340x270.jpg', '', '', 0, 1, 0, 0),
(5, 14, 'du-an', 'product-814.jpg', 'product-814_340x270.jpg', '', '', 0, 1, 0, 0),
(6, 14, 'du-an', 'slider-7450.jpg', 'slider-7450_340x270.jpg', '', '', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_baiviet_sub`
--

CREATE TABLE `table_baiviet_sub` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_bgweb`
--

CREATE TABLE `table_bgweb` (
  `id` int(10) UNSIGNED NOT NULL,
  `re_peat` varchar(20) NOT NULL,
  `tren` varchar(20) NOT NULL,
  `trai` varchar(20) NOT NULL,
  `fix_bg` varchar(20) NOT NULL,
  `mauneen` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL DEFAULT '0',
  `ngaysua` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_chuyenkhoan`
--

CREATE TABLE `table_chuyenkhoan` (
  `id` int(10) UNSIGNED NOT NULL,
  `noibat` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_city_cat`
--

CREATE TABLE `table_city_cat` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `type` text NOT NULL,
  `gia` int(11) NOT NULL,
  `phivanchuyen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_city_duong`
--

CREATE TABLE `table_city_duong` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(10) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `stt` int(2) NOT NULL,
  `hienthi` int(2) NOT NULL,
  `ngaysua` int(10) NOT NULL,
  `ngaytao` int(10) NOT NULL,
  `type` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_city_item`
--

CREATE TABLE `table_city_item` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(10) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `stt` int(2) NOT NULL,
  `hienthi` int(2) NOT NULL,
  `ngaysua` int(10) NOT NULL,
  `ngaytao` int(10) NOT NULL,
  `type` text COLLATE latin1_general_ci NOT NULL,
  `gia` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_city_list`
--

CREATE TABLE `table_city_list` (
  `id` int(11) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `type` text NOT NULL,
  `phivanchuyen` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_com`
--

CREATE TABLE `table_com` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `ten_com` varchar(100) CHARACTER SET utf8 NOT NULL,
  `act_com` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `danhmuc` int(10) NOT NULL,
  `type` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `act` varchar(225) COLLATE latin1_general_ci NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `stt` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_company`
--

CREATE TABLE `table_company` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cat` varchar(2) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `ten_en` varchar(225) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ngaysua` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_component`
--

CREATE TABLE `table_component` (
  `id` int(12) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `template` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_contact`
--

CREATE TABLE `table_contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `ten` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `dienthoai` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `ghichu` text NOT NULL,
  `view` int(10) NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_counter`
--

CREATE TABLE `table_counter` (
  `id` int(11) NOT NULL,
  `tm` int(11) NOT NULL,
  `ip` varchar(16) NOT NULL DEFAULT '0.0.0.0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_download`
--

CREATE TABLE `table_download` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `file` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `url` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_gia`
--

CREATE TABLE `table_gia` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_vi` varchar(225) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `giatu` int(20) NOT NULL,
  `giaden` int(20) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ngaysua` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `phantram` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_giasearch`
--

CREATE TABLE `table_giasearch` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `giatu` int(11) NOT NULL,
  `giaden` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_httt`
--

CREATE TABLE `table_httt` (
  `id` int(11) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_info`
--

CREATE TABLE `table_info` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cat` varchar(2) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(225) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_en` varchar(225) NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ngaysua` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `link` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_info`
--

INSERT INTO `table_info` (`id`, `id_cat`, `type`, `ten_vi`, `tenkhongdau`, `mota_vi`, `noidung_vi`, `ten_cn`, `mota_cn`, `noidung_cn`, `ten_en`, `mota_en`, `noidung_en`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `link`, `video`, `ten_kr`, `mota_kr`, `noidung_kr`) VALUES
(1, '', 'gioi-thieu', 'Marcont design', 'marcont-design', '', '', '', '', '', '', '', '', '', '', '', 'gioithieu-4411.png', 'gioithieu-4411_645x440.png', 0, 0, 1583398894, 1584164219, '', '', '', '', ''),
(2, '', 'intro', 'BÌNH TÂN', 'binh-tan', 'HỢP TÁC XÃ CƠ KHÍ MỸ NGHỆ TỔNG HỢP', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia ab laboriosam consequuntur repudiandae error id nobis minima necessitatibus nesciunt molestias, doloremque debitis. Suscipit cumque quod facilis in impedit sequi illum.</p>\r\n', '', '', '', '', '', '', '', '', '', '1-5285.jpg', '1-5285_645x440.jpg', 0, 0, 1583748910, 1583749952, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_info_photo`
--

CREATE TABLE `table_info_photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_baiviet` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(1024) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_lkweb`
--

CREATE TABLE `table_lkweb` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `type` varchar(100) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `url` varchar(250) NOT NULL,
  `image` varchar(100) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `mota` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_lkweb`
--

INSERT INTO `table_lkweb` (`id`, `ten`, `photo`, `thumb`, `icon`, `type`, `stt`, `hienthi`, `url`, `image`, `ngaytao`, `ngaysua`, `mota`) VALUES
(1, 'fb', 'twitter-3195.png', 'twitter-3195_38.095238095238x40.png', '', 'mxh_top', 1, 1, 'http://demo120.ninavietnam.com.vn/', '', 1583476550, 1583741815, ''),
(2, 'gg', 'tw3-9305.png', 'tw3-9305_40x40.png', '', 'mxh_top', 1, 1, 'http://demo120.ninavietnam.com.vn/', '', 1583476566, 1583741807, ''),
(3, 'in', 'tw2-6628.png', 'tw2-6628_40x38.095238095238.png', '', 'mxh_top', 1, 1, 'in', '', 1583476612, 1583741798, ''),
(4, 'test web', 'fb1-9148.png', 'fb1-9148_40x40.png', '', 'mxh_top', 1, 1, 'http://demo120.ninavietnam.com.vn/', '', 1583476632, 1583741786, ''),
(5, 'Cty 01', 'bgdichvu2-9067.jpg', 'bgdichvu2-9067_180x100.jpg', '', 'doi-tac', 1, 1, 'http://demo120.ninavietnam.com.vn/', '', 1583736950, 0, ''),
(6, 'Fb', 'fb-2139.png', 'fb-2139_32x33.png', '', 'mxh_bottom', 1, 1, 'http://demo120.ninavietnam.com.vn/', '', 1584001471, 0, ''),
(7, 'gg', 'gg-5209.png', 'gg-5209_32x33.png', '', 'mxh_bottom', 1, 1, 'http://demo120.ninavietnam.com.vn/', '', 1584001485, 0, ''),
(8, 'twitter', 'tw-2676.png', 'tw-2676_32x33.png', '', 'mxh_bottom', 1, 1, 'http://demo120.ninavietnam.com.vn/', '', 1584001495, 0, ''),
(9, 'yt', 'yt-4589.png', 'yt-4589_32x33.png', '', 'mxh_bottom', 1, 1, 'http://demo120.ninavietnam.com.vn/', '', 1584001508, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `table_newsletter`
--

CREATE TABLE `table_newsletter` (
  `id` int(10) UNSIGNED NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `ten` varchar(225) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `dienthoai` varchar(50) NOT NULL,
  `tieude` varchar(200) NOT NULL,
  `noidung` longtext NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ngaysua` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `email` varchar(225) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_online`
--

CREATE TABLE `table_online` (
  `id` int(10) UNSIGNED NOT NULL,
  `session_id` varchar(255) NOT NULL,
  `time` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_order`
--

CREATE TABLE `table_order` (
  `id` int(11) NOT NULL,
  `madonhang` varchar(20) NOT NULL,
  `tinhthanh` varchar(100) NOT NULL,
  `id_quanhuyen` varchar(100) NOT NULL,
  `phivanchuyen` int(10) NOT NULL,
  `view` int(10) NOT NULL,
  `giagiam` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `httt` int(11) NOT NULL,
  `tonggia` int(11) NOT NULL,
  `noidung` text NOT NULL,
  `ghichu` text NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `goitruoc` int(11) NOT NULL,
  `xuathd` int(11) NOT NULL,
  `tencty` varchar(255) NOT NULL,
  `diachicty` text NOT NULL,
  `mast` varchar(255) NOT NULL,
  `diachigiao` longtext NOT NULL,
  `phitinh` int(11) NOT NULL,
  `id_thanhpho` int(12) NOT NULL,
  `pt_thanhtoan` varchar(255) NOT NULL,
  `pt_nhanhang` varchar(255) NOT NULL,
  `receiver` text NOT NULL,
  `sender` text NOT NULL,
  `payment` varchar(255) NOT NULL,
  `send_time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_order_detail`
--

CREATE TABLE `table_order_detail` (
  `id` int(11) NOT NULL,
  `id_size` varchar(30) NOT NULL,
  `id_color` varchar(30) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `madonhang` varchar(255) NOT NULL,
  `id_thanhvien` int(11) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `mau` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `phiship` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_page`
--

CREATE TABLE `table_page` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `noibat` int(11) NOT NULL,
  `banchay` int(11) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `khuyenmai_vi` text NOT NULL,
  `khuyenmai_en` text NOT NULL,
  `thongtin_vi` text NOT NULL,
  `thongtin_en` text NOT NULL,
  `baohanh_vi` varchar(255) NOT NULL,
  `baohanh_en` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `des_char` int(11) NOT NULL,
  `is_noindex` int(11) NOT NULL,
  `giaban` int(11) NOT NULL,
  `giacu` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `ten_cn` varchar(255) NOT NULL,
  `mota_en` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_en` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `bill_id` varchar(255) NOT NULL,
  `dienthoainhan` varchar(255) NOT NULL,
  `dienthoaigui` varchar(255) NOT NULL,
  `diachinhan_en` varchar(255) NOT NULL,
  `diachinhan_vi` varchar(255) NOT NULL,
  `diachigui_vi` varchar(255) NOT NULL,
  `diachigui_en` varchar(255) NOT NULL,
  `nguoinhan_en` varchar(255) NOT NULL,
  `nguoinhan_vi` varchar(255) NOT NULL,
  `nguoigui_en` varchar(255) NOT NULL,
  `nguoigui_vi` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL,
  `is_com` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_page_cat`
--

CREATE TABLE `table_page_cat` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_page_item`
--

CREATE TABLE `table_page_item` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_page_list`
--

CREATE TABLE `table_page_list` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `ten_cn` varchar(255) NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `quangcao` varchar(255) NOT NULL,
  `quangcao_thumb` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `noibat` int(11) NOT NULL,
  `noidung_vi` text NOT NULL,
  `noidung_en` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_page_photo`
--

CREATE TABLE `table_page_photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_page` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(1024) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_page_sub`
--

CREATE TABLE `table_page_sub` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_phanquyen`
--

CREATE TABLE `table_phanquyen` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_list` varchar(255) NOT NULL,
  `id_cat` varchar(255) NOT NULL,
  `id_item` varchar(255) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `ten` varchar(200) NOT NULL,
  `com` text NOT NULL,
  `table_vitri` varchar(225) NOT NULL,
  `xem` varchar(225) NOT NULL,
  `them` varchar(225) NOT NULL,
  `sua` varchar(225) NOT NULL,
  `xoa` varchar(225) NOT NULL,
  `soluong` varchar(200) NOT NULL,
  `mausac` varchar(50) NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL DEFAULT '0',
  `ngaysua` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_photo`
--

CREATE TABLE `table_photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_vitri` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `photo_vi` varchar(225) NOT NULL,
  `photo_en` varchar(225) NOT NULL,
  `photo_cn` varchar(255) NOT NULL,
  `photo_kr` varchar(255) NOT NULL,
  `thumb_vi` varchar(150) NOT NULL,
  `thumb_en` varchar(150) NOT NULL,
  `thumb_cn` varchar(255) NOT NULL,
  `thumb_kr` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `ten_cn` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `mota_cn` text NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `type` varchar(30) NOT NULL,
  `id_thanhvien` int(11) NOT NULL,
  `noidung_vi` text NOT NULL,
  `noidung_en` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_photo`
--

INSERT INTO `table_photo` (`id`, `id_vitri`, `id_list`, `photo_vi`, `photo_en`, `photo_cn`, `photo_kr`, `thumb_vi`, `thumb_en`, `thumb_cn`, `thumb_kr`, `thumb`, `ten_vi`, `ten_en`, `ten_cn`, `link`, `mota_vi`, `mota_en`, `mota_cn`, `stt`, `hienthi`, `type`, `id_thanhvien`, `noidung_vi`, `noidung_en`, `noidung_cn`, `ten_kr`, `mota_kr`, `noidung_kr`) VALUES
(1, 0, 0, 'logo-2498.png', '', '', '', 'logo-2498_170x120.png', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 'logo', 0, '', '', '', '', '', ''),
(2, 0, 0, '185556637631614.jpg', '', '', '', '185556637631614_1366x500.jpg', '', '', '', '', 'slider 2', '', '', '', '', '', '', 1, 1, 'slider', 0, '', '', '', '', '', ''),
(3, 0, 0, 'banner-5341.jpg', '', '', '', 'banner-5341_1366x168.jpg', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 'banner', 0, '', '', '', '', '', ''),
(5, 0, 0, '838577398843248.png', '', '', '', '838577398843248_1366x390.png', '', '', '', '', 'Qc1`', '', '', '', '', '', '', 1, 1, 'quangcao', 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_product`
--

CREATE TABLE `table_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `id_loaihinh` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `phi_hcm` int(10) NOT NULL,
  `phi_khac` int(10) NOT NULL,
  `id_dotuoi` int(11) NOT NULL,
  `id_gioitinh` int(11) NOT NULL,
  `tags` varchar(2000) NOT NULL,
  `rate` int(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `noibat` int(11) NOT NULL,
  `noibat1` int(11) NOT NULL,
  `noibat2` int(11) NOT NULL,
  `noibat3` int(11) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `link` text NOT NULL,
  `file` text NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `masp` varchar(255) NOT NULL,
  `soluong` int(10) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `khuyenmai_vi` text NOT NULL,
  `khuyenmai_en` text NOT NULL,
  `thongtin_vi` text NOT NULL,
  `thongtin_en` text NOT NULL,
  `baohanh_vi` varchar(255) NOT NULL,
  `baohanh_en` varchar(255) NOT NULL,
  `thongso_vi` text NOT NULL,
  `thongso_en` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `des_char` int(11) NOT NULL,
  `is_noindex` int(11) NOT NULL,
  `giaban` bigint(11) NOT NULL,
  `giacu` bigint(11) NOT NULL,
  `giaship` int(11) NOT NULL,
  `hotro` int(11) NOT NULL,
  `tinhtrang` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `ten_cn` varchar(255) NOT NULL,
  `mota_en` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_en` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `id_thanhvien` int(11) NOT NULL,
  `hangsudung` varchar(255) NOT NULL,
  `trongluong` varchar(255) NOT NULL,
  `xuatxu` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `color` text NOT NULL,
  `price_bycolor` text NOT NULL,
  `luuy` varchar(255) NOT NULL,
  `diachi` text NOT NULL,
  `dientich` text NOT NULL,
  `options` varchar(198) NOT NULL,
  `variables` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_product`
--

INSERT INTO `table_product` (`id`, `id_cat`, `id_list`, `id_item`, `id_loaihinh`, `id_sub`, `phi_hcm`, `phi_khac`, `id_dotuoi`, `id_gioitinh`, `tags`, `rate`, `type`, `noibat`, `noibat1`, `noibat2`, `noibat3`, `ten_vi`, `photo`, `link`, `file`, `thumb`, `masp`, `soluong`, `tenkhongdau`, `khuyenmai_vi`, `khuyenmai_en`, `thongtin_vi`, `thongtin_en`, `baohanh_vi`, `baohanh_en`, `thongso_vi`, `thongso_en`, `title`, `keywords`, `description`, `des_char`, `is_noindex`, `giaban`, `giacu`, `giaship`, `hotro`, `tinhtrang`, `mota_vi`, `noidung_vi`, `ten_en`, `ten_cn`, `mota_en`, `mota_cn`, `noidung_en`, `noidung_cn`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `luotxem`, `id_thanhvien`, `hangsudung`, `trongluong`, `xuatxu`, `size`, `color`, `price_bycolor`, `luuy`, `diachi`, `dientich`, `options`, `variables`, `stock`, `ten_kr`, `mota_kr`, `noidung_kr`) VALUES
(11, 0, 11, 0, 0, 0, 0, 0, 0, 0, '', 0, 'san-pham', 1, 0, 0, 0, 'Sanr phẩm 03', '', '', '', '', '', 0, 'sanr-pham-03', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1584416226, 0, 1, 0, '', '', '', '', '', '', '', '', '', '', 'null', 0, '', '', ''),
(12, 0, 12, 0, 0, 0, 0, 0, 0, 0, '', 0, 'san-pham', 1, 0, 0, 0, 'Sản phẩm 04', '4-1121.jpg', '', '', '4-1121_191.64511494253x280.jpg', '', 0, 'san-pham-04', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1584416427, 0, 8, 0, '', '', '', '', '', '', '', '', '', '', 'null', 0, '', '', ''),
(10, 0, 11, 0, 0, 0, 0, 0, 0, 0, '', 0, 'san-pham', 1, 0, 0, 0, 'Sản phẩm 01', '2-7831.jpg', '', '', '2-7831_380x235.94192507618.jpg', '', 0, 'san-pham-01', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1584416198, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 'null', 0, '', '', ''),
(13, 0, 12, 0, 0, 0, 0, 0, 0, 0, '', 0, 'san-pham', 1, 0, 0, 0, 'Sản phẩm 04', '4-6292.jpg', '', '', '4-6292_191.64511494253x280.jpg', '', 0, 'san-pham-04', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1584416428, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 'null', 0, '', '', ''),
(14, 0, 12, 0, 0, 0, 0, 0, 0, 0, '', 0, 'san-pham', 1, 0, 0, 0, 'Sản phẩm 04', '4-5802.jpg', '', '', '4-5802_191.64511494253x280.jpg', '', 0, 'san-pham-04', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1584416429, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 'null', 0, '', '', ''),
(15, 0, 12, 0, 0, 0, 0, 0, 0, 0, '', 0, 'san-pham', 1, 0, 0, 0, 'Sản phẩm 04', '4-8017.jpg', '', '', '4-8017_191.64511494253x280.jpg', '', 0, 'san-pham-04', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1584416430, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 'null', 0, '', '', ''),
(16, 0, 12, 0, 0, 0, 0, 0, 0, 0, '', 0, 'san-pham', 1, 0, 0, 0, 'Sản phẩm 04', '4-630.jpg', '', '', '4-630_191.64511494253x280.jpg', '', 0, 'san-pham-04', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1584416431, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 'null', 0, '', '', ''),
(17, 0, 12, 0, 0, 0, 0, 0, 0, 0, '', 0, 'san-pham', 1, 0, 0, 0, 'Sản phẩm 04', '4-8815.jpg', '', '', '4-8815_191.64511494253x280.jpg', '', 0, 'san-pham-04', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1584416433, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 'null', 0, '', '', ''),
(18, 0, 12, 0, 0, 0, 0, 0, 0, 0, '', 0, 'san-pham', 1, 0, 0, 0, 'Sản phẩm 04', '4-7534.jpg', '', '', '4-7534_191.64511494253x280.jpg', '', 0, 'san-pham-04', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1584416434, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 'null', 0, '', '', ''),
(19, 0, 12, 0, 0, 0, 0, 0, 0, 0, '', 0, 'san-pham', 1, 0, 0, 0, 'Sản phẩm 04', '4-8241.jpg', '', '', '4-8241_191.64511494253x280.jpg', '', 0, 'san-pham-04', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1584416435, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 'null', 0, '', '', ''),
(20, 0, 12, 0, 0, 0, 0, 0, 0, 0, '', 0, 'san-pham', 1, 0, 0, 0, 'Sản phẩm 04', '4-2167.jpg', '', '', '4-2167_191.64511494253x280.jpg', '', 0, 'san-pham-04', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', 1, 1, 1584416436, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', 'null', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_product_cat`
--

CREATE TABLE `table_product_cat` (
  `id` int(11) NOT NULL,
  `noibat` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `ten_cn` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_product_cat`
--

INSERT INTO `table_product_cat` (`id`, `noibat`, `id_list`, `type`, `ten_vi`, `ten_en`, `ten_cn`, `tenkhongdau`, `mota`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `mota_vi`, `noidung_vi`, `mota_en`, `noidung_en`, `mota_cn`, `noidung_cn`, `ten_kr`, `mota_kr`, `noidung_kr`) VALUES
(1, 1, 11, 'san-pham', 'Pcat 2', '', '', 'pcat-2', '', '', '', '', '', '', 1, 1, 1584593258, 0, '', '', '', '', '', '', '', '', ''),
(2, 1, 11, 'san-pham', 'Pcat 3', '', '', 'pcat-3', '', '', '', '', '', '', 1, 1, 1584593265, 0, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_product_item`
--

CREATE TABLE `table_product_item` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(10) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_product_list`
--

CREATE TABLE `table_product_list` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `noibat` int(10) NOT NULL,
  `noibat2` int(10) NOT NULL,
  `noibat1` int(10) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `ten_cn` varchar(255) NOT NULL,
  `name_vi` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `quangcao` varchar(255) NOT NULL,
  `quangcao_thumb` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `noidung_vi` text NOT NULL,
  `noidung_en` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_product_list`
--

INSERT INTO `table_product_list` (`id`, `type`, `noibat`, `noibat2`, `noibat1`, `ten_vi`, `ten_en`, `ten_cn`, `name_vi`, `name_en`, `mota_vi`, `mota_en`, `tenkhongdau`, `quangcao`, `quangcao_thumb`, `links`, `title`, `keywords`, `description`, `photo`, `thumb`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `noidung_vi`, `noidung_en`, `mota_cn`, `noidung_cn`, `ten_kr`, `mota_kr`, `noidung_kr`) VALUES
(11, 'san-pham', 1, 0, 0, 'Món ăn khai vị', '', '', '', '', '', '', 'mon-an-khai-vi', '', '', '', '', '', '', '', '', 1, 1, 1584416110, 0, '', '', '', '', '', '', ''),
(12, 'san-pham', 1, 0, 0, 'Món ăn tự chọn', '', '', '', '', '', '', 'mon-an-tu-chon', '', '', '', '', '', '', '', '', 1, 1, 1584416124, 0, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_product_photo`
--

CREATE TABLE `table_product_photo` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(1024) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_product_photo`
--

INSERT INTO `table_product_photo` (`id`, `id_product`, `type`, `photo`, `thumb`, `ten`, `mota`, `stt`, `hienthi`, `ngaytao`, `ngaysua`) VALUES
(1, 0, 'san-pham', 'bgdichvu-9597.jpg', 'bgdichvu-9597_380x191.11273792094.jpg', '', '', 0, 1, 0, 0),
(2, 0, 'san-pham', 'bgdichvu-8585.jpg', 'bgdichvu-8585_380x191.11273792094.jpg', '', '', 0, 1, 0, 0),
(3, 0, 'san-pham', 'bgdichvu-1867.jpg', 'bgdichvu-1867_380x191.11273792094.jpg', '', '', 0, 1, 0, 0),
(4, 0, 'san-pham', 'bgdichvu-1813.jpg', 'bgdichvu-1813_380x191.11273792094.jpg', '', '', 0, 1, 0, 0),
(5, 0, 'san-pham', 'bgdichvu-1479.jpg', 'bgdichvu-1479_380x191.11273792094.jpg', '', '', 0, 1, 0, 0),
(6, 0, 'san-pham', 'bgdichvu-9344.jpg', 'bgdichvu-9344_380x191.11273792094.jpg', '', '', 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `table_product_sub`
--

CREATE TABLE `table_product_sub` (
  `id` int(11) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_cat` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_quan`
--

CREATE TABLE `table_quan` (
  `id` int(11) NOT NULL,
  `ten_vi` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `id_list` int(11) NOT NULL DEFAULT '0',
  `stt` int(10) NOT NULL DEFAULT '1',
  `type` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `mota_vi` text COLLATE latin1_general_ci NOT NULL,
  `noidung_vi` text COLLATE latin1_general_ci NOT NULL,
  `ten_en` text COLLATE latin1_general_ci NOT NULL,
  `mota_en` text COLLATE latin1_general_ci NOT NULL,
  `noidung_en` text COLLATE latin1_general_ci NOT NULL,
  `ten_cn` text COLLATE latin1_general_ci NOT NULL,
  `mota_cn` text COLLATE latin1_general_ci NOT NULL,
  `noidung_cn` text COLLATE latin1_general_ci NOT NULL,
  `ten_kr` text COLLATE latin1_general_ci NOT NULL,
  `mota_kr` text COLLATE latin1_general_ci NOT NULL,
  `noidung_kr` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_seopage`
--

CREATE TABLE `table_seopage` (
  `id` int(11) NOT NULL,
  `type` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `com` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `h1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `h2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `h3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `h4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `h5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `h6` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stt` int(11) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumb` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_setting`
--

CREATE TABLE `table_setting` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `whatapp` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `zalo` varchar(255) NOT NULL,
  `viber` varchar(255) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `hotline` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `toado` text NOT NULL,
  `scriptcode` text NOT NULL,
  `bodycode` text NOT NULL,
  `sanpham` int(3) NOT NULL,
  `diachi_en` varchar(255) NOT NULL,
  `diachi_vi` varchar(255) NOT NULL,
  `ten_vi` varchar(255) NOT NULL,
  `slogan_en` varchar(255) NOT NULL,
  `slogan_vi` varchar(255) NOT NULL,
  `ten_en` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_setting`
--

INSERT INTO `table_setting` (`id`, `title`, `keywords`, `description`, `youtube`, `whatapp`, `facebook`, `zalo`, `viber`, `dienthoai`, `hotline`, `email`, `website`, `toado`, `scriptcode`, `bodycode`, `sanpham`, `diachi_en`, `diachi_vi`, `ten_vi`, `slogan_en`, `slogan_vi`, `ten_en`) VALUES
(1, 'Công Ty TNHH SX TM DV In Ấn Bao Bì Quà Tặng Đại Thanh Bình', '', '', '', '', 'https://www.facebook.com/sangothuysi/', '0796877786', '', '0796877786', '0796877786', 'noithatminhnhat16@gmail.com', 'minhnhatnoithat.com', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1647.5153988607092!2d106.62873007125643!3d10.851501911836852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752989c38c3209%3A0xe50c741244b6158e!2sDragon%20Park!5e0!3m2!1sen!2s!4v1583736555461!5m2!1sen!2s\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\"></iframe>', '', '', 16, '', 'F1/35Y Ấp 6,Vĩnh Lộc A, Bình Chánh', 'NỘI THẤT MINH NHẬT', '', ' Lorem ipsum dolor sit amet, consectetur ad', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_slider`
--

CREATE TABLE `table_slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_vitri` int(11) NOT NULL,
  `slider_vi` varchar(225) NOT NULL,
  `slider_en` varchar(225) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `com` varchar(30) NOT NULL,
  `noidung_vi` text NOT NULL,
  `noidung_en` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_star`
--

CREATE TABLE `table_star` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_product` int(10) NOT NULL,
  `sao` float NOT NULL,
  `solan` int(10) NOT NULL,
  `ten_vi` varchar(225) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `giatu` int(20) NOT NULL,
  `giaden` int(20) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ngaysua` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_tags`
--

CREATE TABLE `table_tags` (
  `id` int(11) NOT NULL,
  `ten_vi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hienthi` int(2) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `noibat` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `keywords` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1024) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `stt` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_thanhvien`
--

CREATE TABLE `table_thanhvien` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `bcoin` int(11) NOT NULL DEFAULT '0',
  `tichluy` int(11) NOT NULL DEFAULT '0',
  `dienthoai` varchar(225) NOT NULL,
  `ngaysinh` text NOT NULL,
  `diachi` text NOT NULL,
  `sex` text NOT NULL,
  `photo` varchar(225) NOT NULL,
  `id_district` int(11) NOT NULL,
  `id_city` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `ngaydangky` int(11) NOT NULL,
  `lastlogin` int(11) NOT NULL,
  `stt` int(11) NOT NULL,
  `randomkey` varchar(225) NOT NULL,
  `limit_time` int(11) NOT NULL,
  `ngaytao` int(11) NOT NULL,
  `facebook_auth_id` varchar(225) NOT NULL,
  `google_auth_id` varchar(225) NOT NULL,
  `com` varchar(225) NOT NULL,
  `hienthi` int(11) NOT NULL,
  `block_user` int(11) NOT NULL DEFAULT '0',
  `mathanhvien` text NOT NULL,
  `thanhvien` text NOT NULL,
  `nguoigt` text NOT NULL,
  `login_session` text NOT NULL,
  `coin` text NOT NULL,
  `user_token` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_thanhvien`
--

INSERT INTO `table_thanhvien` (`id`, `username`, `email`, `password`, `ten`, `bcoin`, `tichluy`, `dienthoai`, `ngaysinh`, `diachi`, `sex`, `photo`, `id_district`, `id_city`, `active`, `ngaydangky`, `lastlogin`, `stt`, `randomkey`, `limit_time`, `ngaytao`, `facebook_auth_id`, `google_auth_id`, `com`, `hienthi`, `block_user`, `mathanhvien`, `thanhvien`, `nguoigt`, `login_session`, `coin`, `user_token`) VALUES
(3, '', 'vohoangtu0409@gmail.com', '70de75abb9c77a5fbc8c1ae7f9ad117c', 'Võ Hoàng Tú', 0, 0, '09875757325', '', 'q12', '1', '', 0, 0, 0, 1585110061, 1585126433, 0, '', 0, 0, '', '', '', 1, 0, 'TVIWZ9Z08I', '', '', 'c8ff9d6ba91b1ad53e075f9a7510af17', '', 'f783906c19e84b7874d47c2a968125d3');

-- --------------------------------------------------------

--
-- Table structure for table `table_thanhvien_limit`
--

CREATE TABLE `table_thanhvien_limit` (
  `login_ip` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `login_attempts` varchar(255) NOT NULL,
  `attempt_time` varchar(255) NOT NULL,
  `locked_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_thanhvien_limit`
--

INSERT INTO `table_thanhvien_limit` (`login_ip`, `id`, `login_attempts`, `attempt_time`, `locked_time`) VALUES
('127.0.0.1', 1, '0', '1585104399', '0'),
('192.168.1.41', 2, '3', '1585104503', '0'),
('192.168.1.2', 3, '2', '1585104550', '0');

-- --------------------------------------------------------

--
-- Table structure for table `table_thanhvien_log`
--

CREATE TABLE `table_thanhvien_log` (
  `id_user` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `timelog` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_thanhvien_log`
--

INSERT INTO `table_thanhvien_log` (`id_user`, `ip`, `timelog`, `user_agent`, `id`) VALUES
(3, '127.0.0.1', '1583379480', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 1),
(3, '127.0.0.1', '1583462827', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 2),
(3, '127.0.0.1', '1583550369', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 3),
(3, '127.0.0.1', '1583722898', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 4),
(3, '127.0.0.1', '1583747763', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 5),
(3, '127.0.0.1', '1583916186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 6),
(3, '127.0.0.1', '1583980256', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 7),
(3, '127.0.0.1', '1584148731', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 8),
(3, '127.0.0.1', '1584327557', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 9),
(3, '127.0.0.1', '1584410601', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 10),
(3, '127.0.0.1', '1584580209', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 11),
(3, '127.0.0.1', '1584928208', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 12),
(3, '127.0.0.1', '1585101657', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 13),
(3, '127.0.0.1', '1585110096', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 14),
(3, '127.0.0.1', '1585110721', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 15),
(3, '127.0.0.1', '1585110804', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 16),
(3, '127.0.0.1', '1585116551', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 17),
(3, '127.0.0.1', '1585116781', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 18),
(3, '127.0.0.1', '1585119582', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 19),
(3, '127.0.0.1', '1585119586', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 20),
(3, '127.0.0.1', '1585124576', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 21),
(3, '127.0.0.1', '1585126433', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 22);

-- --------------------------------------------------------

--
-- Table structure for table `table_thuoctinh`
--

CREATE TABLE `table_thuoctinh` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_vi` varchar(225) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `id_list` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `mau` varchar(255) NOT NULL,
  `giagiam` varchar(255) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `diem` int(11) NOT NULL,
  `soluongnhap` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `noibat` int(11) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ngaysua` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `id_thanhvien` int(11) NOT NULL,
  `madonhang` varchar(255) NOT NULL,
  `phivanchuyen` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `gioitinh` varchar(255) NOT NULL,
  `dienthoai` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noidung` text NOT NULL,
  `goitruoc` int(11) NOT NULL,
  `xuathd` int(11) NOT NULL,
  `tencty` varchar(255) NOT NULL,
  `diachicty` varchar(255) NOT NULL,
  `mast` varchar(255) NOT NULL,
  `diachigiao` varchar(255) NOT NULL,
  `phitinh` int(11) NOT NULL,
  `tonggia` int(11) NOT NULL,
  `mota_vi` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `mota_en` text NOT NULL,
  `noidung_en` text NOT NULL,
  `ten_cn` text NOT NULL,
  `mota_cn` text NOT NULL,
  `noidung_cn` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_tinh`
--

CREATE TABLE `table_tinh` (
  `id` int(11) NOT NULL,
  `ten_vi` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `stt` int(10) NOT NULL,
  `type` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `mota_vi` text COLLATE latin1_general_ci NOT NULL,
  `noidung_vi` text COLLATE latin1_general_ci NOT NULL,
  `ten_en` text COLLATE latin1_general_ci NOT NULL,
  `mota_en` text COLLATE latin1_general_ci NOT NULL,
  `noidung_en` text COLLATE latin1_general_ci NOT NULL,
  `ten_cn` text COLLATE latin1_general_ci NOT NULL,
  `mota_cn` text COLLATE latin1_general_ci NOT NULL,
  `noidung_cn` text COLLATE latin1_general_ci NOT NULL,
  `ten_kr` text COLLATE latin1_general_ci NOT NULL,
  `mota_kr` text COLLATE latin1_general_ci NOT NULL,
  `noidung_kr` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `table_tinhtrang`
--

CREATE TABLE `table_tinhtrang` (
  `id` int(11) NOT NULL,
  `trangthai` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_title`
--

CREATE TABLE `table_title` (
  `id` int(10) NOT NULL,
  `ten` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_toado`
--

CREATE TABLE `table_toado` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_tinh` int(11) NOT NULL,
  `id_quan` int(11) NOT NULL,
  `id_hethong` int(11) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `ten` varchar(225) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `toado` text NOT NULL,
  `noidung` longtext NOT NULL,
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ngaysua` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `dienthoai` varchar(225) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `ten_vi` varchar(300) NOT NULL,
  `noidung_vi` text NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `ten` varchar(225) NOT NULL,
  `dienthoai` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `diachi` varchar(225) NOT NULL,
  `sex` tinyint(1) NOT NULL DEFAULT '0',
  `nick_yahoo` varchar(225) NOT NULL,
  `nick_skype` varchar(225) NOT NULL,
  `congty` varchar(225) NOT NULL,
  `country` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `quyen` varchar(255) NOT NULL,
  `role` tinyint(3) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `com` varchar(225) NOT NULL DEFAULT 'user',
  `login_session` varchar(255) DEFAULT NULL,
  `lastlogin` varchar(255) DEFAULT NULL,
  `user_token` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id`, `username`, `password`, `ten`, `dienthoai`, `email`, `diachi`, `sex`, `nick_yahoo`, `nick_skype`, `congty`, `country`, `city`, `quyen`, `role`, `hienthi`, `com`, `login_session`, `lastlogin`, `user_token`) VALUES
(3, 'admin', 'f2797aede68b3c6bde571a57f10382c7', '', '', '', '', 0, '', '', '', '', '', '', 3, 1, 'user', 'bbcad5364921766c86d5c0e4890e299a', '1585110096', 'd8b06c9ecad67c868f3e7f3e63290f80');

-- --------------------------------------------------------

--
-- Table structure for table `table_user_limit`
--

CREATE TABLE `table_user_limit` (
  `login_ip` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `login_attempts` varchar(255) NOT NULL,
  `attempt_time` varchar(255) NOT NULL,
  `locked_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_user_limit`
--

INSERT INTO `table_user_limit` (`login_ip`, `id`, `login_attempts`, `attempt_time`, `locked_time`) VALUES
('127.0.0.1', 1, '0', '1585104399', '0'),
('192.168.1.41', 2, '3', '1585104503', '0'),
('192.168.1.2', 3, '2', '1585104550', '0');

-- --------------------------------------------------------

--
-- Table structure for table `table_user_log`
--

CREATE TABLE `table_user_log` (
  `id_user` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `timelog` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_user_log`
--

INSERT INTO `table_user_log` (`id_user`, `ip`, `timelog`, `user_agent`, `id`) VALUES
(3, '127.0.0.1', '1583379480', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.122 Safari/537.36', 1),
(3, '127.0.0.1', '1583462827', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 2),
(3, '127.0.0.1', '1583550369', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 3),
(3, '127.0.0.1', '1583722898', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 4),
(3, '127.0.0.1', '1583747763', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 5),
(3, '127.0.0.1', '1583916186', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 6),
(3, '127.0.0.1', '1583980256', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 7),
(3, '127.0.0.1', '1584148731', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 8),
(3, '127.0.0.1', '1584327557', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 9),
(3, '127.0.0.1', '1584410601', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 10),
(3, '127.0.0.1', '1584580209', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.132 Safari/537.36', 11),
(3, '127.0.0.1', '1584928208', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 12),
(3, '127.0.0.1', '1585101657', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 13),
(3, '127.0.0.1', '1585110096', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 14),
(3, '127.0.0.1', '1585110721', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 15),
(3, '127.0.0.1', '1585110804', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.149 Safari/537.36', 16);

-- --------------------------------------------------------

--
-- Table structure for table `table_video`
--

CREATE TABLE `table_video` (
  `id` int(10) UNSIGNED NOT NULL,
  `noibat` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `photo` varchar(225) NOT NULL,
  `thumb` varchar(225) NOT NULL,
  `ten_vi` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tenkhongdau` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `keywords` varchar(1024) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `ten_en` varchar(255) NOT NULL,
  `ten_cn` varchar(255) NOT NULL,
  `stt` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `hienthi` tinyint(1) NOT NULL DEFAULT '1',
  `ngaytao` int(11) NOT NULL,
  `ngaysua` int(11) NOT NULL,
  `luotxem` int(11) NOT NULL,
  `noidung_cn` text NOT NULL,
  `noidung_en` text NOT NULL,
  `noidung_vi` text NOT NULL,
  `mota_cn` text NOT NULL,
  `mota_en` text NOT NULL,
  `mota_vi` text NOT NULL,
  `ten_kr` text NOT NULL,
  `mota_kr` text NOT NULL,
  `noidung_kr` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_video`
--

INSERT INTO `table_video` (`id`, `noibat`, `type`, `photo`, `thumb`, `ten_vi`, `tenkhongdau`, `links`, `title`, `keywords`, `description`, `ten_en`, `ten_cn`, `stt`, `hienthi`, `ngaytao`, `ngaysua`, `luotxem`, `noidung_cn`, `noidung_en`, `noidung_vi`, `mota_cn`, `mota_en`, `mota_vi`, `ten_kr`, `mota_kr`, `noidung_kr`) VALUES
(1, 0, 'video', '', '', 'Healing Music that The Summer Story is About To Begin', 'healing-music-that-the-summer-story-is-about-to-begin', 'https://www.youtube.com/watch?v=2iG-ZtB8RD4', '', '', '', '', '', 1, 1, 1583402850, 0, 0, '', '', '', '', '', '', '', '', ''),
(2, 0, 'video', '', '', 'Serenade [Healing Music] Beautiful and Painful, Nostalgic Music', 'serenade-healing-music-beautiful-and-painful-nostalgic-music', 'https://www.youtube.com/watch?v=ph5KiaLBFj0', '', '', '', '', '', 1, 1, 1583402936, 0, 0, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_yahoo`
--

CREATE TABLE `table_yahoo` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zalo` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `skype` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `viber` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `dienthoai` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `stt` int(3) NOT NULL,
  `hienthi` int(2) NOT NULL,
  `ngaytao` int(10) NOT NULL,
  `ngaysua` int(10) NOT NULL,
  `link` text COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_album`
--
ALTER TABLE `table_album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_album_list`
--
ALTER TABLE `table_album_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_album_photo`
--
ALTER TABLE `table_album_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_baiviet`
--
ALTER TABLE `table_baiviet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_baiviet_cat`
--
ALTER TABLE `table_baiviet_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_baiviet_item`
--
ALTER TABLE `table_baiviet_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_baiviet_list`
--
ALTER TABLE `table_baiviet_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_baiviet_photo`
--
ALTER TABLE `table_baiviet_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_baiviet_sub`
--
ALTER TABLE `table_baiviet_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_bgweb`
--
ALTER TABLE `table_bgweb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_chuyenkhoan`
--
ALTER TABLE `table_chuyenkhoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_city_cat`
--
ALTER TABLE `table_city_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_city_duong`
--
ALTER TABLE `table_city_duong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_city_item`
--
ALTER TABLE `table_city_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_city_list`
--
ALTER TABLE `table_city_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_com`
--
ALTER TABLE `table_com`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_company`
--
ALTER TABLE `table_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_component`
--
ALTER TABLE `table_component`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_contact`
--
ALTER TABLE `table_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_counter`
--
ALTER TABLE `table_counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_download`
--
ALTER TABLE `table_download`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_gia`
--
ALTER TABLE `table_gia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_giasearch`
--
ALTER TABLE `table_giasearch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_httt`
--
ALTER TABLE `table_httt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_info`
--
ALTER TABLE `table_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_info_photo`
--
ALTER TABLE `table_info_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_lkweb`
--
ALTER TABLE `table_lkweb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_newsletter`
--
ALTER TABLE `table_newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_online`
--
ALTER TABLE `table_online`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_order`
--
ALTER TABLE `table_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_order_detail`
--
ALTER TABLE `table_order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_page`
--
ALTER TABLE `table_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_page_cat`
--
ALTER TABLE `table_page_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_page_item`
--
ALTER TABLE `table_page_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_page_list`
--
ALTER TABLE `table_page_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_page_photo`
--
ALTER TABLE `table_page_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_page_sub`
--
ALTER TABLE `table_page_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_phanquyen`
--
ALTER TABLE `table_phanquyen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_photo`
--
ALTER TABLE `table_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product`
--
ALTER TABLE `table_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_cat`
--
ALTER TABLE `table_product_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_item`
--
ALTER TABLE `table_product_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_list`
--
ALTER TABLE `table_product_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_photo`
--
ALTER TABLE `table_product_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_product_sub`
--
ALTER TABLE `table_product_sub`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_quan`
--
ALTER TABLE `table_quan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_province` (`id_list`);

--
-- Indexes for table `table_seopage`
--
ALTER TABLE `table_seopage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_setting`
--
ALTER TABLE `table_setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_slider`
--
ALTER TABLE `table_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_star`
--
ALTER TABLE `table_star`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_tags`
--
ALTER TABLE `table_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_thanhvien`
--
ALTER TABLE `table_thanhvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_thanhvien_limit`
--
ALTER TABLE `table_thanhvien_limit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_thanhvien_log`
--
ALTER TABLE `table_thanhvien_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_thuoctinh`
--
ALTER TABLE `table_thuoctinh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_tinh`
--
ALTER TABLE `table_tinh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_tinhtrang`
--
ALTER TABLE `table_tinhtrang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_title`
--
ALTER TABLE `table_title`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_toado`
--
ALTER TABLE `table_toado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_user_limit`
--
ALTER TABLE `table_user_limit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_user_log`
--
ALTER TABLE `table_user_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_video`
--
ALTER TABLE `table_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_yahoo`
--
ALTER TABLE `table_yahoo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `table_album`
--
ALTER TABLE `table_album`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `table_album_list`
--
ALTER TABLE `table_album_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_album_photo`
--
ALTER TABLE `table_album_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_baiviet`
--
ALTER TABLE `table_baiviet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `table_baiviet_cat`
--
ALTER TABLE `table_baiviet_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_baiviet_item`
--
ALTER TABLE `table_baiviet_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_baiviet_list`
--
ALTER TABLE `table_baiviet_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_baiviet_photo`
--
ALTER TABLE `table_baiviet_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `table_baiviet_sub`
--
ALTER TABLE `table_baiviet_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_bgweb`
--
ALTER TABLE `table_bgweb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_chuyenkhoan`
--
ALTER TABLE `table_chuyenkhoan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_city_cat`
--
ALTER TABLE `table_city_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_city_duong`
--
ALTER TABLE `table_city_duong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_city_item`
--
ALTER TABLE `table_city_item`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_city_list`
--
ALTER TABLE `table_city_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_com`
--
ALTER TABLE `table_com`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_company`
--
ALTER TABLE `table_company`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_component`
--
ALTER TABLE `table_component`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_contact`
--
ALTER TABLE `table_contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_counter`
--
ALTER TABLE `table_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_download`
--
ALTER TABLE `table_download`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_gia`
--
ALTER TABLE `table_gia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_giasearch`
--
ALTER TABLE `table_giasearch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_httt`
--
ALTER TABLE `table_httt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_info`
--
ALTER TABLE `table_info`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_info_photo`
--
ALTER TABLE `table_info_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_lkweb`
--
ALTER TABLE `table_lkweb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `table_newsletter`
--
ALTER TABLE `table_newsletter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_online`
--
ALTER TABLE `table_online`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_order`
--
ALTER TABLE `table_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_order_detail`
--
ALTER TABLE `table_order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_page`
--
ALTER TABLE `table_page`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_page_cat`
--
ALTER TABLE `table_page_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_page_item`
--
ALTER TABLE `table_page_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_page_list`
--
ALTER TABLE `table_page_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_page_photo`
--
ALTER TABLE `table_page_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_page_sub`
--
ALTER TABLE `table_page_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_phanquyen`
--
ALTER TABLE `table_phanquyen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_photo`
--
ALTER TABLE `table_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_product`
--
ALTER TABLE `table_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `table_product_cat`
--
ALTER TABLE `table_product_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_product_item`
--
ALTER TABLE `table_product_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_product_list`
--
ALTER TABLE `table_product_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table_product_photo`
--
ALTER TABLE `table_product_photo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_product_sub`
--
ALTER TABLE `table_product_sub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_quan`
--
ALTER TABLE `table_quan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_seopage`
--
ALTER TABLE `table_seopage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_setting`
--
ALTER TABLE `table_setting`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_slider`
--
ALTER TABLE `table_slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_star`
--
ALTER TABLE `table_star`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_tags`
--
ALTER TABLE `table_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_thanhvien`
--
ALTER TABLE `table_thanhvien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_thanhvien_limit`
--
ALTER TABLE `table_thanhvien_limit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_thanhvien_log`
--
ALTER TABLE `table_thanhvien_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `table_thuoctinh`
--
ALTER TABLE `table_thuoctinh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_tinh`
--
ALTER TABLE `table_tinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_tinhtrang`
--
ALTER TABLE `table_tinhtrang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_title`
--
ALTER TABLE `table_title`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_toado`
--
ALTER TABLE `table_toado`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `table_user_limit`
--
ALTER TABLE `table_user_limit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_user_log`
--
ALTER TABLE `table_user_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `table_video`
--
ALTER TABLE `table_video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `table_yahoo`
--
ALTER TABLE `table_yahoo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

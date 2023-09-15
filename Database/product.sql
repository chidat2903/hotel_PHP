-- CREATE TABLE `products` (
--   `id_hotel` int(11) NOT NULL,
--   `hotel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
--   `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
--   `id` int(11) NOT NULL,
--   `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
--   `category_id` int(11) NOT NULL,
--   `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
--   `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
--   `price` float NOT NULL,
--   `saleprice` float NOT NULL,
--   `acreage` int NOT NULL,
--   `created` date NOT NULL,
--   `quantity` int(11) NOT NULL,
--   `keyword` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
--   `status` int(11) DEFAULT NULL
-- ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_hotel`, `hotel`, `img`,`id`, `name`, `category_id`, `image`, `description`, `price`, `saleprice`, `acreage`, `quantity`, `keyword`, `status`) VALUES
(1, 'Poseidon Luxury Đà Nẵng', '../IMG/Danang/dn1_1654683350.jpg',1, 'Phòng Superior Twin', 1, '../IMG/Danang/phòng1.jpg', '1 giường đơn, 1 giường king size', 1440000 , 0, '33m²', 5, '', 0),
(2, 'Poseidon Luxury Đà Nẵng', '../IMG/Danang/dn1_1654683350.jpg',2, 'Phòng Deluxe Twin', 1, '../IMG/Danang/phòng2.jpg', '2 giường đơn', 1843200, 0, '33m²', 4, '', 0),
(3, 'Poseidon Luxury Đà Nẵng', '../IMG/Danang/dn1_1654683350.jpg',3, 'Phòng Deluxe King', 1, '../IMG/Danang/phòng3.jpg', '1 giường king size', 1843200, 0, '33m²', 5, '', 0),
(1, 'Poseidon Grand Đà Nẵng', '../IMG/Danang/muong-thanh-grand-dn_1686538211.jpg',4, 'Phòng Deluxe Twin Pro', 1, '../IMG/Danang/phòng4.jpg', '2 giường đơn', 2016000, 0, '33m²', 4, '', 0),
(2, 'Poseidon Grand Đà Nẵng', '../IMG/Danang/muong-thanh-grand-dn_1686538211.jpg',5, 'Phòng Superior King', 1, '../IMG/Danang/phòng5.jpg', '1 giường king size', 1496000, 0, '25m²', 5, '', 0),
(3, 'Poseidon Grand Đà Nẵng', '../IMG/Danang/muong-thanh-grand-dn_1686538211.jpg',6, 'Phòng Superior Twin', 1, '../IMG/Danang/phòng6.jpg', '2 giường đơn', 1496000, 0, '25m²', 4, '', 0),
(1, 'Poseidon Luxury Sông Hàn', '../IMG/Danang/anh-ngoai-3-_1678440201.jpg',7, 'Phòng Deluxe Twin', 1, '../IMG/Danang/phòng7.jpg', '2 giường đơn', 1700000, 0, '28m²', 5, '', 0),
(2, 'Poseidon Luxury Sông Hàn', '../IMG/Danang/anh-ngoai-3-_1678440201.jpg',8, 'Phòng Deluxe King', 1, '../IMG/Danang/phòng8.jpg', '1 giường king size', 1700000, 0, '25m²', 4, '', 0),
(3, 'Poseidon Luxury Sông Hàn', '../IMG/Danang/anh-ngoai-3-_1678440201.jpg',9, 'Phòng Deluxe Queen', 1, '../IMG/Danang/phòng9.jpg', '1 giường king size', 1850000, 0, '25m²', 5, '', 0),
(4, 'Mường Thanh Grand Hà Nội Centre', '../IMG/Hanoi/muong-thanh-ha-noi-centre-external-1_1678266019.jpg',10, 'Phòng Superior Twin', 2, '../IMG/Hanoi/phòng10.jpg', '2 giường đơn', 1490000, 0, '25m²', 4, '', 0),
(5, 'Mường Thanh Grand Hà Nội Centre', '../IMG/Hanoi/muong-thanh-ha-noi-centre-external-1_1678266019.jpg',11, 'Phòng Deluxe Twin', 2, '../IMG/Hanoi/phòng11.jpg', '2 giường đơn', 1700000, 0, '28m²', 5, '', 0),
(6, 'Mường Thanh Grand Hà Nội Centre', '../IMG/Hanoi/muong-thanh-ha-noi-centre-external-1_1678266019.jpg',12, 'Phòng Executive Suite', 2, '../IMG/Hanoi/phòng12.jpg', '1 giường king size', 1850000, 0, '53m²', 4, '', 0),
(4, 'Mường Thanh Grand Xa la', '../IMG/Hanoi/raw_9250-1_1660198860-1_1687163162.jpg',13, 'Phòng Superior King', 2, '../IMG/Hanoi/phòng13.jpg', '1 giường king size', 1850000, 0, '30m²', 5, '', 0),
(5, 'Mường Thanh Grand Xa la', '../IMG/Hanoi/raw_9250-1_1660198860-1_1687163162.jpg',14, 'Phòng Deluxe King', 2, '../IMG/Hanoi/phòng14.jpg', '1 giường king size', 1350000, 0, '30m²', 4, '', 0),
(6, 'Mường Thanh Grand Xa la', '../IMG/Hanoi/raw_9250-1_1660198860-1_1687163162.jpg',15, 'Phòng Deluxe Twin', 2, '../IMG/Hanoi/phòng15.jpg', '2 giường đơn', 1750000, 0, '25m²', 4, '', 0),
(4, 'Mường Thanh Grand Hà Nội Centre', '../IMG/Hanoi/muong-thanh-ha-noi-centre-external-1_1678266019.jpg',16, 'Phòng Deluxe Triple', 2, '../IMG/Hanoi/phòng16.jpg', '3 giường đơn', 1850000, 0, '32m²', 5, '', 0),
(5, 'Mường Thanh Grand Hà Nội Centre', '../IMG/Hanoi/muong-thanh-ha-noi-centre-external-1_1678266019.jpg',17, 'Phòng Executive Suite', 2, '../IMG/Hanoi/phòng17.jpg', '1 giường queen size', 1980000, 0, '70m²', 4, '', 0),
(6, 'Mường Thanh Grand Hà Nội Centre', '../IMG/Hanoi/muong-thanh-ha-noi-centre-external-1_1678266019.jpg',18, 'Phòng Grand Suite', 2, '../IMG/Hanoi/phòng18.jpg', '1 giường king size', 2250000, 0, '50m²', 5, '', 0),
(7, 'Mường Thanh Grand Sài Gòn Centre', '../IMG/Saigon/_hkt6859_1679810462_1691467982.jpg',19, 'Phòng Executive Suite', 3, '../IMG/Saigon/phòng19.jpg', '1 giường king size', 3280000, 0, '50m²', 4, '', 0),
(8, 'Mường Thanh Grand Sài Gòn Centre', '../IMG/Saigon/_hkt6859_1679810462_1691467982.jpg',20, 'Phòng Premium Deluxe King', 3, '../IMG/Saigon/phòng20.jpg', '1 giường king size', 1450000, 0, '35m²', 5, '', 0),
(9, 'Mường Thanh Grand Sài Gòn Centre', '../IMG/Saigon/_hkt6859_1679810462_1691467982.jpg',21, 'Phòng Deluxe Twin', 3, '../IMG/Saigon/phòng21.jpg', '2 giường đơn', 1180000, 0, '32m²', 4, '', 0),
(7, 'Mường Thanh Luxury Sài Gòn', '../IMG/Saigon/muong-thanh-luxury-sai-gon-2_1660203978-2_1688715369.jpg',22, 'Phòng Deluxe Twin', 3, '../IMG/Saigon/phòng22.jpg', '2 giường đơn', 1840000, 0, '30m²', 5, '', 0),
(8, 'Mường Thanh Luxury Sài Gòn', '../IMG/Saigon/muong-thanh-luxury-sai-gon-2_1660203978-2_1688715369.jpg',23, 'Phòng Executive Suite', 3, '../IMG/Saigon/phòng23.jpg', '1 giường king size', 1650000, 0, '60m²', 4, '', 0),
(9, 'Mường Thanh Luxury Sài Gòn', '../IMG/Saigon/muong-thanh-luxury-sai-gon-2_1660203978-2_1688715369.jpg',24, 'Phòng Deluxe Triple', 3, '../IMG/Saigon/phòng24.jpg', '3 giường đơn', 1210000, 0, '32m²', 5, '', 0);
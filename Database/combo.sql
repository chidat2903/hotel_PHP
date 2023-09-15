-- CREATE TABLE `combo` (
--     `id` int(11) NOT NULL,
--     `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
--     `price` float NOT NULL,
--     `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
--     `status` float NOT NULL
-- )

-- INSERT INTO `combo` (`id`,`img`, `price`, `title`, `status`) VALUES
-- (1,'../IMG/giatot1.jpg', 3300000, 'Combo nghỉ dưỡng 3N2D tại Đà Nẵng-Hội An', 1052),
-- (2,'../IMG/giatot2.jpg', 3500000, 'Combo nghỉ dưỡng 3N2D tại Đà Nẵng-Hội An', 1152),
-- (3,'../IMG/giatot3.jpg', 3200000, 'Combo nghỉ dưỡng 3N2D tại Đà Nẵng-Hội An', 1252);

CREATE TABLE `tintuc` (
    `id` int(11) NOT NULL,
    `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
)

-- INSERT INTO `combo` (`id`,`img`,  `title`, `link`) VALUES
-- (1,'../IMG/tintuc1.jpg',  'VIENTIANE - XỨ SỞ CỦA NHỮNG DI TÍCH LỊCH SỬ VÀ THẮNG CẢNH THIÊN NHIÊN
-- ', 'https://booking.muongthanh.com/tin-tuc/vientiane-xu-so-cua-nhung-di-tich-lich-su-va-thang-canh-thien-nhien'),
-- (2,'../IMG/tintuc2.jpg',  'ẨM THỰC CAO BẰNG: HƯƠNG VỊ NÚI RỪNG KHIẾN DU KHÁCH VƯƠNG VẤN
-- ', 'https://booking.muongthanh.com/tin-tuc/am-thuc-cao-bang-huong-vi-nui-rung'),
-- (3,'../IMG/tintuc3.jpg',  'HỘI CHỢ DU LỊCH QUỐC TẾ TP. HỒ CHÍ MINH 2023: ĐIỂM HẸN QUY TỤ NHỮNG TINH HOA DU LỊCH THẾ GIỚI
-- ', 'https://booking.muongthanh.com/tin-tuc/hoi-cho-du-lich-quoc-te-tp-ho-chi-minh-2023-diem-hen-quy-tu-nhung-tinh-hoa-du-lich-the-gioi'),
-- (4,'../IMG/tintuc4.jpg',  'THÀNH PHỐ HỒ CHÍ MINH TỔ CHỨC NHIỀU SỰ KIỆN HẤP DẪN NHÂN DỊP QUỐC KHÁNH 2/9
-- ', 'https://booking.muongthanh.com/tin-tuc/thanh-pho-ho-chi-minh-to-chuc-nhieu-su-kien-hap-dan-nhan-dip-quoc-khanh-29'),
-- (5,'../IMG/tintuc5.jpg',  'TOP 10 ĐIỂM DU LỊCH CHO KỲ NGHỈ LỄ 2/9 TRỌN VẸN
-- ', 'https://booking.muongthanh.com/tin-tuc/top-diem-du-lich-nghi-le-2-thang-9');
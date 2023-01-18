-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 18 Oca 2023, 14:51:01
-- Sunucu sürümü: 8.0.28
-- PHP Sürümü: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `eticaret`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar_tablosu`
--

CREATE TABLE `ayar_tablosu` (
  `ayar_id` int NOT NULL,
  `ayar_baslik` varchar(100) NOT NULL,
  `ayar_description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ayar_keywords` varchar(255) NOT NULL,
  `ayar_facebook` varchar(150) NOT NULL,
  `ayar_twitter` varchar(150) NOT NULL,
  `ayar_instagram` varchar(150) NOT NULL,
  `ayar_youtube` varchar(150) NOT NULL,
  `ayar_msunucu` varchar(100) NOT NULL,
  `ayar_mport` int NOT NULL,
  `ayar_mkadi` varchar(100) NOT NULL,
  `ayar_msifre` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `ayar_tablosu`
--

INSERT INTO `ayar_tablosu` (`ayar_id`, `ayar_baslik`, `ayar_description`, `ayar_keywords`, `ayar_facebook`, `ayar_twitter`, `ayar_instagram`, `ayar_youtube`, `ayar_msunucu`, `ayar_mport`, `ayar_mkadi`, `ayar_msifre`) VALUES
(1, 'E Ticaret sitesi Çalışması 2', 'E Ticaret sitesi çalışması üzerine kodlanmış bir sitedir.', '.php .mysql .html .eticaret', 'http:\\\\facebook.com', '', '', '', 'sntp.gmail.com', 123, 'deneme@abc.com', '1234');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int NOT NULL,
  `kullanici_mail` varchar(150) NOT NULL,
  `kullanici_sifre` varchar(20) NOT NULL,
  `kullanici_sifreunuttum` varchar(20) NOT NULL,
  `kullanici_adsoyad` varchar(100) NOT NULL,
  `kullanici_tc` varchar(11) NOT NULL,
  `kullanici_adres` text NOT NULL,
  `kullanici_tel` varchar(15) NOT NULL,
  `kullanici_yetki` int NOT NULL,
  `kullanici_kayit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `kullanici_songiris` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_mail`, `kullanici_sifre`, `kullanici_sifreunuttum`, `kullanici_adsoyad`, `kullanici_tc`, `kullanici_adres`, `kullanici_tel`, `kullanici_yetki`, `kullanici_kayit`, `kullanici_songiris`) VALUES
(1, 'admin@abc.com', '1234', '', 'SERTAN BİLGİN', '', '', '', 1, '2023-01-18 10:35:36', '2023-01-18 14:05:08');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sepet`
--

CREATE TABLE `sepet` (
  `kullanici_id` int NOT NULL,
  `adi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `sepet`
--

INSERT INTO `sepet` (`kullanici_id`, `adi`) VALUES
(1, 'sertan\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urun`
--

CREATE TABLE `urun` (
  `urun_id` int NOT NULL,
  `urun_adi` varchar(150) NOT NULL,
  `urun_aciklama` text NOT NULL,
  `urun_fiyat` double NOT NULL,
  `urun_indirim` int NOT NULL,
  `urun_stok` int NOT NULL,
  `urun_vitrin` tinyint NOT NULL,
  `urun_eklenmetarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `urun_kategori_id` int NOT NULL,
  `urun_renk` varchar(200) NOT NULL,
  `urun_beden` varchar(200) NOT NULL,
  `urun_marka` varchar(50) NOT NULL,
  `urun_gosterilme` int NOT NULL,
  `sepet_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `urun`
--

INSERT INTO `urun` (`urun_id`, `urun_adi`, `urun_aciklama`, `urun_fiyat`, `urun_indirim`, `urun_stok`, `urun_vitrin`, `urun_eklenmetarihi`, `urun_kategori_id`, `urun_renk`, `urun_beden`, `urun_marka`, `urun_gosterilme`, `sepet_id`) VALUES
(1, 'deneme1', 'açıklama', 5, 10, 5, 0, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 0, 0),
(2, 'deneme2', 'açıklama', 5, 0, 5, 1, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 1, 0),
(3, 'deneme3', 'açıklama', 5, 1, 5, 1, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 1, 0),
(4, 'deneme4', 'açıklama', 5, 1, 5, 1, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 0, 0),
(5, 'deneme5', 'açıklama', 5, 1, 5, 1, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 1, 0),
(6, 'deneme6', 'açıklama', 5, 1, 5, 1, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 0, 0),
(7, 'deneme7', 'açıklama', 5, 1, 5, 1, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 1, 0),
(8, 'deneme8', 'açıklama', 5, 1, 5, 0, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 1, 0),
(9, 'deneme9', 'açıklama', 5, 1, 5, 1, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 0, 0),
(11, 'deneme11', 'açıklama', 5, 1, 5, 1, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 4, 0),
(12, 'deneme12', 'açıklama', 5, 1, 5, 1, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 0, 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayar_tablosu`
--
ALTER TABLE `ayar_tablosu`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `sepet`
--
ALTER TABLE `sepet`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Tablo için indeksler `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`urun_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayar_tablosu`
--
ALTER TABLE `ayar_tablosu`
  MODIFY `ayar_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `sepet`
--
ALTER TABLE `sepet`
  MODIFY `kullanici_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `urun`
--
ALTER TABLE `urun`
  MODIFY `urun_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 05 Oca 2018, 19:19:24
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sitem`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_turkish_ci DEFAULT NULL,
  `tel` bigint(10) DEFAULT NULL,
  `konu` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `mesaj` varchar(240) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ip` varchar(18) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kayit`
--

DROP TABLE IF EXISTS `kayit`;
CREATE TABLE IF NOT EXISTS `kayit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kisi_adi` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kisi_eposta` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kisi_konu` varchar(250) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kisi_mesaj` varchar(400) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kisi_tel` int(12) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kayit`
--

INSERT INTO `kayit` (`id`, `kisi_adi`, `kisi_eposta`, `kisi_konu`, `kisi_mesaj`, `kisi_tel`) VALUES
(1, 'sena şeftali', 'seftalisena@gmail.com', 'şikayet', NULL, NULL),
(2, 'sena şeftali', 'seftalisena@gmail.com', 'şikayet', NULL, NULL),
(6, 'derya helvacı', 'seftalisena@gmail.com', 'deneme', 'oldumu', NULL),
(7, 'derya helvacı', 'seftalisena@gmail.com', 'deneme', 'oldumu', NULL),
(8, 'derya helvacı', 'seftalisena@gmail.com', 'deneme', 'oldumu', NULL),
(9, 'derya helvacı', 'seftalisena@gmail.com', 'sad', 'mks', NULL),
(10, 'sena şeftali', 'seftalisena@gmail.com', 'dfgh', 'ghj', NULL),
(11, 'sena şeftali', 'seftalisena@gmail.com', 'dfgh', 'ghj', NULL),
(12, 'sena şeftali', 'seftalisena@gmail.com', 'dilek', 'oldumu', NULL),
(13, 'sena deneme', 'seftalisena@gmail.com', 'oldumu', 'kayit ettimi', NULL),
(14, 'merve serin', 'merve@gmail.com', 'dilek', 'site süper', NULL),
(15, 'sena', 'seftalise@gmail.com', 'dilek', 'dhslç.', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `konular`
--

DROP TABLE IF EXISTS `konular`;
CREATE TABLE IF NOT EXISTS `konular` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `konu_baslik` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `link` varchar(600) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5027 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `konular`
--

INSERT INTO `konular` (`id`, `konu_baslik`, `resim`, `link`) VALUES
(4729, '2018&#39;in ilk bebeği o oldu', 'https://i.cnnturk.com/ps/cnnturk/75/720x490/5a495c0761361f213c58c09f', 'https://www.cnnturk.com/turkiye/2018in-ilk-bebegi-o-oldu'),
(4760, 'Yılbaşı ikramiyesini tek rakamla kaçırdı, 1 milyon 250 bin TL&#39;nin sahibi oldu', 'https://i.cnnturk.com/ps/cnnturk/75/720x490/5a4ceb2961361f147028a7dd', 'https://www.cnnturk.com/turkiye/yilbasi-ikramiyesini-tek-rakamla-kacirdi-1-milyon-250-bin-tlnin-sahibi-oldu'),
(4999, '&quot;Bakan geliyor, açılış var&quot; diyerek dolandırıcılık iddiası', 'https://i.cnnturk.com/ps/cnnturk/75/720x490/5a4cf45761361f147028a861', 'https://www.cnnturk.com/turkiye/bakan-geliyor-acilis-var-diyerek-dolandiricilik-iddiasi'),
(4908, 'DEAŞ&#39;a katılan Türk kadın serbest bırakıldı', 'https://i.cnnturk.com/ps/cnnturk/75/720x490/5a4cef75ae784909d86480e5', 'https://www.cnnturk.com/turkiye/deasa-katilan-turk-kadin-serbest-birakildi'),
(5019, 'Yüksekova&#39;da 1 PKK&#39;lı teslim oldu', 'https://i.cnnturk.com/ps/cnnturk/75/720x490/59cb788aae78491ba8731a8b', 'https://www.cnnturk.com/turkiye/yuksekovada-1-pkkli-teslim-oldu123'),
(5014, 'Son dakika... 10 hakim ve savcı göreve döndü ', 'https://i.cnnturk.com/ps/cnnturk/75/720x490/5a4acaee61361f1008272d79', 'https://www.cnnturk.com/son-dakika-10-hakim-ve-savci-goreve-dondu'),
(5026, '&#39;Karagümrük çetesi&#39;nin lideri Nuriş&#39;in oğlu tutuklandı', 'https://i.cnnturk.com/ps/cnnturk/75/720x490/5a4f631fae78492a0823f061', 'https://www.cnnturk.com/turkiye/karagumruk-cetesinin-lideri-nurisin-oglu-tutuklandi'),
(5025, '&#39;Karagümrük çetesi&#39;nin lideri Nuriş&#39;in oğlu tutuklandı', 'https://i.cnnturk.com/ps/cnnturk/75/720x490/5a4f631fae78492a0823f061', 'https://www.cnnturk.com/turkiye/karagumruk-cetesinin-lideri-nurisin-oglu-tutuklandi'),
(5023, '&#39;Karagümrük çetesi&#39;nin lideri Nuriş&#39;in oğlu tutuklandı', 'https://i.cnnturk.com/ps/cnnturk/75/720x490/5a4f631fae78492a0823f061', 'https://www.cnnturk.com/turkiye/karagumruk-cetesinin-lideri-nurisin-oglu-tutuklandi'),
(5024, '&#39;Karagümrük çetesi&#39;nin lideri Nuriş&#39;in oğlu tutuklandı', 'https://i.cnnturk.com/ps/cnnturk/75/720x490/5a4f631fae78492a0823f061', 'https://www.cnnturk.com/turkiye/karagumruk-cetesinin-lideri-nurisin-oglu-tutuklandi'),
(5022, '&#39;Karagümrük çetesi&#39;nin lideri Nuriş&#39;in oğlu tutuklandı', 'https://i.cnnturk.com/ps/cnnturk/75/720x490/5a4f631fae78492a0823f061', 'https://www.cnnturk.com/turkiye/karagumruk-cetesinin-lideri-nurisin-oglu-tutuklandi'),
(5020, 'Düzce İl Jandarma Komutanı FETÖ&#39;cü çıktı, itirafçı oldu', 'https://i.cnnturk.com/ps/cnnturk/75/720x490/5a4e0a9c61361f19200ff884', 'https://www.cnnturk.com/turkiye/duzce-il-jandarma-komutani-fetocu-cikti-itirafci-oldu'),
(5021, 'Cinsel taciz suçlusunun evinden cephanelik çıktı', 'https://i.cnnturk.com/ps/cnnturk/75/720x490/5a4e0bd661361f19200ff8b4', 'https://www.cnnturk.com/turkiye/cinsel-taciz-suclusunun-evinden-cephanelik-cikti'),
(5000, 'Son dakika... AIDS&#39;li hastanın ameliyatına girmeyen doktor için savcılık harekete geçti', 'https://i.cnnturk.com/ps/cnnturk/75/720x490/5a4acaee61361f1008272d79', 'https://www.cnnturk.com/turkiye/son-dakika-aidsli-hastanin-ameliyatina-girmeuyen-doktor-icin-savcilik-harekete-gecti'),
(4946, 'Üsküdar&#39;da cinayet: Eşini yaraladı, yanındaki kişiyi öldürdü', 'https://i.cnnturk.com/ps/cnnturk/75/720x490/59f00e99ae78491a5015fe36', 'https://www.cnnturk.com/turkiye/uskudarda-cinayet-esini-yaraladi-yanindaki-kisiyi-oldurdu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

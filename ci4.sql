-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jul 2023 pada 09.53
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `nama_genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `genre`
--

INSERT INTO `genre` (`id_genre`, `nama_genre`) VALUES
(1, 'fiksi'),
(2, 'non fiksi'),
(3, 'romansa'),
(4, 'fantasi'),
(5, 'action'),
(6, 'horor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `novel`
--

CREATE TABLE `novel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `karya` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `sampul` varchar(255) NOT NULL,
  `sinopsis` text NOT NULL,
  `created_at` datetime NOT NULL,
  `update_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `novel`
--

INSERT INTO `novel` (`id`, `judul`, `slug`, `id_genre`, `karya`, `penerbit`, `sampul`, `sinopsis`, `created_at`, `update_at`) VALUES
(1, 'Layangan Putus', 'layangan putus', 1, 'Mommy Asf', 'DM Publisher', 'LP.jpg', 'Layangan Putus, sebuah novel karya Mommy ASF yang mengisahkan seorang gadis bernama Kinanti yang memantapkan hatinya untuk berumah tangga bersama Aris.  Mimpinya sangatlah sederhana, ia hanya ingin menyelesaikan pendidikan tanpa terus membebani kedua orangtuanya. Hingga akhirnya gadis yang kerap disapa Kinan itu mampu menyelesaikan kuliahnya dan ia bercita-cita ingin menjadi dokter hewan.\r\n\r\nSemua berjalan mulus, Kinan yang jatuh cinta dengan Aris dan Aris mengambil langkah untuk meminang Kinan. Banyak hal yang Kinan dapatkan Ketika bersama Aris dan cinta yang tertanam kian bertumbuh dan terus bertambah.\r\n\r\nBagi Kinan, Aris seorang lelaki yang mandiri, tangguh, dan sedikit memiliki watak yang keras kepala. Tapi melihat semua hal yang telah dilalui Kinan bersama Aris membuat gadis itu tetap memilih menaruh masa depannya bersama pria itu kelak.\r\n\r\nKetika Aris datang melamar Kinan di hadapan Ayah dan Ibu gadis itu, Kinan mengajukan tiga syarat di pernikahan mereka kelak. Yang pertama Kinan ingin agar Aris menganggap orangtuanya seperti orangtua sendiri. Syarat yang kedua, Kinan boleh bekerja sesuai dengan latar belakang pendidikannya, dan ketiga, ia tidak bersedia dipoligami selama dirinya masih bisa memberi keturunan. Setelah mengatakannya Aris pun menyetujuinya .\r\nNovel yang terbit pada 2020 itu berhasil mengguncang emosi dan perasaan para pembaca. Kinan dengan sepenuhnya mengabdikan diri kepada sang suami. Impiannya untuk menjadi wanita karir harus pupus karena memilih untuk tinggal di rumah dan menjadi ibu rumah tangga.\r\n\r\nMasa awal pernikahan mereka sangatlah Bahagia. Aris pun mulai belajar agama dan mendalaminya. Hal itu mendorong Kinan turut memilih untuk berhijab. Aris mampu meyakinkan Kinan dengan ia yang bekerja di luar rumah cukup membawa Kinan memenuhi mimpinya. Juga mimpi kecil untuk berpetualang menaiki balon udara dan menikmati keindahan Cappadocia dari angkasa.\r\n\r\nNamun semua berubah. Tidak ada Cappadocia atau balon udara. Semua hanya  mimpi dan tidak pernah terwujud. Suaminya, Aris, selingkuh. Kinan yang sudah menyerah seluruh hidupnya menjadi istri  Aris seorang harus pupus. Rumah tangga yang berusaha ia jaga runtuh juga. Ketika dirinya hamil anak kelima, tepat saat  itu ia keguguran, dan Kinan mengetahui Aris selingkuh. Semua kacau.\r\n\r\nBuku karya Mommy ASF itu banyak menguras emosi pembaca. Khususnya saat Kinan mendapati foto Aris bersama Wanita lain yang berlibur ke Turki tepat di Cappadocia, kota impian Kinan. Kekecewaan itu Kinan rasakan luar biasa karena Aris mengingkari janjinya. Janji untuk tidak ada Wanita lain selama Kinan masih bisa memberinya keturunan.\r\n\r\nBuku yang bahkan mencapai cetakan keenam nyatanya mampu menggambarkan dengan baik kisah seorang Kinan. Penggambaran seorang Kinan dan kisah yang dialami cukup relate dengan kisah-kisah yang sering dialami di sekitar kita. Perselingkuhan, rasa kecewa dan janji yang diingkari.\r\n\r\nPenggambaran tokoh Kinan sebagai perempuan tangguh sungguh luar biasa. Sosok wanita yang terus bersikap baik di tengah sakit hatinya kepada Aris. Namun dirinya harus terus fokus merawat keempat buah hatinya. Meskipun diakhir mereka berpisah, namun Kinan tidak membatasi jika anak-anaknya ingin bermain bersama sang ayah.\r\n\r\nKinan pun akhirnya memilih pindah ke Malang dan membuka sebuah klinik hewan bersama temannya. Ia Kembali memulai hidupnya di sana. Menyekolahkan anak-anaknya di tempat yang baru. Meskipun Aris masih terus muncul dan menghubunginya untuk bertemu anak-anaknya. Mengajaknya bermain bahkan liburan ke Singapura.\r\n\r\nLayangan Putus menjadi salah satu buku best seller bahkan novel ini sampai di filmkan. Penggunaan bahasa yang santai dan lugas dapat dengan mudah dipahami oleh pembaca.', '2023-06-13 10:30:47', '2023-06-13 10:30:47'),
(2, 'Kita Pergi Hari Ini', 'kita-pergi', 2, 'Ziggy Zezsyazeoviennazabrizkie', 'Gramedia Pustaka Utama', 'KPH.jpg', '“Hal yang paling menyeramkan di dunia ini adalah anak-anak.”\r\n\r\nDikisahkan ada sebuah kota yang disebut sebagai Kota Suara, yang mana di kota ini, jumlah populasi anak kecil jauh lebih banyak dibandingkan dengan jumlah populasi orang dewasa.\r\n\r\nDari banyaknya jumlah populasi anak-anak, ditambah dengan sifat alami anak kecil, terdapat banyak keributan di kota tersebut. Keributan yang disebabkan anak-anak yang tertawa, teriak, menangis, dan menjerit.\r\n\r\nOleh karena keributan ini, masyarakat Kota Suara mulai melupakan nama asli dari kota tersebut. Dan dari situ lah asal usul kota tersebut disebut sebagai Kota Suara.\r\n\r\nKisah ini berawal dari salah satu keluarga kecil di Kota Suara, yang beranggotakan lima orang. Seorang ayah, ibu, dan tiga orang anaknya. Keluarga ini disebut sebagai Keluarga Mo, di mana ada Bapak Mo, Ibu Mo, dan tiga anak yang bernama Ma, Mi, dan Mo.\r\n\r\nKondisi ekonomi di Kota Suara menuntut penduduknya untuk mencari uang lebih. Sebab seluruh harta Kota Suara telah diraup habis oleh para penjahat. Seluruh uang yang ada di dasar laut diambil oleh para perompak, seluruh uang yang ada di bawah tanah diambil oleh para perampok, dan seluruh uang yang ada di ranting pohon diambil oleh pengusaha kayu yang jahat.\r\n\r\nOrang-orang dewasa yang menempati Kota Suara setiap harinya harus bekerja keras demi menghasilkan uang, untuk dapat menghidupi dirinya sendiri beserta keluarganya. Tidak terkecuali Bapak Mo dan Ibu Mo.\r\n\r\nAktivitas keseharian Bapak Mo dan Ibu Mo adalah bekerja, dan sebagian besar waktu mereka habis karena sibuk bekerja. Maka itu, Bapak Mo dan Ibu Mo tidak memiliki banyak waktu yang dapat dihabiskan untuk mengurus dan bermain bersama anak-anaknya.\r\n\r\nMemakai jasa seorang pengasuh anak bukan lah suatu pilihan bagi Keluarga Mo, karena Bapak dan Ibu Mo tidak mempunyai uang lebih untuk membayar jasa tersebut.\r\n\r\nNamun, terdapat satu pilihan yang memungkinkan para keluarga yang kondisinya seperti Keluarga Mo, yang tidak memiliki penghasilan yang banyak, tetapi juga tidak memiliki waktu untuk menjaga anak-anaknya, yakni dengan memakai jasa pengasuh berbentuk kucing luar biasa yang tidak perlu dibayar atau gratis.\r\n\r\nKucing luar biasa berasal dari sebuah kota di luar Kota Suara yang bernama Kota Terapung Kucing Luar Biasa. Sesuai dengan namanya, seluruh populasi kota ini adalah kucing.\r\n\r\nKucing luar biasa bukan lah sebuah sebutan tanpa makna, melainkan sebutan yang menggambarkan keadaan para kucing penduduk Kota Terapung Kucing Luar Biasa. Kucing-kucing penduduk kota tersebut tidak seperti hewan kucing biasa, tetapi para kucing tersebut menyerupai seorang manusia.\r\n\r\nBerjalan dengan dua kaki, memiliki dua tangan, bisa berbicara, bisa melakukan aktivitas manusia dalam kehidupan sehari-hari, dan memiliki akal seperti manusia. Begitu juga dengan pengasung yang disewa jasanya oleh Bapak dan Ibu Mo.\r\n\r\nPengasuh kucing luar biasa ini meminta Keluarga Mo untuk memanggilnya Nona Gigi.\r\n\r\nKehadiran Nona Gigi ke dalam Keluarga Mo membawa kedamaian hati bagi Bapak dan Ibu Mo. Sebab, dengan hadirnya Nona gigi, kehidupan anak-anak Bapak dan Ibu Mo, yakni Ma, Mi, dan Mo menjadi terurus, dan mereka dapat terus bekerja keras dengan merasa tenang.\r\n\r\nKehadiran Nona Gigi kemudian memungkinkan Ma, Mi, dan Mo untuk bersosialisasi ke luar rumah. Ma, Mi, dan Mo kemudian berkenalan dan dekat dengan dua anak kembar yang tinggal di samping rumahnya. Kedua anak tersebut bernama Fifi dan Fufu.\r\n\r\nMa, Mi, dan Mu, serta Fifi dan Fufu berteman baik dan saling berbagi cerita. Ternyata, mereka memiliki satu cerita yang sama, yakni orang tua mereka berlima memiliki janji untuk membawa mereka semua pergi jalan-jalan.\r\n\r\nBerdasarkan sifat alami seorang anak kecil, ketika mereka diberikan sebuah janji, maka mereka akan menagihnya sewaktu-waktu. Ma, Mi, dan Mo, serta Fifi dan Fufu kemudian menagih janji para orang tuanya.\r\n\r\nPada akhirnya, orang tua mereka menepati janji tersebut dengan memutuskan satu hari di mana mereka dapat pergi jalan-jalan. Namun, oleh sebab kondisi hidup mereka yang pas-pasan, orang tua mereka tidak dapat menemani anak-anaknya jalan-jalan, karena tidak dapat meninggalkan pekerjaan.\r\n\r\nAkhirnya para orang tua pun meminta Nona Gigi sebagai pendamping alan-jalan Ma, Mi, Mo, Fifi, dan Fufu. Para anak-anak memutuskan untuk pergi ke Kota Terapung Kucing Luar Biasa. Dari sini lah kisah perjalanan yang tidak terduga dimulai.\r\n\r\nUntuk dapat sampai ke Kota Terapung Kucing Luar Biasa, mereka harus naik kendaraan yang disebut kereta air. Kereta air ini memiliki bentuk yang unik, bentuk badan kereta air menyerupai sebuah daun, jadi tiap-tiap penumpangnya akan duduk di sebuah daun. Sedangkan, lantai pijakan dari kereta air akan berubah menjadi air ketika para penumpang duduk.\r\n\r\nPerjalanan menuju Kota Terapung Kucing Luar Biasa mengharuskan mereka untuk singgah di sebuah tempat yang bernama Sirkus Sendu. Tidak seperti sirkus pada umumnya, yang mana setelah menonton sirkus para penontonnya akan merasa senang, Sirkus Sendu adalah kebalikannya.\r\n\r\nReaksi para penonton setelah menonton Sirkus Sendu adalah merasakan kesedihan, bahkan hingga menangis. Bukan tanpa tujuan Sirkus Sendu ini diadakan, karena tangisan para penumpang yang menonton Sirkus Sendu merupakan bahan bakar kererta air, yang memungkinkan mereka untuk pergi ke Kota Terapung Kucing Luar Biasa.\r\n\r\nAkhirnya, mereka pun dapat sampai ke Kota Terapung Kucing Luar Biasa. Pemandangan pertama yang disuguhkan sesampainya di sana adalah pemandangan yang mengagumkan bagi seorang manusia.\r\n\r\nBagaimana tidak, para kucing di sana sungguh hidup seperti para manusia. Memiliki rumah, memiliki pekerjaan, ada yang bekerja di darat, bekerja di laut, dan melakukan aktivitas manusia lainnya.\r\n\r\nMa, Mi, Mo, Fifi, dan Fufu, bersama dengan Nona Gigi pun melanjutkan perjalanan menyusuri Kota Terapung Kucing Luar Biasa. Nona Gigi membawa mereka berpetualang menyusuri Kota Terapung Kucing Luar Biasa yang indah dan megah.\r\n\r\nNamun, petualangan mereka tidak berjalan seperti ekspektasi. Tak lama setelah petualangan dimulai, keanehan mulai terjadi, muncul masalah demi masalah dan juga ancaman, kebenaran mulai terkuak.\r\n\r\nPetualangan kelima anak kecil tersebut dipenuhi oleh kejadian mengerikan yang bertubi-tubi. Bahkan, kejadian mengerikan yang terburuk dapat mengorbankan keselamatan nyawa Ma, Mi, Mu, Fifi, dan Fufu.', '2023-06-13 10:30:47', '2023-06-13 10:30:47'),
(5, 'The Star and I', 'Star and I', 3, 'Ilana Tan', 'Gramedia Pustaka Utama', 'TSA.jpg', 'Novel The Star and I mengisahkan polemik kehidupan Olivia Mitchell, seorang aktris Broadway asal Skotlandia, yang berbakat dan terkenal di New York. Olivia merupakan anak yang diangkat oleh keluarga Mitchell dari sebuah panti asuhan yang berlokasi di New York.\r\n\r\nSejak kecil, Olivia Mitchell mencari informasi mengenai siapa orang tua kandungnya. Bukan karena ia tidak mencintai orang tua angkatnya, melainkan ingin menemukan jawaban atas alasan mengapa orang tua kandungnya menelantarkannya.\r\n\r\nSuatu ketika, ia mendapat kesempatan untuk bekerja di New York untuk mewujudkan cita-citanya sebagai aktris musikal Broadway. Ia tentunya bersemangat untuk pergi ke New York, karena ia dapat sekaligus menjalankan misi pencarian orang tua kandungnya.\r\n\r\nDalam perjalanan Olivia mencari orang tua kandungnya, Olivia bertemu dengan sahabat masa kecilnya yang juga merupakan cinta pertamanya yang gagal, Lawrence Rex Rankin.\r\n\r\nRex kemudian membantu sahabat masa kecilnya itu untuk menemukan orang tuanya. Pertemuan Olivia dan Rex membuka babak baru dalam kehidupan Olivia. Rex mempermudah jalan Olivia untuk menemukan orang tua kandungnya.\r\n\r\nPada akhirnya, Olivia pun menemukan sosok orang tua kandungnya. Walaupun pada akhirnya, kenyataan yang terjadi bertolak belakang dengan ekspektasi. Pada akhirnya pula, hubungan Rex dan Olive bertumbuh menjadi apa yang memang seharusnya terjadi sejak dulu.\r\n\r\n', '2023-06-13 13:09:49', '2023-06-13 13:09:49'),
(6, 'Hujan', 'hujan', 4, 'Tere Liye', 'Gramedia Pustaka Utama', 'Hujan.jpg', 'Novel ini menceritakan tentang Esok dan Lail sebagai salah satu tokoh utama, keduanya dipertemukan setelah gunung meletus pada tahun 2042. Efek letusan gunung yang dahsyat membuat seisi bumi menyisihkan manusia dan tersisa sekitar 10% manusia.\r\n\r\nEsok yang memiliki nama panjang Soke Bahtera merupakan sosok anak muda yang pintar dan jenius, saat 16 tahun ia berpindah ke ibu kota untuk meneruskan sekolahnya dan ia berhasil membuat mobil terbang untuk pertama kalinya.\r\n\r\nSedangkan Lail sosok wanita sederhana yang tinggal di panti social sebagai relawan kemanusiaan dan mendapatkan pendidikan di sekolah perawat. Ia ternyata memiliki perasaan untuk Esok namun tidak dapat mengungkapkannya.\r\n\r\nCerita ini menggunakan latar di tahun 2041-20150 yang berarti menceritakan kecanggihan teknologi di masa depan, dan peran manusia akan tergantikan dengan teknologi dan ilmu pengetahuan. Manusia juga semakin dimanja dengan berbagai teknologi yang sudah ada, seperti tidak perlu repot memasak, menjahit, dan beberapa aktivitas lainnya.\r\n\r\nKonflik dari cerita ini saat Lail akan memodifikasi ingatannya di pusat terapi saraf dan ia ingin melupakan tentang hujan, kemudian Lail menceritakan tentang kehidupannya dari terjadinya bencana alam sampai tiba di pusat terapi syaraf.', '2023-06-13 13:09:49', '2023-06-13 13:09:49'),
(7, 'Cantik Itu Luka', 'cantik', 5, 'Eka Kurniawan', 'Gramedia Pustaka Utama', 'CIL.jpg', 'Novel Cantik Itu Luka becerita tentang alur hidup Dewi Ayu, pelacur cantik di zaman kolonial. Garis hidup dan keturunan Dewi Ayu sangat unik, mulai dari silsilah ayah-ibu hingga anak-anaknya yang kelak banyak membawa pengaruh di Halimunda, wilayah rekaan Eka Kurniawan. Sejak kecil, Dewi Ayu tumbuh tanpa asuhan ayah dan ibu yang terusir karena kawin sedarah (perkawinan saudara tiri). Dewi Ayu diasuh oleh kakek-neneknya. Ia tumbuh menjadi gadis kuat dan pemberani. Salah satu bukti keberaniannya adalah ketegarannya hidup di penjara saat Jepang menyerang Hindia Belanda. Di tempat penahanan itulah, Dewi Ayu menyerahkan kesuciannya demi membantu rekannya di barak penampungan. Dua tahun kemudian, Dewi Ayu termasuk salah satu di antara 19 gadis tahanan yang dipindahkan ke rumah mewah yang dikelola Mama Kalong. Di tempat itulah, Dewi Ayu memulai hidupnya sebagai pelacur untuk melayani nafsu para tentara Jepang. Selama menjadi pelacur, Dewi Ayu melahirkan empat anak perempuan. Semuanya tidak jelas identitas ayahnya. Sebagaimana ibunya, tiga dari putri Dewi Ayu berparas sangat cantik. Dewi Ayu merasa bahwa mengasuh anak-anak yang sangat cantik amat merepotkan. Karena itulah, ketika hamil anak keempat, ia berharap bahwa anaknya menjadi anak buruk rupa dan demikianlah yang terjadi. Akan tetapi, Dewi Ayu tidak sempat menyaksikan putri bungsunya tersebut. Ironisnya, sebelum ia meninggal, Dewi Ayu memberi nama putri buruk rupanya itu dengan nama Si Cantik. Demikianlah kehidupan Si Cantik yang penuh luka. Nama yang ia emban sangat memberatkan hidupnya karena senyatanya ia berparas buruk rupa, tidak cantik rupawan sama sekali. Simak kisah kelanjutan Si Cantik dan petualangan hidup Dewi Ayu dalam novel Cantik Itu Luka (2002) karya Eka Kurniawan.', '2023-06-13 13:13:36', '2023-06-13 13:13:36'),
(9, 'Dilan', ' dilan', 2, ' pidi baiq', '', '1689058602_206e24ec260bf27bc5ba.jpeg', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', 'admin123', '2023-07-10 03:33:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indeks untuk tabel `novel`
--
ALTER TABLE `novel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `novel`
--
ALTER TABLE `novel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `novel`
--
ALTER TABLE `novel`
  ADD CONSTRAINT `novel_ibfk_1` FOREIGN KEY (`id_genre`) REFERENCES `genre` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

# Pengelolaan Daftar Novel

## Tujuan Pembuatan Aplikasi
  pembuatan aplikasi ini bertujuan untuk menyelesaikan tugas ujian  akhir praktikum yang berfungsikan untuk mengimplementasikan pengetahuan dan keterampilan yang telah dipelajari selama praktik menjadi sebuah aplikasi yang berfungsi.  tujuan utama pembuatan aplikasi adalah sebagai berikut:
  1. Penerapan konsep dan teknik pemrograman web CI4 dan MVC yang relavan dan terstruktur
  2. Meningkatkan kreativitas dan keahlian dalam pengembangan aplikasi
  3. ujian akhir praktik ini memberikan kesempatan bagi peserta untuk mengaplikasikan pengetahuan dan keterampilan yang telah dipelajari dalam suatu proyek nyata
  4. Aplikasi ini dirancang untuk mengevaluasi kemampuan dalam mengembangkan, mengimplementasikan, dan mendemonstrasikan pemahaman praktis terhadap materi yang telah dipelajari.

## Peralatan Yang Digunakan
  Alat dan bahan yang digunakan:  
1.	Pc/Laptop  
2.	Aplikasi Visual Studio Code Versi 1.7.8.2.0
3.	Microsoft Word Versi 2011
4.	BPP
5.	Xampp Versi 7.4.29
6.	Git Bash Versi 2.40.0.1
7.	Command Prompt Versi 10.0.2
8.	Composer Versi 2.5.7
9.	Codeigeneter Versi 4.3.5

## Latar Belakang Aplikasi 
aplikasi web daftar novel adalah aplikasi web menyediakan platform yang memungkinkan pengguna untuk mencari, menemukan, dan melihat informasi tentang berbagai novel. Aplikasi ini ditujukan untuk para pecinta buku dan pembaca yang ingin menjelajahi dunia novel dengan lebih mudah dan efisien.aplikasi web daftar novel dapat menjadi solusi yang bermanfaat bagi pembaca novel yaitu untuk Memberikan informasi detail tentang novel,Membantu dalam mengatur dan melacak novel yang ingin di cari,mencari rekomendasi novel yang terbaru,Meningkatkan pengalaman membaca secara digital , dan  memberikan alternatif untuk membaca sinopsisnya.

Aplikasi web daftar novel dapat menjadi sarana yang efektif untuk menghubungkan pembaca dengan berbagai novel, membantu mereka dalam memilih dan mengatur koleksi novel, serta memfasilitasi interaksi antara pengguna dengan rekomendasi dan ulasan mereka.

## Landasan Teori
A.	Pengertian Composser

Composer adalah alat dependency manager untuk bahasa pemrograman PHP. Dengan kata lain, Composer adalah aplikasi yang diinstal ke perangkat untuk memfasilitasi developer menggunakan library open source milik orang lain ke dalam project yang sedang dibangun. Composer membantu mengatur ketergantungan (dependency) atau penggunaan library luar project PHP. Proses penulisan kode akan lebih cepat dan terstruktur, sebab kemampuannya dalam mengelola instalasi dan mengupdate library yang digunakan.

B.	Pengertian Codeigneter

Codeigniter adalah salah satu framework untuk membuat website dengan bahasa pemrograman PHP. Codeigniter terkenal dengan konsep MVC-nya. MVC merupakan singkatan dari Model–View–Controller.

C.	Fitur-fitur codeigneter

Ada beberapa fitur codeigneter yaitu:
1. XSS filtering
2. Template engine class
3. MVC
4. Extremely Light Weight
5. Built in library
6. Keunggulan Codeigneter

   Ada beberapa kelebihan CodeIgniter (CI) dibandingkan dengan Framework PHP lain yaitu:
   a. Performa cepat: Codeigniter merupakan framework yang paling cepat dibanding framework yang lain. Karena tidak menggunakan template engine dan ORM yang dapat memperlambat proses.
   b. Konfigurasi yang minim (nearly zero configuration): tentu saja untuk menyesuaikan dengan database dan keleluasaan routing tetap diizinkan melakukan konfigurasi dengan mengubah beberapa file konfigurasi seperti database.php atau autoload.php, namun untuk menggunakan codeigniter dengan setting standard, anda hanya perlu mengubah sedikit saja pada file di folder config.
   c. Memiliki banyak komunitas: Komunitas CI di indonesia cukup ramai, tutorialnya pun mudah dicari.
   d. Dokumentasi yang lengkap: Codeigniter disertai dengan user_guide yang berisi dokumentasi yang lengkap.
   e. Mudah dipelajari pemula: Bagi pemula, CI sangat mudah dipelajari. Karena CI tidak terlalu bergantung pada tool tambahan seperti composer, ORM, Template Engine, dll.
   
E. Cara kerja Codeigneter
1. Pengguna membuat perintah atau permintaan data ‘X’;
2. Kemudian Controller akan menerima permintaan serta meminta Model mencari data ‘X’ tersebut;
3. Model mulai melakukan pencarian data ‘X’ di database;
4. Bila data ‘X’ sudah ditemukan, selanjutnya View akan mengkonversinya menjadi data yang dapat dibaca oleh pengguna serta kembali dikirim ke browser;
5. Data ‘X’ pun berhasil diterima pengguna.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

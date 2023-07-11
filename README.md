# PENGELOLAAN DAFTAR NOVEL

## TUJUAN PEMBUATAN APLIKASI
  pembuatan aplikasi ini bertujuan untuk menyelesaikan tugas ujian  akhir praktikum yang berfungsikan untuk mengimplementasikan pengetahuan dan keterampilan yang telah dipelajari selama praktik menjadi sebuah aplikasi yang berfungsi.  tujuan utama pembuatan aplikasi adalah sebagai berikut:
  1. Penerapan konsep dan teknik pemrograman web CI4 dan MVC yang relavan dan terstruktur
  2. Meningkatkan kreativitas dan keahlian dalam pengembangan aplikasi
  3. ujian akhir praktik ini memberikan kesempatan bagi peserta untuk mengaplikasikan pengetahuan dan keterampilan yang telah dipelajari dalam suatu proyek nyata
  4. Aplikasi ini dirancang untuk mengevaluasi kemampuan dalam mengembangkan, mengimplementasikan, dan mendemonstrasikan pemahaman praktis terhadap materi yang telah dipelajari.

## PERALATAN YANG DIGUNAKAN
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

## LATAR BELAKANG APLIKASI
aplikasi web daftar novel adalah aplikasi web menyediakan platform yang memungkinkan pengguna untuk mencari, menemukan, dan melihat informasi tentang berbagai novel. Aplikasi ini ditujukan untuk para pecinta buku dan pembaca yang ingin menjelajahi dunia novel dengan lebih mudah dan efisien.aplikasi web daftar novel dapat menjadi solusi yang bermanfaat bagi pembaca novel yaitu untuk Memberikan informasi detail tentang novel,Membantu dalam mengatur dan melacak novel yang ingin di cari,mencari rekomendasi novel yang terbaru,Meningkatkan pengalaman membaca secara digital , dan  memberikan alternatif untuk membaca sinopsisnya.

Aplikasi web daftar novel dapat menjadi sarana yang efektif untuk menghubungkan pembaca dengan berbagai novel, membantu mereka dalam memilih dan mengatur koleksi novel, serta memfasilitasi interaksi antara pengguna dengan rekomendasi dan ulasan mereka.

## LANDASAN TEORI
## Pengenalan CodeIgniter
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

## Konsep MVC

1.	Mengenal Konsep Mvc

  	Codeigniter menggunakan konsep MVC (Model, View, Controller). Konsep ini banyak digunakan saat ini bahkan diberbagai framework php lainnya. Konsep ini memisahkan tanggung jawab responsibility dari setiap komponen utama yang membangun sebuah aplikasi seperti manimuplasi data, user interface dan bagian yang menjadi kontrol aplikasi.
Didalam Codigniter terdapat 3 komponen penting dalam membangun sebuah aplikasi yang sering kita kenal dengan Model, view dan controller

![image](https://github.com/Pengelolaan-Daftar-Novel-CI4/Pengelolaan-Daftar-Novel-CI4-Kelompok1/assets/113124849/9cf1422a-80be-49c0-b54a-ae768b331e52)

A. Model

Model adalah bagian yang berhubungan dengan manipulasi data didalam database misalnya insert,create, update dan delete dan lainnya. Model ini dihubungkan oleh kontrol aplikasi ke interface user.

B. View

View merupakan bagian yang menangani terkait tampilan user interface sebuah aplikasi. didalam aplikasi web biasanya pasti akan berhubungan dengan html dan css.

C. Controller

Controller bisa dikatakan sebagai otak dari sistem. karena controller yang menjadi penghubung antara bagian model dan view. Controller berfungsi untuk menerima request dan data dari user kemudian diproses dengan menghubungkan bagian model dan view sehingga bisa di terima oleh user.

2.	Manfaat Menerapkan Mvc
   
Terdapat sejumlah keuntungan menggunakan framework MVC dalam pembuatan website, antara lain:

•	Eror atau bug lebih mudah ditangani

Metode MVC membuat developer lebih fokus dalam mengembangkan website karena tahu bagian mana yang harus dikerjakan terlebih dahulu. Dengan demikian, developer dapat menemukan bug dan memperbaikinya dengan cepat.
Sebagai contoh, bila function search pada marketplace tidak berjalan dengan baik, misalnya eror, tidak bisa diklik, atau tidak menampilkan hasil pencarian, bisa saja permasalahan tersebut disebabkan pada datanya atau tombolnya. Dengan demikian, bila prediksi tersebut ternyata benar, maka front-end dapat langsung memperbaiki eror tersebut.

•	Proses testing jadi lebih mudah

Menggunakan kerangka MVC membuat proses testing dapat dilakukan per bagian yang telah siap saja dan tidak perlu menunggu keseluruhan web selesai.

•	Mengembangkan website menjadi lebih efisien

Konsep MVC membantu proses pengembangan website menjadi lebih cepat. Sebab, MVC terbagi menjadi tiga bagian sehingga proses pengerjaannya akan sepert bagian Model dan Controller bisa dikerjakan oleh tim back-end developer. Dan bagian View bisa dikerjakan oleh tim front-end developer dan tim UI/UX. Dengan demikian, masing-masing tim dapat menyelesaikan bagiannya secara terpisah tanpa menggangu tim lainnya.

•	Maintenance jadi mudah

MVC memungkinkan penggunaan script yang lebih terstruktur dan rapi sehingga memudahkan tim developer saat mengembangkan dan me-maintenance website.


3. Framework Yang Menggunakan Mvc
   
Berikut adalah beberapa contoh framework yang menggunakan MVC sebagai pola arsitekturnya, antara lain:


•	Framework Python: Django, Turbogears2, Watson-Framework, dan sebagainya.

•	Framework PHP: Laravel, Symfony, CakePHP, Zend, dan CodeIgniter.

•	Framework Nodejs: Express, Adonis, Sails.js, Total.js, Mean.js, dan Mojito.

## Penggunaan Boostrap
A.	Pengertian Bootstrap

Bootstrap adalah framework CSS yang bersifat free dan open source. Bootstrap menyediakan class-class CSS dan beberapa fungsi JavaScript untuk mempermudah pembuatan web

B.	Fungsi Bootstrap

Fungsi Bootstrap adalah untuk membuat website responsive dan mobile-first. Jadi, semua elemen antarmuka website dipastikan bisa bekerja secara optimal di semua ukuran layar, baik desktop maupun perangkat seluler.

C.	Kelebihan Bootstrap

Ada beberapa kelebihan bootstrap yaitu :

•	Mudah digunakan

•	Responsive Grid

•	Kompatibel dengan banyak Browser

•	Bootstrap image system

•	Dokumentasi bootstrap yang lengkap

D.	Kekurangan Bootstrap

Kekurangan Bootstrap adalah gaya visualnya yang hampir selalu sama, sehingga Anda perlu melakukan banyak penyesuaian gaya agar proyek Anda tidak monoton. Kalau tidak, semua website yang dibuat dengannya akan memiliki navigasi, struktur, dan komponen desain yang sama, yang tentu saja kurang menarik dan profesional. 

## Tampilan Aplikasi
1. Tampilan Login
   
   ![image](https://github.com/Pengelolaan-Daftar-Novel-CI4/Pengelolaan-Daftar-Novel-CI4-Kelompok1/assets/113124849/d3274464-7710-42a8-b794-6518add943db)

2.  Tampilan Home

   ![image](https://github.com/Pengelolaan-Daftar-Novel-CI4/Pengelolaan-Daftar-Novel-CI4-Kelompok1/assets/113124849/4fc20dd3-70a4-40de-8288-fbc4314b87ef)

3. Tampilan pada menu synopsis

   ![image](https://github.com/Pengelolaan-Daftar-Novel-CI4/Pengelolaan-Daftar-Novel-CI4-Kelompok1/assets/113124849/bdfb68da-2806-460c-bcca-a80bcdfc64a1)

4. Tampilan pada menu detail

   ![image](https://github.com/Pengelolaan-Daftar-Novel-CI4/Pengelolaan-Daftar-Novel-CI4-Kelompok1/assets/113124849/4fae485b-01e5-42d9-a5e7-c7c19dc6d583)

   ![image](https://github.com/Pengelolaan-Daftar-Novel-CI4/Pengelolaan-Daftar-Novel-CI4-Kelompok1/assets/113124849/a2595fae-c441-4d14-9fc1-5eee99b04b90)

   
6. Tampilan pada menu Update

   ![image](https://github.com/Pengelolaan-Daftar-Novel-CI4/Pengelolaan-Daftar-Novel-CI4-Kelompok1/assets/113124849/c1be722a-1cae-407c-bae3-7e03a72f5190)

7. Tampilan Delete Data

   ![image](https://github.com/Pengelolaan-Daftar-Novel-CI4/Pengelolaan-Daftar-Novel-CI4-Kelompok1/assets/113124849/c78707b6-9982-4a6c-9121-9391f0c069c7)

8. Tampilan pada menu Tambah Data Novel

   ![image](https://github.com/Pengelolaan-Daftar-Novel-CI4/Pengelolaan-Daftar-Novel-CI4-Kelompok1/assets/113124849/299d5b98-a9cc-492c-82ef-71c88b56dcbe)

   Berhasil disimpan

   ![image](https://github.com/Pengelolaan-Daftar-Novel-CI4/Pengelolaan-Daftar-Novel-CI4-Kelompok1/assets/113124849/947b510e-53ec-472e-9978-d8ae08354dd1)


9. Tampilan pada menu Genre

    ![image](https://github.com/Pengelolaan-Daftar-Novel-CI4/Pengelolaan-Daftar-Novel-CI4-Kelompok1/assets/113124849/778baea6-fc52-4f1c-8fbb-9c50b7e79cbd)
   

11. Tampilan menu tambah Genre

    ![image](https://github.com/Pengelolaan-Daftar-Novel-CI4/Pengelolaan-Daftar-Novel-CI4-Kelompok1/assets/113124849/a5106945-f6d9-40da-8a11-4b0c1a18162f)
    

12. Tampilan pada menu update genre

    ![image](https://github.com/Pengelolaan-Daftar-Novel-CI4/Pengelolaan-Daftar-Novel-CI4-Kelompok1/assets/113124849/617dc05d-67fe-4a6a-bea9-3d3758c8e48d)


13. Tampilan pada menu Contact

    ![image](https://github.com/Pengelolaan-Daftar-Novel-CI4/Pengelolaan-Daftar-Novel-CI4-Kelompok1/assets/113124849/a1ece182-79b8-4a61-852f-14389b169807)

14. Tampilan pada menu halaman About

    ![image](https://github.com/Pengelolaan-Daftar-Novel-CI4/Pengelolaan-Daftar-Novel-CI4-Kelompok1/assets/113124849/c0b8ca20-1f9f-4e80-8288-bd118a70b1fa)


## DAFTAR PUSTAKA

Ahmad Muhardian. (2016, November 29). Cara Menggunakan Composer untuk Manajemen Proyek PHP. Retrieved Juli 7, 2023, from petanikode.com: https://www.petanikode.com/php-composer/


Ahmad Muhardian. (2020, Agustus 20). Tutorial Codeigniter 4: Instalasi dan Persiapan Belajar Codeigniter 4. Retrieved Juli 7, 2023, from petanikode.com: https://www.2/codeigniter4-install/


Irfan Lutfi. (2023, Juni -). Panduan coldeigneter 4. Retrieved Juli 7, 2023, from github.com: https://github.com/irfanltf/temankoding-ci4#g-update-dan-delete-pada-database


MedanInCode. (2020, April 21). Aplikasi Login Sederhana Codeigniter 4. Retrieved Juli 7, 2023, from medanincode.com: https://medanincode.com/post/ci4/aplikasi-login-sederhana-codeigniter-4/


Naning Nur Wijayanti. (2021, Oktober 1). Database: Berikut adalah Pengertian, Fungsi, dan Jenis-jenisnya. Retrieved Juli 7, 2023, from www.niagahoster.co.id: https://www.niagahoster.co.id/blog/database-adalah/





     








   

  



   
   
   













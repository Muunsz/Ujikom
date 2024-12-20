<?php
session_start();

// Check if user is logged in
$loggedIn = isset($_SESSION['user_id']);
$username = $loggedIn ? $_SESSION['username'] : '';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelajaran SMKN 1 Katapang</title>
    <link rel="stylesheet" href="../css/Pelajaran.css"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <nav>
    <div class="nav-container">
            <ul>
                <li><a href="../html/dashboard.html">Beranda</a></li>
                <li class="dropdown">
                    <a href="#">Sekolah</a>
                    <ul class="dropdown-menu">
                        <li><a href="https://www.smkn1katapang.sch.id/about/">Profil Sekolah</a></li>
                        <li><a href="https://smkn1katapang.id/">Informasi</a></li>
                        <li><a href="https://smkn1katapang-bdg.sch.id/home">Berita</a></li>
                        <li><a href="https://www.smkn1katapang.sch.id/">Update PPDB</a></li>
                    </ul>
                </li>
                <li><a href="#" class="active">Pelajaran</a></li>
                <li><a href="../html/raport.html">Raport</a></li>
                <li><a href="../html/guru.html">Guru</a></li>
                <li><a href="../html/login.html">Login</a></li>
            </ul>
            <div class="burger-menu" onclick="toggleMenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="logo-section">
                <span class="logo-text">Rapot Online</span>
                <div class="logo">
                    <img src="../poto/115-SMKN_1_KATAPANG.png" alt="Logo">
                </div>
            </div>
        </div>
        <?php if ($loggedIn): ?>
            <li><a href="logout.php">Logout (<?php echo htmlspecialchars($username); ?>)</a></li>
        <?php else: ?>
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>
    </nav>
    <main>
        <header>
            <h1>Mata Pelajaran SMKN 1 Katapang</h1>
        </header>
        <section>
            <article>
            <h2>Kurikulum SMKN 1 Katapang</h2>
            
            <section>
                <h1>Mata Pelajaran Umum</h1>
        
                <h3>1. Matematika</h3>
                <p>Deskripsi: Matematika adalah pelajaran yang melatih kemampuan berpikir logis, analitis, dan kuantitatif melalui konsep-konsep bilangan, aljabar, geometri, kalkulus, dan statistika.</p>
                <h4>Komponen Pembelajaran:</h4>
                <ul>
                    <li>Aritmatika: Operasi bilangan, pecahan, persentase, dan lainnya.</li>
                    <li>Aljabar: Persamaan, fungsi, dan polinomial.</li>
                    <li>Geometri: Bentuk, ukuran, ruang, dan posisi.</li>
                    <li>Statistika dan Probabilitas: Pengumpulan, analisis data, dan peluang.</li>
                    <li>Kalkulus: Konsep turunan dan integral (untuk jenjang lebih tinggi).</li>
                </ul>
                <h4>Tujuan:</h4>
                <ul>
                    <li>Melatih pemecahan masalah logis.</li>
                    <li>Meningkatkan kemampuan analisis.</li>
                </ul>
        
                <h3>2. Bahasa Indonesia</h3>
                <p>Deskripsi: Pelajaran ini bertujuan meningkatkan kemampuan berbahasa Indonesia baik secara lisan maupun tulisan.</p>
                <h4>Komponen Pembelajaran:</h4>
                <ul>
                    <li>Menulis: Pembuatan esai, artikel, dan karya sastra.</li>
                    <li>Membaca: Pemahaman teks naratif, eksposisi, dan argumentasi.</li>
                    <li>Berbicara: Keterampilan diskusi, presentasi, dan debat.</li>
                    <li>Sastra Indonesia: Mengenal puisi, prosa, dan drama klasik maupun modern.</li>
                </ul>
                <h4>Tujuan:</h4>
                <ul>
                    <li>Menguasai komunikasi formal dan informal.</li>
                    <li>Mengapresiasi karya sastra Indonesia.</li>
                </ul>
        
                <h3>3. Bahasa Inggris</h3>
                <p>Deskripsi: Pelajaran ini melatih siswa berkomunikasi dalam bahasa Inggris secara lisan dan tertulis.</p>
                <h4>Komponen Pembelajaran:</h4>
                <ul>
                    <li>Speaking: Keterampilan berbicara dan percakapan.</li>
                    <li>Listening: Pemahaman dialog dan teks audio.</li>
                    <li>Reading: Pemahaman teks naratif dan informatif.</li>
                    <li>Writing: Menulis paragraf, surat, dan laporan.</li>
                    <li>Grammar dan Vocabulary: Struktur kalimat dan kosa kata.</li>
                </ul>
                <h4>Tujuan:</h4>
                <ul>
                    <li>Meningkatkan kemampuan bahasa Inggris untuk keperluan akademik dan profesional.</li>
                </ul>
        
                <h3>4. PPKn (Pendidikan Pancasila dan Kewarganegaraan)</h3>
                <p>Deskripsi: Pelajaran ini mendidik siswa memahami nilai-nilai Pancasila dan menjadi warga negara yang baik.</p>
                <h4>Komponen Pembelajaran:</h4>
                <ul>
                    <li>Pancasila: Filosofi dasar negara Indonesia.</li>
                    <li>UUD 1945: Pemahaman konstitusi.</li>
                    <li>Hak dan Kewajiban Warga Negara: Tanggung jawab terhadap negara.</li>
                    <li>Demokrasi: Prinsip dan praktik demokrasi di Indonesia.</li>
                </ul>
                <h4>Tujuan:</h4>
                <ul>
                    <li>Membentuk karakter siswa menjadi warga negara yang cinta tanah air.</li>
                </ul>
        
                <h3>5. Pendidikan Agama</h3>
                <p>Deskripsi: Pelajaran ini memperdalam pemahaman tentang nilai-nilai agama sesuai keyakinan siswa.</p>
                <h4>Komponen Pembelajaran:</h4>
                <ul>
                    <li>Aqidah: Keyakinan agama.</li>
                    <li>Fiqih: Aturan ibadah dan kehidupan sehari-hari.</li>
                    <li>Sejarah Agama: Kisah para nabi dan tokoh agama.</li>
                    <li>Etika: Perilaku berdasarkan ajaran agama.</li>
                </ul>
                <h4>Tujuan:</h4>
                <ul>
                    <li>Membentuk pribadi yang berakhlak mulia.</li>
                </ul>
        
                <h3>6. Pendidikan Jasmani (Penjas)</h3>
                <p>Deskripsi: Pelajaran ini mengutamakan pengembangan fisik, kebugaran, dan kesehatan melalui olahraga.</p>
                <h4>Komponen Pembelajaran:</h4>
                <ul>
                    <li>Olahraga: Sepak bola, bola basket, voli, dan lainnya.</li>
                    <li>Kesehatan: Pengetahuan tentang nutrisi, kebugaran, dan pencegahan cedera.</li>
                    <li>Psikomotorik: Latihan koordinasi dan keterampilan fisik.</li>
                </ul>
                <h4>Tujuan:</h4>
                <ul>
                    <li>Meningkatkan kebugaran dan kesehatan fisik.</li>
                </ul>
        
                <h3>7. IPAS (Ilmu Pengetahuan Alam dan Sosial)</h3>
                <p>Deskripsi: Mata pelajaran integrasi ilmu alam dan sosial.</p>
                <h4>Komponen Pembelajaran:</h4>
                <ul>
                    <li>Alam: Biologi, fisika, dan kimia dasar.</li>
                    <li>Sosial: Geografi, sejarah, dan sosiologi.</li>
                </ul>
                <h4>Tujuan:</h4>
                <ul>
                    <li>Membentuk pemahaman holistik tentang fenomena alam dan sosial.</li>
                </ul>
        
                <h3>8. Sunda</h3>
                <p>Deskripsi: Pelajaran ini memperkenalkan budaya dan bahasa Sunda kepada siswa.</p>
                <h4>Komponen Pembelajaran:</h4>
                <ul>
                    <li>Bahasa Sunda: Menulis dan berbicara dalam bahasa Sunda.</li>
                    <li>Sastra Sunda: Membaca dan memahami karya sastra tradisional.</li>
                    <li>Budaya Sunda: Mengenal tradisi dan adat istiadat.</li>
                </ul>
                <h4>Tujuan:</h4>
                <ul>
                    <li>Melestarikan budaya daerah.</li>
                </ul>
        
                <h3>9. Seni Musik</h3>
                <p>Deskripsi: Melatih keterampilan musik dan apresiasi seni.</p>
                <h4>Komponen Pembelajaran:</h4>
                <ul>
                    <li>Teori Musik: Notasi dan harmoni.</li>
                    <li>Praktik Instrumen: Memainkan alat musik seperti gitar, piano, atau angklung.</li>
                    <li>Apresiasi Musik: Mengenal berbagai genre musik.</li>
                </ul>
                <h4>Tujuan:</h4>
                <ul>
                    <li>Mengembangkan kemampuan bermusik.</li>
                </ul>
        
                <h3>10. Sejarah</h3>
                <p>Deskripsi: Mempelajari peristiwa-peristiwa penting dalam sejarah Indonesia dan dunia.</p>
                <h4>Komponen Pembelajaran:</h4>
                <ul>
                    <li>Sejarah Indonesia: Proklamasi, revolusi, dan reformasi.</li>
                    <li>Sejarah Dunia: Perang dunia, revolusi industri, dan kolonialisme.</li>
                </ul>
                <h4>Tujuan:</h4>
                <ul>
                    <li>Memahami perjalanan bangsa dan dunia.</li>
                </ul>
        
                <h3>11. Bahasa Jepang</h3>
                <p>Deskripsi: Mengenalkan dasar-dasar bahasa Jepang.</p>
                <h4>Komponen Pembelajaran:</h4>
                <ul>
                    <li>Hiragana dan Katakana: Sistem penulisan dasar Jepang.</li>
                    <li>Kosa Kata dan Tata Bahasa: Percakapan sederhana.</li>
                    <li>Budaya Jepang: Tradisi dan kebiasaan masyarakat Jepang.</li>
                </ul>
                <h4>Tujuan:</h4>
                <ul>
                    <li>Meningkatkan wawasan tentang budaya asing.</li>
                </ul>
        
                <h3>12. Informatika</h3>
                <p>Deskripsi: Mempelajari dasar-dasar teknologi informasi dan komunikasi.</p>
                <h4>Komponen Pembelajaran:</h4>
                <ul>
                    <li>Pemrograman: Dasar-dasar coding.</li>
                    <li>Teknologi Informasi: Internet, keamanan data.</li>
                    <li>Aplikasi Office: Microsoft Word, Excel, PowerPoint.</li>
                </ul>
                <h4>Tujuan:</h4>
                <ul>
                    <li>Menguasai teknologi informasi untuk kebutuhan akademik dan profesional.</li>
                </ul>
        
                <h3>13. MPP (Muatan Lokal Program Produktif)</h3>
                <p>Deskripsi: Pelajaran ini mendukung jurusan produktif di tiap sekolah.</p>
                <h4>Komponen Pembelajaran:</h4>
                <ul>
                    <li>Tergantung pada kebutuhan kejuruan sekolah.</li>
                </ul>
        
                <h3>14. PKK (Produk Kreatif dan Kewirausahaan)</h3>
                <p>Deskripsi: Pelajaran ini mendorong siswa menjadi wirausaha kreatif.</p>
                <h4>Komponen Pembelajaran:</h4>
                <ul>
                    <li>Ide Produk: Menciptakan produk inovatif.</li>
                    <li>Kewirausahaan: Strategi bisnis dan pemasaran.</li>
                    <li>Pengelolaan Usaha: Administrasi dan pembukuan.</li>
                </ul>
                <h4>Tujuan:</h4>
                <ul>
                    <li>Melatih siswa berwirausaha.</li>
                </ul>
        
                <h3>15. BK (Bimbingan Konseling)</h3>
                <p>Deskripsi: Mendampingi siswa dalam pengembangan diri.</p>
                <h4>Komponen Pembelajaran:</h4>
                <ul>
                    <li>Pengembangan Diri: Mengatasi masalah pribadi dan akademik.</li>
                    <li>Bimbingan Karier: Memilih jalur pendidikan atau pekerjaan.</li>
                    <li>Bimbingan Sosial: Interaksi positif dengan lingkungan.</li>
                </ul>
                <h4>Tujuan:</h4>
                <ul>
                    <li>Membantu siswa menemukan potensi diri.</li>
                </ul>
            </section>
        
            <section>
                <h2>Jurusan di SMKN 1 Katapang</h2>
        
                <h3>1. Multimedia</h3>
                <p>Deskripsi: Jurusan ini berfokus pada penguasaan teknologi untuk menciptakan berbagai produk kreatif berbasis media digital, seperti video, animasi, desain grafis, dan fotografi.</p>
                <h4>Kompetensi yang Dipelajari:</h4>
                <ul>
                    <li>Desain Grafis: Penggunaan perangkat lunak seperti Adobe Photoshop, CorelDraw, dan Illustrator.</li>
                    <li>Animasi 2D/3D: Pembuatan karakter animasi menggunakan Blender, Toon Boom, atau Adobe Animate.</li>
                    <li>Video Editing: Editing film dan video menggunakan Adobe Premiere Pro atau DaVinci Resolve.</li>
                    <li>Fotografi Digital: Teknik pemotretan, pencahayaan, dan manipulasi gambar dengan Lightroom.</li>
                    <li>Produksi Audio: Teknik perekaman suara dan editing menggunakan Audacity atau FL Studio.</li>
                </ul>
                <h4>Prospek Karier:</h4>
                <p>Desainer grafis, animator, editor video, fotografer profesional, content creator, atau teknisi audio visual.</p>
        
                <h3>2. Rekayasa Perangkat Lunak (RPL)</h3>
                <p>Deskripsi: Jurusan ini mendidik siswa menjadi pengembang perangkat lunak (software developer) yang terampil dalam analisis, perancangan, pengkodean, dan pemeliharaan aplikasi.</p>
                <h4>Kompetensi yang Dipelajari:</h4>
                <ul>
                    <li>Pemrograman: Belajar bahasa pemrograman seperti Python, Java, C++, PHP, dan JavaScript.</li>
                    <li>Manajemen Basis Data: Penggunaan database seperti MySQL, MongoDB, atau PostgreSQL untuk menyimpan dan mengelola data.</li>
                    <li>Pengembangan Aplikasi Web: Membangun aplikasi menggunakan framework seperti Laravel, React, dan Node.js.</li>
                    <li>Pengembangan Mobile: Membuat aplikasi Android atau iOS menggunakan Android Studio atau Flutter.</li>
                    <li>UI/UX Design: Merancang antarmuka aplikasi yang menarik dan ramah pengguna.</li>
                    <li>Keamanan Aplikasi: Teknik mencegah serangan siber seperti SQL Injection atau Cross-Site Scripting (XSS).</li>
                </ul>
                <h4>Prospek Karier:</h4>
                <p>Software engineer, programmer, pengembang aplikasi mobile/web, atau data scientist.</p>
        
                <h3>3. Teknik Elektronika Industri</h3>
                <p>Deskripsi: Jurusan ini mempelajari penerapan teknologi elektronika dalam proses industri, khususnya sistem otomasi dan kontrol.</p>
                <h4>Kompetensi yang Dipelajari:</h4>
                <ul>
                    <li>Dasar Elektronika: Pemahaman komponen elektronik seperti dioda, transistor, dan IC.</li>
                    <li>Pengendalian Otomatis: Pemrograman dan instalasi PLC (Programmable Logic Controller).</li>
                    <li>Teknologi Human Machine Interface (HMI).</li>
                    <li>Robotika Industri: Perancangan dan pengendalian robot industri.</li>
                    <li>Sistem Sensor dan Aktuator: Penggunaan sensor untuk mendeteksi parameter fisik (suhu, tekanan, dll).</li>
                    <li>Maintenance Mesin Elektronik: Pemeliharaan dan perbaikan alat elektronik industri.</li>
                </ul>
                <h4>Prospek Karier:</h4>
                <p>Teknisi otomatisasi, ahli kontrol mesin, teknisi robotika, atau perancang sistem elektronik.</p>
        
                <h3>4. Teknik Kendaraan Ringan Otomotif</h3>
                <p>Deskripsi: Jurusan ini mendidik siswa untuk menjadi mekanik kendaraan bermotor yang ahli dalam perawatan dan perbaikan kendaraan ringan.</p>
                <h4>Kompetensi yang Dipelajari:</h4>
                <ul>
                    <li>Sistem Mesin: Diagnostik dan perbaikan mesin bensin dan diesel.</li>
                    <li>Kelistrikan Kendaraan: Sistem pengapian, ECU (Engine Control Unit), dan kontrol elektronik kendaraan.</li>
                    <li>Transmisi dan Suspensi: Perbaikan sistem transmisi manual/otomatis dan suspensi kendaraan.</li>
                    <li>Teknologi Kendaraan Modern: Teknologi hybrid dan kendaraan listrik.</li>
                    <li>Sistem Rem dan Kemudi: Perbaikan dan penyetelan sistem rem ABS dan power steering.</li>
                </ul>
                <h4>Prospek Karier:</h4>
                <p>Mekanik, teknisi kendaraan hybrid, atau konsultan teknis otomotif.</p>
        
                <h3>5. Teknik Komputer dan Jaringan</h3>
                <p>Deskripsi: Jurusan ini fokus pada instalasi, konfigurasi, dan pemeliharaan jaringan komputer.</p>
                <h4>Kompetensi yang Dipelajari:</h4>
                <ul>
                    <li>Dasar Perangkat Keras: Merakit komputer dan pengelolaan perangkat jaringan.</li>
                    <li>Administrasi Jaringan: Instalasi LAN, WAN, dan WLAN menggunakan router dan switch.</li>
                    <li>Keamanan Jaringan: Menerapkan firewall dan enkripsi data untuk perlindungan jaringan.</li>
                    <li>Administrasi Server: Pengelolaan server berbasis Linux atau Windows.</li>
                    <li>Virtualisasi: Membuat lingkungan virtual menggunakan VMware atau VirtualBox.</li>
                </ul>
                <h4>Prospek Karier:</h4>
                <p>Teknisi jaringan, administrator sistem, atau spesialis keamanan IT.</p>
        
                <h3>6. Teknik Mekatronika</h3>
                <p>Deskripsi: Jurusan ini menggabungkan elemen mekanik, elektronik, dan informatika untuk menciptakan sistem otomatis.</p>
                <h4>Kompetensi yang Dipelajari:</h4>
                <ul>
                    <li>Desain Mekanik: Pemrograman mesin CNC untuk manufaktur presisi.</li>
                    <li>Pengendalian Elektronik: Merancang sistem kontrol otomatis berbasis mikrokontroler (Arduino).</li>
                    <li>Sensor dan Aktuator: Penerapan sensor suhu, cahaya, atau tekanan untuk kontrol otomatis.</li>
                    <li>Pemrograman Robotik: Teknik pemrograman robot industri.</li>
                </ul>
                <h4>Prospek Karier:</h4>
                <p>Operator mesin otomatis, teknisi robotik, atau perancang sistem otomasi.</p>
        
                <h3>7. Teknik Pemesinan</h3>
                <p>Deskripsi: Jurusan ini berfokus pada teknik manufaktur untuk menciptakan komponen mekanis.</p>
                <h4>Kompetensi yang Dipelajari:</h4>
                <ul>
                    <li>Operasi Mesin: Penggunaan mesin bubut, milling, dan CNC.</li>
                    <li>Gambar Teknik: Membaca dan membuat gambar teknik untuk manufaktur.</li>
                    <li>Pengelasan: Teknik las MIG, TIG, dan SMAW.</li>
                    <li>Pengukuran Presisi: Metrologi industri menggunakan alat seperti mikrometer dan dial gauge.</li>
                </ul>
                <h4>Prospek Karier:</h4>
                <p>Operator mesin, teknisi manufaktur, atau spesialis CAD/CAM.</p>
        
                <h3>8. Teknik Penyempurnaan Tekstil</h3>
                <p>Deskripsi: Jurusan ini berfokus pada pengolahan dan penyempurnaan kain agar sesuai dengan standar industri.</p>
                <h4>Kompetensi yang Dipelajari:</h4>
                <ul>
                    <li>Proses Pewarnaan: Teknik pencelupan dan printing pada kain.</li>
                    <li>Finishing Tekstil: Penambahan fitur seperti anti-air atau anti-kerut pada kain.</li>
                    <li>Teknologi Mesin Tekstil: Pengoperasian mesin finishing dan pengendalian kualitas.</li>
                </ul>
                <h4>Prospek Karier:</h4>
                <p>Teknisi tekstil, pengawas produksi, atau ahli kontrol kualitas.</p>
        
                <h3>9. Teknik Perancangan dan Gambar Mesin</h3>
                <p>Deskripsi: Jurusan ini mendidik siswa untuk merancang dan membuat sistem mekanis.</p>
                <h4>Kompetensi yang Dipelajari:</h4>
                <ul>
                    <li>Desain CAD: Penggunaan perangkat lunak seperti AutoCAD atau SolidWorks.</li>
                    <li>Simulasi Mekanis: Menguji kekuatan material menggunakan perangkat lunak simulasi.</li>
                    <li>Pemilihan Material: Menentukan bahan yang sesuai untuk kebutuhan teknis.</li>
                </ul>
                <h4>Prospek Karier:</h4>
                <p>Drafter CAD, perancang produk, atau insinyur desain mekanis.</p>
            </article>
        </section>
    </main>

    <footer>
    <h1>SMK Negeri 1 Katapang</h1>
        <div class="footer-nav">
            <a href="../html/saran dan pengaduan.html">Saran</a>
            <a href="https://www.smkn1katapang.sch.id">Sekolah</a>
            <a href="https://www.instagram.com/syann_n/">Admin</a>
        </div>
        <h3>Connect with us</h3>
        <div class="social-icons">
            <a href="https://instagram.com/smkn1katapang/" target="_blank" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.youtube.com/@smkn1katapang242" target="_blank" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            <a href="https://www.tiktok.com/@smkn1katapang" target="_blank" aria-label="TikTok"><i class="fab fa-tiktok"></i></a>
            <a href="https://www.facebook.com/groups/smkn1katapang" target="_blank" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="https://whatsapp.com" target="_blank" aria-label="Whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
        <p>Copyright 2024, SMK Negeri 1 Katapang. Hak cipta dilindungi undang-undang.</p>
    </footer>

    <script src="../js/Pelajaran.js"></script>
</body>
</html>
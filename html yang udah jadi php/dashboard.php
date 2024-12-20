<?php
// Start the session
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
    <meta name="description" content="Sistem Raport Online SMKN 1 Katapang mempermudah siswa mengakses nilai raport secara online, kapan saja dan di mana saja.">
    <meta name="keywords" content="SMKN 1 Katapang, Sistem Raport Online, Pendidikan, Nilai Raport">
    <meta name="author" content="SMKN 1 Katapang">
    <title>Sistem Raport Online SMKN 1 Katapang</title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body style="background-color: #000000; color: #ffffff; margin: 0;">
    <!-- Navigation Bar --> 
    <nav> 
        <div class="nav-container"> 
            <ul> 
                <li><a href="#" class="active">Beranda</a></li> 
                <li class="dropdown">
                    <a href="#">Sekolah</a>
                    <ul class="dropdown-menu"> 
                        <li><a href="https://www.smkn1katapang.sch.id/about/">Profil Sekolah</a></li> 
                        <li><a href="https://smkn1katapang.id/">Informasi</a></li> 
                        <li><a href="https://smkn1katapang-bdg.sch.id/home">Berita</a></li>
                        <li><a href="https://www.smkn1katapang.sch.id/">Update PPDB</a></li>
                    </ul>
                </li>
                <li><a href="Pelajaran.php">Pelajaran</a></li>
                <li><a href="raport.php">Raport</a></li>
                <li><a href="guru.php">Guru</a></li>
                <?php if ($loggedIn): ?>
                    <li><a href="logout.php">Logout (<?php echo htmlspecialchars($username); ?>)</a></li>
                <?php else: ?>
                    <li><a href="login.php">Login</a></li>
                <?php endif; ?>
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
    </nav>

    <!-- Horizontal Line -->
  <hr>

<!-- Hero Section -->
<section class="hero-section">
  <div class="hero-content">
    <div class="hero-text">
      <h1>Hai, Selamat Datang</h1>
      <h2>Cek Nilai Raport Online Hanya di Sini!</h2>
      <p>
        Halo semuanya, kami dari SMKN 1 Katapang, 
        sekolah yang telah berdiri sejak tahun 1999. 
        Kali ini kami memperkenalkan sistem baru dari sekolah kami, 
        yaitu melihat nilai raport secara online. 
        Website ini bertujuan untuk mempermudah para pelajar 
        dalam mengakses hasil nilai raport mereka kapan saja dan di mana saja.
      </p>
      <a href="../html/raport.html" class="hire-me-btn">Cari Nilai</a>
    </div>
    <div class="hero-image">
      <img src="../poto/115-SMKN_1_KATAPANG.png" alt="Logo SMKN 1 Katapang" loading="lazy">
    </div>
  </div>
</section>

<!-- Section: What Can I Do For Your Needs -->
<section class="services">
  <h2>Kenali Sistem Baru Kami</h2>
  <div class="satu">
    <h1>Apa yang Bisa Website Ini Lakukan Untuk Anda?</h1>
    <h4>
      Kami hadir untuk mempermudah siswa-siswi SMKN 1 Katapang dalam 
      mengakses nilai raport mereka secara online. Dengan sistem ini, 
      semua data dapat diakses dengan mudah dan cepat kapan saja dan di mana saja.
    </h4>
  </div>
  <blockquote>
    "Teknologi adalah jembatan menuju kemudahan, efisiensi, dan masa depan pendidikan."
    <cite>— SMKN 1 Katapang</cite>
  </blockquote>
  <div class="service-list">
    <div class="service-item">
      <img src="../poto/NILAI RAPORT.png" alt="Ikon fitur lihat nilai raport" loading="lazy">
      <h3>Lihat Nilai Raport</h3>
      <p>Sistem ini memungkinkan Anda untuk mengakses hasil nilai raport secara mudah dan transparan.</p>
      <a href="../html/raport.html">Lihat Nilai →</a>
    </div>
    <div class="service-item">
      <img src="../poto/KENAIKAN.png" alt="Ikon fitur pantau perkembangan" loading="lazy">
      <h3>Pantau Perkembangan Dan Informasi Sekolah</h3>
      <p>Dengan fitur ini, siswa dapat memantau perkembangan akademik mereka secara berkala.</p>
      <a href="https://smkn1katapang-bdg.sch.id/home">Pantau Sekarang →</a>
    </div>
    <div class="service-item">
      <img src="../poto/HUBUNGI LAYANAN.png" alt="Ikon fitur layanan bantuan" loading="lazy">
      <h3>Layanan Bantuan</h3>
      <p>Tim kami siap membantu jika Anda mengalami kendala dalam mengakses sistem atau data.</p>
      <a href="https://www.instagram.com/pplg_smkn1katapang/">Hubungi Kami →</a>
    </div>
  </div>
</section>  

<!-- Section: Mata Pelajaran -->
<section class="skills">
  <h2>Mata Pelajaran</h2>
  <div class="satu">
    <h1>Daftar Mata Pelajaran SMKN 1 Katapang</h1>
    <p>
      Berikut adalah daftar mata pelajaran yang diajarkan di SMKN 1 Katapang. 
      Dengan sistem ini, siswa dapat dengan mudah memantau nilai raport mereka 
      berdasarkan mata pelajaran yang tersedia.
    </p>
  </div>
  <blockquote>
    "Pendidikan adalah senjata paling ampuh untuk mengubah dunia."
    <cite>— Nelson Mandela</cite>
  </blockquote>
  <div class="tools-grid">
    <img src="../poto/mtk.png" alt="Matematika">
    <img src="../poto/b indo.png" alt="Bahasa Indonesia">
    <img src="../poto/inggris.png" alt="Bahasa Inggris">
    <img src="../poto/bengkel.png" alt="Produktif Kejuruan">
    <img src="../poto/ppkn.png" alt="PPKN">
    <img src="../poto/agama.png" alt="Pendidikan Agama">
    <img src="../poto/pjok.png" alt="Pendidikan Jasmani">
    <img src="../poto/ipas.png" alt="Ipas">
    <img src="../poto/sunda.png" alt="Sunda">
    <img src="../poto/seni.png" alt="Seni Musik">
    <img src="../poto/sejarah.png" alt="Sejarah">
    <img src="../poto/jepang.png" alt="Bahasa Jepang">
    <img src="../poto/infor.png" alt="Informatika">
    <img src="../poto/mpp.png" alt="MPP">
    <img src="../poto/pkk.png" alt="PKK">
    <img src="../poto/bk.png" alt="BK">
  </div>
</section>

<!-- Dokumentasi Sekolah -->
<section class="dokumentasi">
<h2>Dokumentasi SMKN 1 Katapang</h2>
<div class="slider-container">
  <div class="slides">
    <div class="slide">
      <img src="../poto/RPL.png">
      <p>REKAYASA PERANGKAT LUNAK DAN GIM</p>
    </div>
    <div class="slide">
      <img src="../poto/TJKT.png">
      <p>TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI</p>
    </div>
    <div class="slide">
      <img src="../poto/TKSTIL.png">
      <p>TEKNIK TEKSTIL</p>
    </div>
    <div class="slide">
      <img src="../poto/BP.png">
      <p>BROADCASTING & PERFILMAN</p>
    </div>
    <div class="slide">
      <img src="../poto/OTO.png">
      <p>TEKNIK OTOMOTIF</p>
    </div>
    <div class="slide">
      <img src="../poto/MESIN.png">
      <p>TEKNIK PERMESINAN</p>
    </div>
    <div class="slide">
      <img src="../poto/ELEKTRO.png">
      <p>TEKNIK ELEKTRONIKA</p>
    </div>
  </div>
  <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
  <button class="next" onclick="moveSlide(1)">&#10095;</button>
</div>
</section>

  <!-- Educational History Section -->
  <section class="educational-history">
    <div class="education-content">
      <div class="education-left">
        <h2>Ini Adalah Cara</h2>
        <h1>Sistem Rapor Online Membantu Anda Berkembang</h1>
        <p>
          Sistem rapor online ini mempermudah siswa dan orang tua untuk mendapatkan 
          informasi nilai secara cepat, akurat, dan terintegrasi.
        </p>
        <blockquote>
          "Pendidikan adalah jembatan menuju masa depan yang cerah."
          <cite>— SMKN 1 Katapang</cite>
        </blockquote>
      </div>
      <div class="education-right">
        <ul>
          <li>
            <span class="date">19 - November - 2024 - Sekarang</span>
            <h2>SMKN 1 Katapang</h2>
            <h3>Implementasi Sistem Rapor Online</h3>
            <p>
              Sistem ini membantu siswa untuk memantau hasil belajar secara digital 
              dengan transparansi dan keakuratan data.
            </p>
          </li>
          <li>
            <span class="date">8 - November - 2024</span>
            <h2>Peningkatan Sistem</h2>
            <h3>Integrasi dengan Data Akademik</h3>
            <p>
              Menyediakan fitur tambahan seperti grafik perkembangan nilai 
              dan detail rapor setiap semester.
            </p>
          </li>
          <li>
            <span class="date">1 - November - 2024</span>
            <h2>Pengembangan Awal</h2>
            <h3>Proyek Digitalisasi Nilai</h3>
            <p>
              Dimulai sebagai inisiatif digitalisasi hasil belajar siswa 
              melalui platform yang aman dan mudah diakses.
            </p>
          </li>
        </ul>
      </div>
    </div>
  </section>

    <footer>
    <h1>SMK Negeri 1 Katapang</h1>
    <p>Jl. Ceuri Ters Kopo Km. 13.5, Kecamatan Katapang, Kabupaten Bandung, Jawa Barat.</p>
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

    <script src="../js/dashboard.js"></script>
</body>
</html>
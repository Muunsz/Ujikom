<?php
session_start();

// Check if teacher is logged in
if (!isset($_SESSION['teacher_id'])) {
    header("Location: login-guru.php");
    exit();
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Here you would typically process the form data, such as saving to a database
    // For this example, we'll just set a success message
    $successMessage = "Raport berhasil disimpan!";
}

// Fetch existing reports
// This is where you would typically query your database for existing reports
// For this example, we'll use dummy data
$existingReports = [
    ['id' => 1, 'name' => 'John Doe', 'nis' => '12345', 'class' => '11 RPL'],
    ['id' => 2, 'name' => 'Jane Smith', 'nis' => '67890', 'class' => '10 TKJ'],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Raport Online SMKN 1 Katapang</title>
    <link rel="stylesheet" href="../css/guru.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                <li><a href="../html/Pelajaran.html">Pelajaran</a></li>
                <li><a href="../html/raport.html">Raport</a></li>
                <li><a href="../html/guru.html"  class="active">Guru</a></li>
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
    </nav>

    <div class="container">
        <h1>Admin Raport Online SMKN 1 Katapang</h1>
        
        <?php
        if (isset($successMessage)) {
            echo "<p style='color: green;'>$successMessage</p>";
        }
        ?>

        <form id="reportForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <h1>Laporan Capaian Kompetensi Peserta Didik SMKN 1 Katapang</h1>
            <form id="reportForm">
                <div class="data-item">
    <label for="fotoSiswa">Foto Siswa:</label>
    <input type="file" id="fotoSiswa" name="fotoSiswa" accept="image/*">
                </div>

                <label for="nama">Nama Peserta Didik:</label>
                <input type="text" id="nama" name="nama" required>
    
                <label for="nis">Nomor Induk Siswa:</label>
                <input type="text" id="nis" name="nis" required>
    
                <label for="ttl">Tempat, Tanggal Lahir:</label>
                <input type="text" id="ttl" name="ttl" required>
    
                <label for="jenisKelamin">Jenis Kelamin:</label>
                <select id="jenisKelamin" name="jenisKelamin" required>
                    <option value="">Pilih</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
    
                <label for="agama">Agama:</label>
                <input type="text" id="agama" name="agama" required>
    
                <label for="statusKeluarga">Status dalam Keluarga:</label>
                <input type="text" id="statusKeluarga" name="statusKeluarga" required>
    
                <label for="anakKe">Anak ke-:</label>
                <input type="number" id="anakKe" name="anakKe" required>
    
                <label for="alamat">Alamat Peserta Didik:</label>
                <textarea id="alamat" name="alamat" required></textarea>
    
                <label for="telepon">Nomor Telepon:</label>
                <input type="tel" id="telepon" name="telepon">
    
                <label for="asalSekolah">Asal Sekolah:</label>
                <input type="text" id="asalSekolah" name="asalSekolah" required>
    
                <label for="diterimaDiKelas">Diterima di Kelas:</label>
                <input type="text" id="diterimaDiKelas" name="diterimaDiKelas" required>
    
                <label for="tanggalDiterima">Tanggal Diterima:</label>
                <input type="date" id="tanggalDiterima" name="tanggalDiterima" required>
    
                <h2>Data Orang Tua</h2>
                <label for="namaAyah">Nama Ayah:</label>
                <input type="text" id="namaAyah" name="namaAyah" required>
    
                <label for="namaIbu">Nama Ibu:</label>
                <input type="text" id="namaIbu" name="namaIbu" required>
    
                <label for="alamatOrtu">Alamat Orang Tua:</label>
                <textarea id="alamatOrtu" name="alamatOrtu" required></textarea>
    
                <label for="teleponOrtu">Nomor Telepon Orang Tua:</label>
                <input type="tel" id="teleponOrtu" name="teleponOrtu">
    
                <label for="pekerjaanAyah">Pekerjaan Ayah:</label>
                <input type="text" id="pekerjaanAyah" name="pekerjaanAyah" required>
    
                <label for="pekerjaanIbu">Pekerjaan Ibu:</label>
                <input type="text" id="pekerjaanIbu" name="pekerjaanIbu" required>
    
                <h2>Data Wali (Jika Ada)</h2>
                <label for="namaWali">Nama Wali:</label>
                <input type="text" id="namaWali" name="namaWali">
    
                <label for="alamatWali">Alamat Wali:</label>
                <textarea id="alamatWali" name="alamatWali"></textarea>
    
                <label for="teleponWali">Nomor Telepon Wali:</label>
                <input type="tel" id="teleponWali" name="teleponWali">
    
                <label for="pekerjaanWali">Pekerjaan Wali:</label>
                <input type="text" id="pekerjaanWali" name="pekerjaanWali">
    
                <h2>Nilai Akademik</h2>
                <div class="grades">
                    <div class="grade-item">
                        <label for="matematika">Matematika:</label>
                        <input type="number" id="matematika" name="matematika" min="0" max="100" required>
                    </div>
                    <div class="grade-item">
                        <label for="bahasaIndonesia">Bahasa Indonesia:</label>
                        <input type="number" id="bahasaIndonesia" name="bahasaIndonesia" min="0" max="100" required>
                    </div>
                    <div class="grade-item">
                        <label for="bahasaInggris">Bahasa Inggris:</label>
                        <input type="number" id="bahasaInggris" name="bahasaInggris" min="0" max="100" required>
                    </div>
                    <div class="grade-item">
                        <label for="ppkn">PPKN:</label>
                        <input type="number" id="ppkn" name="ppkn" min="0" max="100" required>
                    </div>
                    <div class="grade-item">
                        <label for="pendidikanAgama">Pendidikan Agama:</label>
                        <input type="number" id="pendidikanAgama" name="pendidikanAgama" min="0" max="100" required>
                    </div>
                    <div class="grade-item">
                        <label for="pendidikanJasmani">Pendidikan Jasmani:</label>
                        <input type="number" id="pendidikanJasmani" name="pendidikanJasmani" min="0" max="100" required>
                    </div>
                    <div class="grade-item">
                        <label for="ipas">IPAS:</label>
                        <input type="number" id="ipas" name="ipas" min="0" max="100" required>
                    </div>
                    <div class="grade-item">
                        <label for="bahasaSunda">Bahasa Sunda:</label>
                        <input type="number" id="bahasaSunda" name="bahasaSunda" min="0" max="100" required>
                    </div>
                    <div class="grade-item">
                        <label for="seniMusik">Seni Musik:</label>
                        <input type="number" id="seniMusik" name="seniMusik" min="0" max="100" required>
                    </div>
                    <div class="grade-item">
                        <label for="sejarah">Sejarah:</label>
                        <input type="number" id="sejarah" name="sejarah" min="0" max="100" required>
                    </div>
                    <div class="grade-item">
                        <label for="bahasaJepang">Bahasa Jepang:</label>
                        <input type="number" id="bahasaJepang" name="bahasaJepang" min="0" max="100" required>
                    </div>
                    <div class="grade-item">
                        <label for="informatika">Informatika:</label>
                        <input type="number" id="informatika" name="informatika" min="0" max="100" required>
                    </div>
                    <div class="grade-item">
                        <label for="mataPelajaranPilihan">Mata Pelajaran Pilihan:</label>
                        <input type="number" id="mataPelajaranPilihan" name="mataPelajaranPilihan" min="0" max="100" required>
                    </div>
                    <div class="grade-item">
                        <label for="pkk">PKK:</label>
                        <input type="number" id="pkk" name="pkk" min="0" max="100" required>
                    </div>
                    <div class="grade-item">
                        <label for="bimbinganKonseling">Bimbingan Konseling:</label>
                        <input type="number" id="bimbinganKonseling" name="bimbinganKonseling" min="0" max="100" required>
                    </div>
                    <div class="grade-item">
                        <label for="produktif">Produktif:</label>
                        <input type="number" id="produktif" name="produktif" min="0" max="100" required>
                    </div>
                </div>
                
                <h2>Informasi Tambahan</h2>
                <label for="fase">Fase:</label>
                <input type="text" id="fase" name="fase" required>
    
                <label for="semester">Semester:</label>
                <select id="semester" name="semester" required>
                    <option value="">Pilih</option>
                    <option value="Ganjil">Ganjil</option>
                    <option value="Genap">Genap</option>
                </select>
    
                <label for="tahunPelajaran">Tahun Pelajaran:</label>
                <input type="text" id="tahunPelajaran" name="tahunPelajaran" required>
    
                <h2>Ekstrakurikuler</h2>
            <div id="ekstrakurikuler" class="ekstrakurikuler-container">
                <div class="ekstrakurikuler-item">
                    <label for="ekskul1">Ekstrakurikuler 1:</label>
                    <input type="text" id="ekskul1" name="ekskul1" placeholder="Nama Ekstrakurikuler">
                    <select id="nilaiEkskul1" name="nilaiEkskul1">
                        <option value="">Pilih Nilai</option>
                        <option value="Baik">Baik</option>
                        <option value="Cukup">Cukup</option>
                        <option value="Kurang">Kurang</option>
                    </select>
                </div>
                <div class="ekstrakurikuler-item">
                    <label for="ekskul2">Ekstrakurikuler 2:</label>
                    <input type="text" id="ekskul2" name="ekskul2" placeholder="Nama Ekstrakurikuler">
                    <select id="nilaiEkskul2" name="nilaiEkskul2">
                        <option value="">Pilih Nilai</option>
                        <option value="Baik">Baik</option>
                        <option value="Cukup">Cukup</option>
                        <option value="Kurang">Kurang</option>
                    </select>
                </div>
                <div class="ekstrakurikuler-item">
                    <label for="ekskul3">Ekstrakurikuler 3:</label>
                    <input type="text" id="ekskul3" name="ekskul3" placeholder="Nama Ekstrakurikuler">
                    <select id="nilaiEkskul3" name="nilaiEkskul3">
                        <option value="">Pilih Nilai</option>
                        <option value="Baik">Baik</option>
                        <option value="Cukup">Cukup</option>
                        <option value="Kurang">Kurang</option>
                    </select>
                </div>
            </div>
                <button type="button" onclick="tambahEkskul()">Tambah Ekstrakurikuler</button>
    
                <h2>Ketidakhadiran</h2>
                <label for="sakit">Sakit (hari):</label>
                <input type="number" id="sakit" name="sakit" min="0" required>
    
                <label for="izin">Izin (hari):</label>
                <input type="number" id="izin" name="izin" min="0" required>
    
                <label for="tanpaKeterangan">Tanpa Keterangan (hari):</label>
                <input type="number" id="tanpaKeterangan" name="tanpaKeterangan" min="0" required>
    
                <h2>Laporan Project Penguatan Profil Pelajar Pancasila</h2>
                <div class="profile-assessment">
                    <div class="assessment-item">
                        <label for="kemampuanKolaborasi">Kemampuan Kolaborasi:</label>
                        <select id="kemampuanKolaborasi" name="kemampuanKolaborasi" required>
                            <option value="">Pilih</option>
                            <option value="Mulai Berkembang">Mulai Berkembang</option>
                            <option value="Sedang Berkembang">Sedang Berkembang</option>
                            <option value="Berkembang Sesuai Harapan">Berkembang Sesuai Harapan</option>
                            <option value="Sangat Berkembang">Sangat Berkembang</option>
                        </select>
                    </div>
                    <div class="assessment-item">
                        <label for="bernalarKritis">Bernalar Kritis:</label>
                        <select id="bernalarKritis" name="bernalarKritis" required>
                            <option value="">Pilih</option>
                            <option value="Mulai Berkembang">Mulai Berkembang</option>
                            <option value="Sedang Berkembang">Sedang Berkembang</option>
                            <option value="Berkembang Sesuai Harapan">Berkembang Sesuai Harapan</option>
                            <option value="Sangat Berkembang">Sangat Berkembang</option>
                        </select>
                    </div>
                    <div class="assessment-item">
                        <label for="kreativitas">Kreativitas:</label>
                        <select id="kreativitas" name="kreativitas" required>
                            <option value="">Pilih</option>
                            <option value="Mulai Berkembang">Mulai Berkembang</option>
                            <option value="Sedang Berkembang">Sedang Berkembang</option>
                            <option value="Berkembang Sesuai Harapan">Berkembang Sesuai Harapan</option>
                            <option value="Sangat Berkembang">Sangat Berkembang</option>
                        </select>
                    </div>
                    <div class="assessment-item">
                        <label for="kemandirian">Kemandirian:</label>
                        <select id="kemandirian" name="kemandirian" required>
                            <option value="">Pilih</option>
                            <option value="Mulai Berkembang">Mulai Berkembang</option>
                            <option value="Sedang Berkembang">Sedang Berkembang</option>
                            <option value="Berkembang Sesuai Harapan">Berkembang Sesuai Harapan</option>
                            <option value="Sangat Berkembang">Sangat Berkembang</option>
                        </select>
                    </div>
                </div>

                <h2>Perkembangan Karakter</h2>
            <div class="character-development">
                <div class="development-item">
                    <label for="berimanBertakwa">Beriman dan Bertakwa:</label>
                    <select id="berimanBertakwa" name="berimanBertakwa" required>
                        <option value="">Pilih</option>
                        <option value="Mulai Berkembang">Mulai Berkembang</option>
                        <option value="Sedang Berkembang">Sedang Berkembang</option>
                        <option value="Berkembang Sesuai Harapan">Berkembang Sesuai Harapan</option>
                        <option value="Sangat Berkembang">Sangat Berkembang</option>
                    </select>
                </div>
                <div class="development-item">
                    <label for="berkebinekaanGlobal">Berkebinekaan Global:</label>
                    <select id="berkebinekaanGlobal" name="berkebinekaanGlobal" required>
                        <option value="">Pilih</option>
                        <option value="Mulai Berkembang">Mulai Berkembang</option>
                        <option value="Sedang Berkembang">Sedang Berkembang</option>
                        <option value="Berkembang Sesuai Harapan">Berkembang Sesuai Harapan</option>
                        <option value="Sangat Berkembang">Sangat Berkembang</option>
                    </select>
                </div>
                <div class="development-item">
                    <label for="bernalarKritisKarakter">Bernalar Kritis:</label>
                    <select id="bernalarKritisKarakter" name="bernalarKritisKarakter" required>
                        <option value="">Pilih</option>
                        <option value="Mulai Berkembang">Mulai Berkembang</option>
                        <option value="Sedang Berkembang">Sedang Berkembang</option>
                        <option value="Berkembang Sesuai Harapan">Berkembang Sesuai Harapan</option>
                        <option value="Sangat Berkembang">Sangat Berkembang</option>
                    </select>
                </div>
            </div>
    
                <label for="catatanProses">Catatan Proses:</label>
                <textarea id="catatanProses" name="catatanProses" required></textarea>
    
                <button type="submit">Simpan Raport</button>
        </form>

        <div id="crudOperations">
            <h2>Daftar Raport</h2>
            <table id="reportTable">
                <thead>
                    <tr>
                        <th>Nama Siswa</th>
                        <th>NIS</th>
                        <th>Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($existingReports as $report): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($report['name']); ?></td>
                            <td><?php echo htmlspecialchars($report['nis']); ?></td>
                            <td><?php echo htmlspecialchars($report['class']); ?></td>
                            <td>
                                <a href="edit_report.php?id=<?php echo $report['id']; ?>">Edit</a>
                                <a href="delete_report.php?id=<?php echo $report['id']; ?>" onclick="return confirm('Are you sure you want to delete this report?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <button id="addReportBtn" onclick="location.href='add_report.php';">Tambah Raport Baru</button>
        </div>
    </div>

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
            <a href="https://whatsapp.com" target="_blank" aria-label="Twitch"><i class="fab fa-twitch"></i></a>
        </div>
        <p>Copyright 2024, SMK Negeri 1 Katapang. Hak cipta dilindungi undang-undang.</p>
    </footer>

    <script src="../js/guru.js"></script>
</body>
</html>
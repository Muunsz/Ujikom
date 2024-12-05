<?php
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Koneksi ke database
$host = "localhost";
$username = "username_database_anda";
$password = "password_database_anda";
$database = "raport_online";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data siswa
$siswa_id = $_SESSION['user_id']; // Asumsikan user_id sama dengan siswa_id
$sql_siswa = "SELECT * FROM siswa WHERE id = $siswa_id";
$result_siswa = $conn->query($sql_siswa);
$siswa = $result_siswa->fetch_assoc();

// Ambil data orang tua
$sql_ortu = "SELECT * FROM orang_tua WHERE siswa_id = $siswa_id";
$result_ortu = $conn->query($sql_ortu);
$ortu = $result_ortu->fetch_assoc();

// Ambil data raport
$sql_raport = "SELECT * FROM raport WHERE siswa_id = $siswa_id ORDER BY tahun_pelajaran DESC, semester DESC LIMIT 1";
$result_raport = $conn->query($sql_raport);
$raport = $result_raport->fetch_assoc();

// Ambil data ekstrakurikuler
$sql_ekskul = "SELECT * FROM ekstrakulikuler WHERE raport_id = {$raport['id']}";
$result_ekskul = $conn->query($sql_ekskul);
$ekstrakurikuler = $result_ekskul->fetch_all(MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raport Online SMKN 1 Katapang</title>
    <link rel="stylesheet" href="../css/raport.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        h1, h2, h3 {
            color: #2c3e50;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        .section {
            margin-bottom: 30px;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 10px;
        }
        .info-item {
            margin-bottom: 10px;
        }
        .info-item strong {
            font-weight: bold;
        }
        @media print {
            body {
                font-size: 12pt;
            }
            .no-print {
                display: none;
            }
        }
    </style>
</head>
<body>
    <header class="no-print">
        <nav>
            <ul>
                <li><a href="dashboard.php">Beranda</a></li>
                <li><a href="raport.php" class="active">Raport</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <h1>Raport Online SMKN 1 Katapang</h1>
        
        <section class="section">
            <h2>Informasi Siswa</h2>
            <div class="info-grid">
                <div class="info-item"><strong>Nama:</strong> <?php echo htmlspecialchars($siswa['nama']); ?></div>
                <div class="info-item"><strong>NIS:</strong> <?php echo htmlspecialchars($siswa['nis']); ?></div>
                <div class="info-item"><strong>Tanggal Lahir:</strong> <?php echo htmlspecialchars($siswa['tanggal_lahir']); ?></div>
                <div class="info-item"><strong>Jenis Kelamin:</strong> <?php echo ($siswa['jenis_kelamin'] == 'L') ? 'Laki-laki' : 'Perempuan'; ?></div>
                <div class="info-item"><strong>Agama:</strong> <?php echo htmlspecialchars($siswa['agama']); ?></div>
                <div class="info-item"><strong>Anak ke-:</strong> <?php echo htmlspecialchars($siswa['anak_ke']); ?></div>
                <div class="info-item"><strong>Alamat:</strong> <?php echo htmlspecialchars($siswa['alamat']); ?></div>
                <div class="info-item"><strong>Nomor Telepon:</strong> <?php echo htmlspecialchars($siswa['no_telp']); ?></div>
                <div class="info-item"><strong>Asal Sekolah:</strong> <?php echo htmlspecialchars($siswa['asal_sekolah']); ?></div>
                <div class="info-item"><strong>Kelas:</strong> <?php echo htmlspecialchars($siswa['kelas']); ?></div>
                <div class="info-item"><strong>Tanggal Diterima:</strong> <?php echo htmlspecialchars($siswa['tanggal_diterima']); ?></div>
            </div>
        </section>

        <section class="section">
            <h2>Informasi Orang Tua/Wali</h2>
            <div class="info-grid">
                <div class="info-item"><strong>Nama Ayah:</strong> <?php echo htmlspecialchars($ortu['nama_ayah']); ?></div>
                <div class="info-item"><strong>Nama Ibu:</strong> <?php echo htmlspecialchars($ortu['nama_ibu']); ?></div>
                <div class="info-item"><strong>Alamat Orang Tua:</strong> <?php echo htmlspecialchars($ortu['alamat']); ?></div>
                <div class="info-item"><strong>Nomor Telepon Orang Tua:</strong> <?php echo htmlspecialchars($ortu['no_telp']); ?></div>
                <div class="info-item"><strong>Pekerjaan Ayah:</strong> <?php echo htmlspecialchars($ortu['pekerjaan_ayah']); ?></div>
                <div class="info-item"><strong>Pekerjaan Ibu:</strong> <?php echo htmlspecialchars($ortu['pekerjaan_ibu']); ?></div>
                <div class="info-item"><strong>Nama Wali:</strong> <?php echo htmlspecialchars($ortu['nama_wali']); ?></div>
                <div class="info-item"><strong>Alamat Wali:</strong> <?php echo htmlspecialchars($ortu['alamat_wali']); ?></div>
                <div class="info-item"><strong>Nomor Telepon Wali:</strong> <?php echo htmlspecialchars($ortu['no_telp_wali']); ?></div>
                <div class="info-item"><strong>Pekerjaan Wali:</strong> <?php echo htmlspecialchars($ortu['pekerjaan_wali']); ?></div>
            </div>
        </section>

        <section class="section">
            <h2>Nilai Akademik</h2>
            <p><strong>Tahun Pelajaran:</strong> <?php echo htmlspecialchars($raport['tahun_pelajaran']); ?></p>
            <p><strong>Semester:</strong> <?php echo htmlspecialchars($raport['semester']); ?></p>
            <table>
                <thead>
                    <tr>
                        <th>Mata Pelajaran</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <tr><td>Matematika</td><td><?php echo htmlspecialchars($raport['matematika']); ?></td></tr>
                    <tr><td>Bahasa Indonesia</td><td><?php echo htmlspecialchars($raport['bahasa_indonesia']); ?></td></tr>
                    <tr><td>Bahasa Inggris</td><td><?php echo htmlspecialchars($raport['bahasa_inggris']); ?></td></tr>
                    <tr><td>PPKn</td><td><?php echo htmlspecialchars($raport['ppkn']); ?></td></tr>
                    <tr><td>Pendidikan Agama</td><td><?php echo htmlspecialchars($raport['pendidikan_agama']); ?></td></tr>
                    <tr><td>Pendidikan Jasmani</td><td><?php echo htmlspecialchars($raport['pendidikan_jasmani']); ?></td></tr>
                    <tr><td>IPAS</td><td><?php echo htmlspecialchars($raport['ipas']); ?></td></tr>
                    <tr><td>Bahasa Sunda</td><td><?php echo htmlspecialchars($raport['bahasa_sunda']); ?></td></tr>
                    <tr><td>Seni Musik</td><td><?php echo htmlspecialchars($raport['seni_musik']); ?></td></tr>
                    <tr><td>Sejarah</td><td><?php echo htmlspecialchars($raport['sejarah']); ?></td></tr>
                    <tr><td>Bahasa Jepang</td><td><?php echo htmlspecialchars($raport['bahasa_jepang']); ?></td></tr>
                    <tr><td>Informatika</td><td><?php echo htmlspecialchars($raport['informatika']); ?></td></tr>
                    <tr><td>Mata Pelajaran Pilihan</td><td><?php echo htmlspecialchars($raport['mata_pelajaran_pilihan']); ?></td></tr>
                    <tr><td>PKK</td><td><?php echo htmlspecialchars($raport['pkk']); ?></td></tr>
                    <tr><td>Bimbingan Konseling</td><td><?php echo htmlspecialchars($raport['bimbingan_konseling']); ?></td></tr>
                    <tr><td>Produktif</td><td><?php echo htmlspecialchars($raport['produktif']); ?></td></tr>
                </tbody>
            </table>
        </section>

        <section class="section">
            <h2>Kegiatan Ekstrakurikuler</h2>
            <table>
                <thead>
                    <tr>
                        <th>Kegiatan</th>
                        <th>Nilai</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ekstrakurikuler as $ekskul): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($ekskul['nama']); ?></td>
                        <td><?php echo htmlspecialchars($ekskul['nilai']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <section class="section">
            <h2>Ketidakhadiran</h2>
            <div class="info-grid">
                <div class="info-item"><strong>Sakit:</strong> <?php echo htmlspecialchars($raport['sakit']); ?> hari</div>
                <div class="info-item"><strong>Izin:</strong> <?php echo htmlspecialchars($raport['izin']); ?> hari</div>
                <div class="info-item"><strong>Tanpa Keterangan:</strong> <?php echo htmlspecialchars($raport['tanpa_keterangan']); ?> hari</div>
            </div>
        </section>

        <section class="section">
            <h2>Profil Pelajar Pancasila</h2>
            <p><?php echo nl2br(htmlspecialchars($raport['kolom_pancasila'])); ?></p>
        </section>

        <section class="section">
            <h2>Perkembangan Karakter</h2>
            <p><?php echo nl2br(htmlspecialchars($raport['perkembangan_karakter'])); ?></p>
        </section>

        <section class="section">
            <h2>Catatan</h2>
            <p><?php echo nl2br(htmlspecialchars($raport['catatan'])); ?></p>
        </section>
    </main>

    <footer class="no-print">
        <p>&copy; <?php echo date("Y"); ?> SMKN 1 Katapang. All rights reserved.</p>
    </footer>
</body>
</html>
<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Database connection simulation
function db_connect() {
    // In a real application, you would connect to your database here
    // For this example, we'll return a dummy connection object
    return new stdClass();
}

// Fetch report card data
function get_report_card($user_id) {
    // In a real application, you would query your database here
    // For this example, we'll return dummy data
    return [
        'student_info' => [
            'name' => 'John Doe',
            'nisn' => '1234567890',
            'nis' => '54321',
            'birth_info' => 'Jakarta, 15 Januari 2005',
            'gender' => 'Laki-laki',
            'religion' => 'Islam',
            'family_status' => 'Anak Kandung',
            'child_number' => '2',
            'address' => 'Jl. Contoh No. 123, Katapang, Bandung',
            'phone_number' => '081234567890',
            'previous_school' => 'SMP Negeri 1 Katapang',
            'accepted_class' => 'X RPL 1',
            'acceptance_date' => '15 Juli 2020'
        ],
        'parent_info' => [
            'father_name' => 'Budi Doe',
            'mother_name' => 'Siti Doe',
            'parent_address' => 'Jl. Contoh No. 123, Katapang, Bandung',
            'parent_phone' => '081234567890',
            'father_occupation' => 'Wiraswasta',
            'mother_occupation' => 'Guru'
        ],
        'guardian_info' => [
            'guardian_name' => 'Ahmad Doe',
            'guardian_address' => 'Jl. Contoh No. 456, Katapang, Bandung',
            'guardian_phone' => '087654321098',
            'guardian_occupation' => 'Pegawai Swasta'
        ],
        'academic_grades' => [
            'Matematika' => ['nilai' => 85, 'catatan' => 'Baik dalam aljabar, perlu peningkatan dalam geometri'],
            'Bahasa Indonesia' => ['nilai' => 88, 'catatan' => 'Kemampuan menulis esai sangat baik'],
            'Bahasa Inggris' => ['nilai' => 90, 'catatan' => 'Pelafalan dan kosa kata memuaskan'],
            'Fisika' => ['nilai' => 82, 'catatan' => 'Pemahaman konsep dasar baik, perlu lebih banyak latihan soal'],
            'Kimia' => ['nilai' => 87, 'catatan' => 'Keterampilan laboratorium sangat baik'],
            'Biologi' => ['nilai' => 89, 'catatan' => 'Antusias dalam praktikum dan diskusi kelas'],
            'Sejarah' => ['nilai' => 86, 'catatan' => 'Analisis peristiwa sejarah cukup kritis'],
            'Geografi' => ['nilai' => 84, 'catatan' => 'Pemahaman peta dan analisis lingkungan baik'],
            'Ekonomi' => ['nilai' => 88, 'catatan' => 'Pemahaman konsep ekonomi mikro sangat baik'],
            'Sosiologi' => ['nilai' => 87, 'catatan' => 'Aktif dalam diskusi isu-isu sosial'],
            'Seni Budaya' => ['nilai' => 90, 'catatan' => 'Kreativitas dan keterampilan seni rupa menonjol'],
            'Pendidikan Jasmani' => ['nilai' => 88, 'catatan' => 'Aktif dalam kegiatan olahraga tim'],
            'Prakarya dan Kewirausahaan' => ['nilai' => 89, 'catatan' => 'Ide bisnis kreatif dan presentasi menarik'],
            'Bahasa Sunda' => ['nilai' => 85, 'catatan' => 'Kemampuan berbahasa Sunda meningkat'],
            'Pemrograman Dasar' => ['nilai' => 92, 'catatan' => 'Logika pemrograman sangat baik, proyek akhir memuaskan']
        ],
        'extracurricular' => [
            ['name' => 'Pramuka', 'description' => 'Aktif dan menunjukkan jiwa kepemimpinan'],
            ['name' => 'Robotika', 'description' => 'Berpartisipasi dalam kompetisi tingkat provinsi'],
            ['name' => 'English Club', 'description' => 'Kemampuan public speaking meningkat']
        ],
        'attendance' => [
            'sick' => 2,
            'permission' => 1,
            'absent' => 0
        ],
        'pancasila_profile' => [
            'collaboration' => 'Berkembang Sesuai Harapan',
            'critical_thinking' => 'Sangat Berkembang',
            'creativity' => 'Berkembang Sesuai Harapan',
            'independence' => 'Sedang Berkembang'
        ],
        'character_development' => [
            'faith' => 'Berkembang Sesuai Harapan',
            'global_diversity' => 'Sangat Berkembang',
            'critical_thinking' => 'Sangat Berkembang'
        ],
        'process_notes' => 'John menunjukkan perkembangan yang signifikan dalam bidang akademik dan non-akademik. Ia aktif berpartisipasi dalam kegiatan kelas dan ekstrakurikuler. Perlu peningkatan dalam manajemen waktu untuk hasil yang lebih optimal.'
    ];
}

$db = db_connect();
$report_card = get_report_card($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raport Online SMKN 1 Katapang</title>
    <link rel="stylesheet" href="../css/raport.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                <div class="info-item"><strong>Nama:</strong> <?php echo htmlspecialchars($report_card['student_info']['name']); ?></div>
                <div class="info-item"><strong>NISN:</strong> <?php echo htmlspecialchars($report_card['student_info']['nisn']); ?></div>
                <div class="info-item"><strong>NIS:</strong> <?php echo htmlspecialchars($report_card['student_info']['nis']); ?></div>
                <div class="info-item"><strong>Tempat, Tanggal Lahir:</strong> <?php echo htmlspecialchars($report_card['student_info']['birth_info']); ?></div>
                <div class="info-item"><strong>Jenis Kelamin:</strong> <?php echo htmlspecialchars($report_card['student_info']['gender']); ?></div>
                <div class="info-item"><strong>Agama:</strong> <?php echo htmlspecialchars($report_card['student_info']['religion']); ?></div>
                <div class="info-item"><strong>Status dalam Keluarga:</strong> <?php echo htmlspecialchars($report_card['student_info']['family_status']); ?></div>
                <div class="info-item"><strong>Anak ke-:</strong> <?php echo htmlspecialchars($report_card['student_info']['child_number']); ?></div>
                <div class="info-item"><strong>Alamat:</strong> <?php echo htmlspecialchars($report_card['student_info']['address']); ?></div>
                <div class="info-item"><strong>Nomor Telepon:</strong> <?php echo htmlspecialchars($report_card['student_info']['phone_number']); ?></div>
                <div class="info-item"><strong>Sekolah Asal:</strong> <?php echo htmlspecialchars($report_card['student_info']['previous_school']); ?></div>
                <div class="info-item"><strong>Diterima di Kelas:</strong> <?php echo htmlspecialchars($report_card['student_info']['accepted_class']); ?></div>
                <div class="info-item"><strong>Tanggal Penerimaan:</strong> <?php echo htmlspecialchars($report_card['student_info']['acceptance_date']); ?></div>
            </div>
        </section>

        <section class="section">
            <h2>Informasi Orang Tua</h2>
            <div class="info-grid">
                <div class="info-item"><strong>Nama Ayah:</strong> <?php echo htmlspecialchars($report_card['parent_info']['father_name']); ?></div>
                <div class="info-item"><strong>Nama Ibu:</strong> <?php echo htmlspecialchars($report_card['parent_info']['mother_name']); ?></div>
                <div class="info-item"><strong>Alamat Orang Tua:</strong> <?php echo htmlspecialchars($report_card['parent_info']['parent_address']); ?></div>
                <div class="info-item"><strong>Nomor Telepon Orang Tua:</strong> <?php echo htmlspecialchars($report_card['parent_info']['parent_phone']); ?></div>
                <div class="info-item"><strong>Pekerjaan Ayah:</strong> <?php echo htmlspecialchars($report_card['parent_info']['father_occupation']); ?></div>
                <div class="info-item"><strong>Pekerjaan Ibu:</strong> <?php echo htmlspecialchars($report_card['parent_info']['mother_occupation']); ?></div>
            </div>
        </section>

        <section class="section">
            <h2>Informasi Wali</h2>
            <div class="info-grid">
                <div class="info-item"><strong>Nama Wali:</strong> <?php echo htmlspecialchars($report_card['guardian_info']['guardian_name']); ?></div>
                <div class="info-item"><strong>Alamat Wali:</strong> <?php echo htmlspecialchars($report_card['guardian_info']['guardian_address']); ?></div>
                <div class="info-item"><strong>Nomor Telepon Wali:</strong> <?php echo htmlspecialchars($report_card['guardian_info']['guardian_phone']); ?></div>
                <div class="info-item"><strong>Pekerjaan Wali:</strong> <?php echo htmlspecialchars($report_card['guardian_info']['guardian_occupation']); ?></div>
            </div>
        </section>

        <section class="section">
            <h2>Nilai Akademik</h2>
            <table>
                <thead>
                    <tr>
                        <th>Mata Pelajaran</th>
                        <th>Nilai</th>
                        <th>Catatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($report_card['academic_grades'] as $subject => $grade): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($subject); ?></td>
                        <td><?php echo htmlspecialchars($grade['nilai']); ?></td>
                        <td><?php echo htmlspecialchars($grade['catatan']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <section class="section">
            <h2>Kegiatan Ekstrakurikuler</h2>
            <table>
                <thead>
                    <tr>
                        <th>Kegiatan</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($report_card['extracurricular'] as $activity): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($activity['name']); ?></td>
                        <td><?php echo htmlspecialchars($activity['description']); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>

        <section class="section">
            <h2>Ketidakhadiran</h2>
            <div class="info-grid">
                <div class="info-item"><strong>Sakit:</strong> <?php echo htmlspecialchars($report_card['attendance']['sick']); ?> hari</div>
                <div class="info-item"><strong>Izin:</strong> <?php echo htmlspecialchars($report_card['attendance']['permission']); ?> hari</div>
                <div class="info-item"><strong>Tanpa Keterangan:</strong> <?php echo htmlspecialchars($report_card['attendance']['absent']); ?> hari</div>
            </div>
        </section>

        <section class="section">
            <h2>Profil Pelajar Pancasila</h2>
            <div class="info-grid">
                <div class="info-item"><strong>Kemampuan Kolaborasi:</strong> <?php echo htmlspecialchars($report_card['pancasila_profile']['collaboration']); ?></div>
                <div class="info-item"><strong>Bernalar Kritis:</strong> <?php echo htmlspecialchars($report_card['pancasila_profile']['critical_thinking']); ?></div>
                <div class="info-item"><strong>Kreativitas:</strong> <?php echo htmlspecialchars($report_card['pancasila_profile']['creativity']); ?></div>
                <div class="info-item"><strong>Kemandirian:</strong> <?php echo htmlspecialchars($report_card['pancasila_profile']['independence']); ?></div>
            </div>
        </section>

        <section class="section">
            <h2>Perkembangan Karakter</h2>
            <div class="info-grid">
                <div class="info-item"><strong>Beriman dan Bertakwa:</strong> <?php echo htmlspecialchars($report_card['character_development']['faith']); ?></div>
                <div class="info-item"><strong>Berkebinekaan Global:</strong> <?php echo htmlspecialchars($report_card['character_development']['global_diversity']); ?></div>
                <div class="info-item"><strong>Bernalar Kritis:</strong> <?php echo htmlspecialchars($report_card['character_development']['critical_thinking']); ?></div>
            </div>
        </section>

        <section class="section">
            <h2>Catatan Proses</h2>
            <p><?php echo nl2br(htmlspecialchars($report_card['process_notes'])); ?></p>
        </section>
    </main>

    <footer class="no-print">
        <p>&copy; <?php echo date("Y"); ?> SMKN 1 Katapang. All rights reserved.</p>
    </footer>

    <script src="../js/PilihRaport.js"></script>
    <script src="../js/raport.js"></script>
</body>
</html>
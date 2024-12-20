<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    // Here you would typically validate the login credentials against a database
    // For this example, we'll use a simple check
    if ($nisn == "12345" && $nama == "John Doe" && $password == "password") {
        $_SESSION['user_id'] = $nisn;
        $_SESSION['username'] = $nama;
        header("Location: dashboard.php");
        exit();
    } else {
        $error = "Invalid login credentials";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <!-- Logo -->
        <img src="../poto/115-SMKN_1_KATAPANG.png" alt="SMKN 1 KATAPANG" style="width: 100px; margin-bottom: 20px;">
        <h1>AKUN SISWA</h1>
        <h4>Masukan Akun Yang Sudah Dibagikan Oleh Guru</h4>
        
        <!-- Form untuk login -->
        <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <input type="text" id="nisn" placeholder="NISN" name="nisn" required>
            <input type="text" id="nama" placeholder="Nama" name="nama" required>
            <input type="password" id="password" placeholder="Password" name="password" required>

            <!-- Checkbox Ingat Saya -->
            <div class="remember-me">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Ingat Saya</label>
            </div>

            <!-- Tombol Login -->
            <div class="options">
                <button class="login" type="submit">Masuk</button>
            </div>
        </form>

        <?php
        if (isset($error)) {
            echo "<p style='color: red;'>$error</p>";
        }
        ?>

        <!-- Lupa Password dan Kembali -->
        <div class="additional-options">
            <a href="login-guru.php">Login Guru</a>
            <a href="dashboard.php">Kembali</a>
        </div>

        <div class="powered">powered by <a href="https://www.instagram.com/smkn1katapang/"><span>SMKN 1 KATAPANG</span></a></div>
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
            <a href="https://whatsapp.com" target="_blank" aria-label="Whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
        <p>&copy; 2024, SMK Negeri 1 Katapang. Hak cipta dilindungi undang-undang.</p>
    </footer>

    <script src="../js/login.js"></script>
</body>
</html>
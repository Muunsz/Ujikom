<?php
// submit.php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input data
    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $pesan = filter_input(INPUT_POST, 'pesan', FILTER_SANITIZE_STRING);

    // Validate input
    if (empty($nama) || empty($email) || empty($pesan)) {
        echo "Error: Semua field harus diisi.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Error: Format email tidak valid.";
        exit;
    }

    // In a real-world scenario, you would typically:
    // 1. Save this data to a database
    // 2. Send an email notification
    // 3. Log the submission

    // For this example, we'll just echo a confirmation message
    echo "Terima kasih, $nama! Saran atau pengaduan Anda telah kami terima.";
    echo "<br><br>";
    echo "Detail yang Anda kirimkan:";
    echo "<br>";
    echo "Email: $email";
    echo "<br>";
    echo "Pesan: $pesan";
    echo "<br><br>";
    echo "<a href='saran dan pengaduan.html'>Kembali ke halaman saran dan pengaduan</a>";

} else {
    // If the form wasn't submitted, redirect back to the form page
    header("Location: saran dan pengaduan.html");
    exit;
}
?>
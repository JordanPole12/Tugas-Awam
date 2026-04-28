<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menangkap data dan membersihkannya agar aman dari serangan SQL Injection
    $nama  = mysqli_real_escape_string($conn, htmlspecialchars($_POST['nama']));
    $email = mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
    $pesan = mysqli_real_escape_string($conn, htmlspecialchars($_POST['pesan']));

    $sql = "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
                alert('Terima kasih! Pesan Anda telah tersimpan.');
                window.location.href='index.php';
              </script>";
    } else {
        echo "Gagal mengirim pesan: " . mysqli_error($conn);
    }
}
?>
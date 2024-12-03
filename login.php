<?php
// Konfigurasi database
$host = "localhost";
$user = "root";
$password = ""; // Sesuaikan dengan password database Anda
$dbname = "db_hb";

// Membuat koneksi ke database
$conn = new mysqli($host, $user, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data email dari tabel users dengan id = 1
$sql = "SELECT email FROM users WHERE id = 1";
$result = $conn->query($sql);

// Mengecek apakah data ditemukan
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $email = $row['email']; // Mengambil nilai email
} else {
    $email = "Data tidak ditemukan";
}

// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Value</title>
</head>
<body>
    <p id="tes"><?php echo $email; ?></p>
</body>
</html>

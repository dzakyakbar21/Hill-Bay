<?php
session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit;
}

// Ambil data pengguna dari sesi
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css"> <!-- Tambahkan CSS sesuai kebutuhan -->
</head>
<body>
    <header>
        <h1>Welcome to Your Profile, <?php echo htmlspecialchars($user['email']); ?>!</h1>
    </header>
    <main>
        <div class="profile-container">
            <h2>Profile Information</h2>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
        </div>
        <a href="index.html" class="logout-btn">Logout</a>
    </main>
</body>
</html>

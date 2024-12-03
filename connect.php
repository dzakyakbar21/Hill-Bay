<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_hb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (isset($_POST['action']) && $_POST['action'] === 'signup') {
        // Sign-Up Logic
        $sql_check = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql_check);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "<script>alert('User already exists. Please log in.'); window.location.href='signin.html';</script>";
            exit();
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql_insert = "INSERT INTO users (email, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql_insert);
        $stmt->bind_param("ss", $email, $hashed_password);

        if ($stmt->execute()) {
            echo "<script>alert('Sign-Up successful! Please log in.'); window.location.href='signin.html';</script>";
        } else {
            echo "<script>alert('Error during sign-up. Please try again.'); window.location.href='signup.html';</script>";
        }
    } elseif (isset($_POST['action']) && $_POST['action'] === 'signin') {
        // Login Logic
        $sql_check = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql_check);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                $_SESSION['email'] = $email;
                echo "<script>window.location.href='index.php';</script>";
            } else {
                echo "<script>alert('Incorrect password. Please try again.'); window.location.href='signin.html';</script>";
            }
        } else {
            echo "<script>alert('User not found. Please sign up.'); window.location.href='signin.html';</script>";
        }
    }
}

$conn->close();
?>
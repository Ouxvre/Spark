<?php
include "../../config/konfig.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $identifier = $_POST['identifier'];
    $password   = $_POST['password'];

    $result = $conn->query("SELECT * FROM users WHERE email='$identifier' OR phone='$identifier'");

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password_hash'])) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['username']    = $row['username'];
            $_SESSION['role']    = $row['role'];

            header("Location: ../../frontend/public/views/dashboard.php");
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Email/HP tidak ditemukan!";
    }
}
?>

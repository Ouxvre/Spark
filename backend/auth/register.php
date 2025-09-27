<?php
include "../../config/konfig.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name       = $_POST['name'];
    $identifier = $_POST['identifier'];
    $password   = $_POST['password'];

    if (filter_var($identifier, FILTER_VALIDATE_EMAIL)) {
        $email = $identifier;
        $phone = null;
    } else {
        $email = null;
        $phone = $identifier;
    }

    $check = $conn->query("SELECT * FROM users WHERE email='$email' OR phone='$phone'");
    if ($check->num_rows > 0) {
        echo "Email/HP sudah terdaftar!";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (name, email, phone, password_hash) 
                VALUES ('$name', " . ($email ? "'$email'" : "NULL") . ", " . ($phone ? "'$phone'" : "NULL") . ", '$hash')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../../frontend/public/views/login.php?registered=success");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>

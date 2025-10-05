<?php
session_start();
include(__DIR__ . '/../../config/konfig.php');
include(__DIR__ . '/../../backend/include/check_login.php');

$userId = $_SESSION['user_id'] ?? null;
if (!$userId) {
    http_response_code(403);
    die('Unauthorized');
}

// Folder tempat avatar disimpan (✅ benar mengarah ke frontend/src/assets/img/uploads/avatars)
$uploadDir = __DIR__ . '/../../frontend/src/assets/img/uploads/avatars/';

// Pastikan folder ada
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Ambil data lama user (untuk hapus avatar lama)
$stmt = $conn->prepare("SELECT username, bio, avatar_url FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();
$current = $result->fetch_assoc();
$stmt->close();

$oldAvatar = $current['avatar_url'] ?? 'default.jpeg';
$newAvatar = $oldAvatar;

// Ambil data baru dari form
$newUsername = trim($_POST['username'] ?? '');
$newBio = trim($_POST['aboutMe'] ?? '');
$removeAvatar = isset($_POST['removeAvatar']) && $_POST['removeAvatar'] === '1';

// ✅ Jika user klik Remove avatar
if ($removeAvatar) {
    if ($oldAvatar !== 'default.jpeg' && file_exists($uploadDir . $oldAvatar)) {
        unlink($uploadDir . $oldAvatar);
    }
    $newAvatar = 'default.jpeg';
}

// ✅ Jika user upload avatar baru
if (isset($_FILES['avatar']) && $_FILES['avatar']['error'] === UPLOAD_ERR_OK) {
    $file = $_FILES['avatar'];
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    if (in_array($ext, $allowed)) {
        $newName = 'avatar_' . $userId . '_' . time() . '.' . $ext;
        $target = $uploadDir . $newName;

        if (move_uploaded_file($file['tmp_name'], $target)) {
            // Hapus avatar lama jika bukan default
            if ($oldAvatar !== 'default.jpeg' && file_exists($uploadDir . $oldAvatar)) {
                unlink($uploadDir . $oldAvatar);
            }
            $newAvatar = $newName;
        } else {
            die("❌ Gagal upload file ke: $target (error code: " . $file['error'] . ")");
        }
    } else {
        die("❌ Format file tidak diizinkan. Hanya jpg, jpeg, png, gif, webp.");
    }
}

// ✅ Update data ke database
$stmt = $conn->prepare("UPDATE users SET username = ?, bio = ?, avatar_url = ?, updated_at = NOW() WHERE id = ?");
$stmt->bind_param("sssi", $newUsername, $newBio, $newAvatar, $userId);

if ($stmt->execute()) {
    $stmt->close();
    header('Location: ../../frontend/public/views/setting.php?success=1');
    exit;
} else {
    die("❌ Gagal update profil: " . $stmt->error);
}
?>

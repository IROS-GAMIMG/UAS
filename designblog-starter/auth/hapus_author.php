<?php
// Menghubungkan ke database
include '../router/db.php';

// Memeriksa apakah ID dikirim
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Query untuk menghapus data author
    $sql = "DELETE FROM author WHERE ID_AUTHOR = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Jika berhasil, arahkan kembali ke halaman daftar author dengan pesan sukses
        header("Location: ../admin/author.php?delete=success");
    } else {
        echo "Error: " . $conn->error;
    }

    $stmt->close();
} else {
    echo "ID tidak valid.";
}

// Menutup koneksi database
$conn->close();
?>

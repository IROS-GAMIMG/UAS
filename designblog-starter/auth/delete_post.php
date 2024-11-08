<?php
// Menghubungkan ke database
include '../router/db.php';

// Memeriksa apakah parameter 'id' ada dalam URL
if (isset($_GET['id'])) {
    // Mengambil ID dari URL
    $id_post = $_GET['id'];

    // Menyiapkan query untuk menghapus postingan berdasarkan ID
    $sql = "DELETE FROM postingan WHERE ID_POST = ?";

    // Menyiapkan statement
    $stmt = $conn->prepare($sql);

    // Bind parameter untuk menghindari SQL Injection
    $stmt->bind_param("i", $id_post);

    // Menjalankan query
    if ($stmt->execute()) {
        // Redirect kembali ke halaman daftar postingan setelah berhasil menghapus
        header("Location: ../admin/post.php?delete=success");
    } else {
        echo "Error: " . $stmt->error;
    }

    // Menutup statement
    $stmt->close();
} else {
    echo "ID tidak ditemukan.";
}

// Menutup koneksi
$conn->close();
?>

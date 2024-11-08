<?php
// Menghubungkan ke database
include '../router/db.php';

// Memeriksa apakah ID_AUTHOR ada dalam parameter URL
if (isset($_GET['id'])) {
    // Menyimpan ID_AUTHOR dari URL
    $id_author = $_GET['id'];

    // Query untuk menghapus author berdasarkan ID_AUTHOR
    $sql = "DELETE FROM author WHERE ID_AUTHOR = ?";

    // Persiapkan statement
    $stmt = $conn->prepare($sql);

    // Bind parameter untuk statement
    $stmt->bind_param("i", $id_author);  // 'i' berarti integer

    // Eksekusi query
    if ($stmt->execute()) {
        // Jika berhasil, redirect ke halaman daftar author
        header("Location: ../admin/author.php?success=true");
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Gagal menghapus author: " . $conn->error;
    }

    // Menutup statement
    $stmt->close();
} else {
    echo "ID Author tidak ditemukan.";
}

// Menutup koneksi database
$conn->close();
?>

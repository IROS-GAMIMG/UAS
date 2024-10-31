<?php
// Menghubungkan ke database
include 'db.php';

// Memeriksa apakah form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];

    // Mengupdate data author di database
    $sql = "UPDATE author SET NAMA_AUTHOR = ? WHERE ID_AUTHOR = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $nama, $id);

    if ($stmt->execute()) {
        // Redirect ke halaman daftar author setelah berhasil dengan pesan alert
        header("Location: ../auth/author.php?success=true");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Menutup db
    $stmt->close();
}

// Menutup db
$conn->close();
?>

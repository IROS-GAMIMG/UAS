<?php
include 'router/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT p.ID_POST, p.JUDUL, p.ISI, p.GAMBAR, p.NAMA_AUTHOR, p.BIDANG, p.TANGGAL, p.DILIHAT
            FROM postingan p
            JOIN author a ON p.ID_AUTHOR = a.ID_AUTHOR
            WHERE p.ID_POST = ?";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<h1>" . htmlspecialchars($row['JUDUL']) . "</h1>";
            echo "<p>" . nl2br(htmlspecialchars($row['ISI'])) . "</p>";
        } else {
            echo "Artikel tidak ditemukan.";
        }
    }
}
?>

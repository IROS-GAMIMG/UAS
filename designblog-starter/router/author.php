<?php
// Menghubungkan ke database
include 'db.php';

// Mengambil data dari tabel author
$sql = "SELECT * FROM author";
$result = $conn->query($sql);

// Memeriksa apakah ada hasil
if ($result->num_rows > 0) {
    // Menampilkan data dari setiap baris
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['ID_AUTHOR'] . "</td>";
        echo "<td>" . $row['NAMA_AUTHOR'] . "</td>";
        echo '<td>
                <a href="edit_author.php?id=' . $row['ID_AUTHOR'] . '" class="btn-edit">Edit</a>
                <a href="#" class="btn-delete" onclick="confirmDelete(' . $row['ID_AUTHOR'] . ')">Hapus</a>
              </td>';
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>Tidak ada data</td></tr>";
}

// Menutup db
$conn->close();
?>

<script>
    function confirmDelete(id) {
        // Menampilkan konfirmasi sebelum menghapus
        var confirmDelete = confirm("Apakah Anda yakin ingin menghapus author ini?");
        if (confirmDelete) {
            // Jika user mengonfirmasi, redirect ke halaman delete_author.php untuk menghapus author
            window.location.href = "../auth/delete_author.php?id=" + id;
        }
    }
</script>

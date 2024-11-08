<?php
include '../router/db.php';
$sql = "SELECT ID_AUTHOR, NAMA_AUTHOR FROM author";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="edit.css">
    <title>Tambah Postingan</title>
</head>

<body>
    <div class="container">
        <h1>Tambah Postingan</h1>
        <form action="simpan_postingan.php" method="post" enctype="multipart/form-data">
            <!-- Category Selection -->
            <label for="kategori">Kategori:</label>
            <select id="kategori" name="kategori" required>
                <option value="lifestyle">Lifestyle</option>
                <option value="technology">Technology</option>
            </select><br>

            <!-- Title Input -->
            <label for="judul">Judul:</label>
            <input type="text" id="judul" name="judul" required><br>

            <!-- Image Upload -->
            <label for="gambar">Gambar:</label>
            <input type="file" id="gambar" name="gambar" accept=".png, .jpg, .jpeg, .gif" required><br>

            <!-- Content Textarea -->
            <label for="isi">Isi:</label>
            <textarea id="isi" name="isi" required></textarea><br>

            <!-- Author Selection -->
            <label for="id_author">Author:</label>
            <select id="id_author" name="id_author" required>
                <?php
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['ID_AUTHOR'] . "'>" . $row['NAMA_AUTHOR'] . "</option>";
                }
                $conn->close();
                ?>
            </select><br>

            <!-- Field Input -->
            <label for="bidang">Bidang:</label>
            <input type="text" id="bidang" name="bidang" required><br>

            <!-- Date Input -->
            <label for="tanggal">Tanggal:</label>
            <input type="date" id="tanggal" name="tanggal" required><br>

            <!-- Submit Button -->
            <button type="submit">Simpan Postingan</button>
        </form>
    </div>
</body>

</html>

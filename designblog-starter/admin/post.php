<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/post.css">
    <title>Daftar Postingan</title>
</head>

<body>

    <nav class="navbar">
        <h2>Admin</h2>
        <ul>
            <li><a href="author.php">Daftar Author</a></li>
            <li><a href="post.php">Daftar Postingan</a></li>
            <li><a href="kontak.php">Kotak Pesan</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="content">
            <h1>Postingan</h1>

            <!-- Button to go back to index.php -->
            <a href="../index.php" class="btn-kembali">Kembali</a>

            <!-- Tambahkan tombol untuk menambah postingan -->
            <a href="../auth/tambah_postingan.php" class="btn-tambah">+ Tambah Postingan</a>

            <table>
                <thead>
                    <tr>
                        <th>ID Post</th>
                        <th>Kategori</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Isi</th>
                        <th>Pembuat</th>
                        <th>Bidang</th>
                        <th>Tanggal</th>
                        <th>Dilihat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include '../router/tampil_post.php'; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function editPost(id) {
            alert('Edit post dengan ID: ' + id);
        }

        function deletePost(id) {
            if (confirm('Apakah Anda yakin ingin menghapus post dengan ID: ' + id + '?')) {
                alert('Post dengan ID ' + id + ' telah dihapus.');
            }
        }
    </script>

</body>

</html>

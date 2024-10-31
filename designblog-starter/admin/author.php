<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/post.css">
    <title>Daftar Author</title>
</head>

<body>

    <nav class="navbar">
        <h2>admin</h2>
        <ul>
            <li><a href="author.php">Daftar Author</a></li>
            <li><a href="post.php">Daftar Postingan</a></li>
            <li><a href="kontak.php">Kotak Pesan</a></li>
        </ul>
    </nav>

    <div class="container">
        <div class="content">
            <h1>DAFTAR AUTHOR</h1>

            <!-- Form to add a new author -->
            <form action="../auth/tambah_author.html" method="POST" class="form-author">
                <label for="nama_author">Nama Author:</label>
                <input type="text" id="nama_author" name="nama_author" required>
                <button type="submit" class="btn-tambah">Tambahkan Author</button>
            </form>

            <!-- Success alert -->
            <?php if (isset($_GET['success']) && $_GET['success'] == 'true'): ?>
                <script>
                    alert("Data berhasil dimasukkan");
                </script>
            <?php endif; ?>

            <table>
                <thead>
                    <tr>
                        <th>ID Author</th>
                        <th>Nama Author</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include '../router/author.php'; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>

<?php
// Connect to the database
include '../router/db.php';

// Check if form is submitted via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Check if 'nama_author' exists in POST data
    $nama_author = isset($_POST['nama_author']) ? trim($_POST['nama_author']) : null;

    // Ensure $nama_author is not empty
    if (!empty($nama_author)) {
        // Prepare an SQL query to insert a new author
        $sql = "INSERT INTO author (NAMA_AUTHOR) VALUES (?)";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            // Bind parameters and execute statement
            $stmt->bind_param("s", $nama_author);
            if ($stmt->execute()) {
                // Redirect with success message
                header("Location: ../admin/author.php?success=true");
                exit;
            } else {
                echo "Error executing statement: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Error preparing statement: " . $conn->error;
        }
    } else {
        echo "Nama Author tidak boleh kosong.";
    }
    // Close database connection
    $conn->close();
}
?>

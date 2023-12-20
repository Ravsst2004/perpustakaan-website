<?php
require_once '../../Controller/KategoriController.php';
// require_once '../../Model/db_connection.php';

if (isset($_POST['submit'])) {
    if ( add_kategori($_POST) > 0 ) {
        echo "
            <script>
                alert('Data submitted');
                document.location.href = '../index.php';
            </script>
        ";
    } else {
        "
            <script>
                alert('Data not submitted');
            </script>
        ";
    }
}

?>


<?php
require_once '../template/header.php';
?>

<h1>Tambah Kategori</h1>

<form action="" method="POST">
    <label for="kategori">Nama Kategori</label>
    <input type="text" name="kategori" id="kategori" required>

    <button type="submit" name="submit">SAVE</button>
</form>

<?php
require_once '../template/footer.php';
?>
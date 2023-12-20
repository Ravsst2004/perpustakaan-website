<?php
require_once '../../Controller/PenerbitController.php';

if (isset($_POST['submit'])) {
    if ( add_penerbit($_POST) > 0 ) {
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
    <label for="penerbit">Nama Penerbit</label>
    <input type="text" name="penerbit" id="penerbit" required>

   <div>
       <label>Select your city:</label><br>
     
       <input type="radio" id="city1" name="kota" value="New York">
       <label for="kota1">New York</label><br>
     
       <input type="radio" id="kota2" name="kota" value="Los Angeles">
       <label for="kota2">Los Angeles</label><br>
     
       <input type="radio" id="kota3" name="kota" value="Chicago">
       <label for="kota3">Chicago</label><br>
   </div>


    <label for="contact_name">Nama Kontak</label>
    <input type="text" name="contact_name" id="contact_name" required>

    <label for="contact_phone">Nomor Kontak</label>
    <input type="text" name="contact_phone" id="contact_phone" required>

    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" id="alamat" required>

    <label for="email">Email</label>
    <input type="text" name="email" id="email" required>

    <button type="submit" name="submit">SAVE</button>
</form>

<?php
require_once '../template/footer.php';
?>
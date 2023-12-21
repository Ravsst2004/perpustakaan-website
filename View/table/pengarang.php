<?php
require_once '../Controller/PengarangController.php';

$pengarangs = show_pengarang("SELECT * FROM t_pengarang");
?>



<?php
require_once 'template/header.php'
?>

<h1>Tabel Pengarang</h1>

<div class="table-responsive mt-3">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No. Hp</th>
                <th>Status</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pengarangs as $pengarang) : ?>
                <tr>
                    <td><?= $pengarang["id_pengarang"] ?></td>
                    <td><?= $pengarang["nama"] ?></td>
                    <td><?= $pengarang["alamat"] ?></td>
                    <td><?= $pengarang["email"] ?></td>
                    <td><?= $pengarang["hp"] ?></td>
                    <td><?= $pengarang["status"] ?></td>
                    <td><?= $pengarang["foto"] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php
require_once 'template/footer.php'
?>
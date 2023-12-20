<?php
require_once '../Controller/BukuController.php';

$bukus = show_buku("SELECT * FROM t_buku
                    INNER JOIN t_judul ON t_buku.id_judul = t_judul.id_judul
                    INNER JOIN t_user ON t_buku.id_user = t_user.id_user
                    ");
?>



<?php
require_once 'template/header.php'
?>

<h1>Tabel Buku</h1>

<div class="table-responsive mt-3">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>User</th>
                <th>Tgl Input</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bukus as $buku) : ?>
                <tr>
                    <td><?= $buku["id_buku"] ?></td>
                    <td><?= $buku["judul"] ?></td>
                    <td><?= $buku["nama"] ?></td>
                    <td><?= $buku["tgl_input"] ?></td>
                    <td><?= $buku["status"] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php
require_once 'template/footer.php'
?>
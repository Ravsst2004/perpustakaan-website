<?php
require_once '../Controller/KategoriController.php';

$kategories = show_kategori("SELECT * FROM t_kategori");
?>



<?php
require_once 'template/header.php'
?>

<h1>Tabel Kategori</h1>

<div class="table-responsive mt-3">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Kategori</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kategories as $kategori) : ?>
                <tr>
                    <td><?= $kategori["id_kategori"] ?></td>
                    <td><?= $kategori["kategori"] ?></td>
                    <td><?= $kategori["status"] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php
require_once 'template/footer.php'
?>
<?php
require_once '../Controller/JudulController.php';
require_once '../Controller/KategoriController.php';

$juduls = show_judul("SELECT * FROM t_judul 
                            INNER JOIN t_kategori ON t_judul.id_kategori = t_kategori.id_kategori
                            INNER JOIN t_penerbit ON t_judul.id_penerbit = t_penerbit.id_penerbit
                        ");
?>



<?php
require_once 'template/header.php'
?>

<h1>Tabel Judul</h1>

<div class="table-responsive mt-3">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Penerbit</th>
            </tr>
        </thead>
        <tbody>
            <?php $i =  1; ?>
            <?php foreach ($juduls as $judul) : ?>
                <tr>
                    <td><?= $judul["id_judul"] ?></td>
                    <td><?= $judul["judul"] ?></td>
                    <td><?= $judul["kategori"] ?></td>
                    <td><?= $judul["status"] ?></td>
                    <td><?= $judul["nama"] ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php
require_once 'template/footer.php'
?>
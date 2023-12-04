<?php
require_once '../Controller/DetilPengarangController.php';

$detil_pengarangs = show_detil_pengarang("SELECT * FROM t_detil_pengarang
                    INNER JOIN t_judul ON t_detil_pengarang.id_judul = t_judul.id_judul
                    INNER JOIN t_pengarang ON t_detil_pengarang.id_pengarang = t_pengarang.id_pengarang
                    ");
?>



<?php
require_once 'template/header.php'
?>

<h1>Tabel Detil Pengarang</h1>

<div class="table-responsive mt-3">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Tgl Input</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i =  1; ?>
            <?php foreach ($detil_pengarangs as $detil_pengarang) : ?>
                <tr>
                    <td><?= $detil_pengarang["judul"] ?></td>
                    <td><?= $detil_pengarang["nama"] ?></td>
                    <td><?= $detil_pengarang["tgl_input"] ?></td>
                    <td><?= $detil_pengarang["status"] ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php
require_once 'template/footer.php'
?>
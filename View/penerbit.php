<?php
require_once '../Controller/PenerbitController.php';

$penerbits = show_penerbit("SELECT * FROM t_penerbit");
?>



<?php
require_once 'template/header.php'
?>

<h1>Tabel Penerbit</h1>

<div class="table-responsive mt-3">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Kota</th>
                <th>Nama Contact</th>
                <th>Phone</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $i =  1; ?>
            <?php foreach ($penerbits as $penerbit) : ?>
                <tr>
                    <td><?= $penerbit["id_penerbit"] ?></td>
                    <td><?= $penerbit["nama"] ?></td>
                    <td><?= $penerbit["kota"] ?></td>
                    <td><?= $penerbit["contact_name"] ?></td>
                    <td><?= $penerbit["contact_phone"] ?></td>
                    <td><?= $penerbit["alamat"] ?></td>
                    <td><?= $penerbit["email"] ?></td>
                    <td><?= $penerbit["status"] ?></td>
                </tr>
                <?php $i++ ?>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?php
require_once 'template/footer.php'
?>
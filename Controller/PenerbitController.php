<?php 
    require_once '../Model/db_connection.php';

    function show_penerbit($query) {
        global $conn;
        $result = mysqli_query($conn, $query);

        if ($result) {
            $juduls = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($juduls as &$judul) {
                if ($judul['status'] == 0) {
                    $judul['status'] = "Tidak Tersedia";
                } else {
                    $judul['status'] = "Tersedia";
                }
            }

            return $juduls;
        }

        return[];
    }

?>
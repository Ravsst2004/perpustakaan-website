<?php 
    require_once '../Model/db_connection.php';

    function show_buku($query) {
        global $conn;
        $result = mysqli_query($conn, $query);

        if ($result) {
            $bukus = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($bukus as &$buku) {
                if ($buku['status'] == 0) {
                    $buku['status'] = "Tidak Tersedia";
                } else {
                    $buku['status'] = "Tersedia";
                }
            }

            return $bukus;
        }

        return[];
    }

?>
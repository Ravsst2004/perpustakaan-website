<?php 
    require_once '../Model/db_connection.php';

    function show_pengarang($query) {
        global $conn;
        $result = mysqli_query($conn, $query);

        if ($result) {
            $pengarangs = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($pengarangs as &$pengarang) {
                if ($pengarang['status'] == 0) {
                    $pengarang['status'] = "Tidak Tersedia";
                    $pengarang['photo'] = "Tidak ada photo";
                } else {
                    $pengarang['status'] = "Tersedia";
                }

            }

            return $pengarangs;
        }

        return[];
    }

?>
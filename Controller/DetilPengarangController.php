<?php 
    require_once '../Model/db_connection.php';

    function show_detil_pengarang($query) {
        global $conn;
        $result = mysqli_query($conn, $query);

        if ($result) {
            $detil_pengarangs = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($detil_pengarangs as &$detil_pengarang) {
                if ($detil_pengarang['status'] == 0) {
                    $detil_pengarang['status'] = "Tidak Tersedia";
                } else {
                    $detil_pengarang['status'] = "Tersedia";
                }
            }

            return $detil_pengarangs;
        }

        return[];
    }

?>
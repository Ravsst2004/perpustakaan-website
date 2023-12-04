<?php 
    require_once '../Model/db_connection.php';

    function show_penerbit($query) {
        global $conn;
        $result = mysqli_query($conn, $query);

        if ($result) {
            $penerbits = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($penerbits as &$penerbit) {
                if ($penerbit['status'] == 0) {
                    $penerbit['status'] = "Tidak Tersedia";
                } else {
                    $penerbit['status'] = "Tersedia";
                }
            }

            return $penerbits;
        }

        return[];
    }

?>
<?php 
    require_once '../Model/db_connection.php';

    function show_kategori($query) {
        global $conn;
        $result = mysqli_query($conn, $query);

        if ($result) {
            $kategories = mysqli_fetch_all($result, MYSQLI_ASSOC);

            foreach ($kategories as &$kategori) {
                if ($kategori['status'] == 0) {
                    $kategori['status'] = "Tidak Tersedia";
                } else {
                    $kategori['status'] = "Tersedia";
                }
            }

            return $kategories;
        }

        return[];
    }

?>
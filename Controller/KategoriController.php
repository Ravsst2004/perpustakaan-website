<?php 
    require_once(__DIR__ . '/../Model/db_connection.php');


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

    function add_kategori($query) {
        global $conn;

        $nama_kategori = htmlspecialchars($query['kategori']);
        $status = 1;

        $add_kategori = "INSERT INTO t_kategori VALUES ('', '$nama_kategori', '$status') ";
        mysqli_query($conn, $add_kategori);

        return mysqli_affected_rows($conn);
    }

?>
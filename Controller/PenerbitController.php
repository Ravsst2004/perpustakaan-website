<?php 
    require_once(__DIR__ . '/../Model/db_connection.php');

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

    
    function add_penerbit($query) {
        global $conn;

        $nama_penerbit = htmlspecialchars($query['penerbit']);
        $kota = htmlspecialchars($query['kota']);
        $contact_name = htmlspecialchars($query['contact_name']);
        $contact_phone = htmlspecialchars($query['kota']);
        $alamat = htmlspecialchars($query['alamat']);
        $email = htmlspecialchars($query['email']);
        $status = 1;

        $add_penerbit = "INSERT INTO t_penerbit VALUES ('', '$nama_penerbit', '$kota', '$contact_name', '$contact_phone', '$alamat', '$email', '$status') ";
        mysqli_query($conn, $add_penerbit);

        return mysqli_affected_rows($conn);
    }


?>
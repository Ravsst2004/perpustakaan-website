<?php 
    require_once '../Model/db_connection.php';

    function show_kategori($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

?>
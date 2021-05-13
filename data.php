<?php
    function getConnection( $servername = "localhost",
                            $username = "root",
                            $password = "code",
                            $dbname = "dbHotel") {
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn && $conn->connect_error) {
            echo "Connection failed: " . $conn->connect_error;
        }
        return $conn;
    }
    function closeConn($conn, $stmt) {
        $stmt -> close();
        $conn -> close();
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista camere</title>
</head>

<style>
    body{
        background-color: darkorange;
       
    }

    h4{
        font-size: 32px;
    }

    h4{
        font-size: 27px;
    }
    
    h4, h5{
        text-align: center;
    }

   



</style>
<body>
    <div class="container">
<?php
require_once "data.php";
                   

                    $conn = getConnection();
                    $id = $_GET['id'];
                    $query = 'SELECT room_number, id, floor, beds  FROM stanze WHERE id = ' . $id;
                    $stmt = $conn -> prepare($query);
                    $stmt -> bind_result($roomNumber, $id, $floor, $beds);
                    $stmt -> execute();

                    $stmt -> fetch();
                   
                   
                   
                    echo '<h4>La stanza selezionata:'. $roomNumber . ' </h4>' .' ' .
                        ' <h5>numero identificativo:' .$id . ' </h5>'. ' ' .
                        '<h4>al piano:'. $floor . ' </h4>' .' ' .
                        '<h4>numero posti letto:'. $beds . ' </h4>' ;
                    closeConn($conn, $stmt);
                ?>

    </div>

</body>

</html>

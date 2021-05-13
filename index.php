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

    .container{
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    h2{
        text-align: center;
    }

    ul{
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        list-style-type: none;
    }



</style>
<body>
    
        <h2>Elenco di tutte le camere dell'Hotel</h2>

        <div class="container">


            <?php
            require_once "data.php";

   


            $servername = "localhost";
            $username = "root";
            $password = "code";
            $dbname = "dbHotel";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn && $conn->connect_error) {
                echo "Connection failed: " . $conn->connect_error;
            }
            $sql = "SELECT * FROM stanze ORDER BY stanze.room_number";
            $result = $conn -> query($sql);
            if ($result && $result -> num_rows > 0) {

             ?>

                <ul>
                    
            <?php
                        while($row = $result -> fetch_assoc()) {
                            echo '<li>'. '<span> Stanza numero </span>'. 
                            '<a href="./stanze.php/?id=' . $row['id'] . '">'. 
                              $row['room_number'] . ' ' . '</a>' . '</li>';
                        }
            ?>
                   
                </ul>

            <?php
                } else {
                    echo 'error';
                }
                $conn->close();
            ?>

    </div>
</body>
</html>







               
               
               
              
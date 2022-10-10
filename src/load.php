<?php


if (true) {
    $servername="localhost";
    $username="root";
    $password="root";
    $dbname="skct_Sql";

    $mysqli = new mysqli($servername, $username, $password, $dbname);

    if(true) {
        $sql = "INSERT INTO `skct_sql` (`name`)
        VALUES ('nithish')";
        if ($mysqli->query($sql) === TRUE) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
          }
          
          $conn->close();
    }
}
else{
    echo "connection not established";
    die();
}

?>
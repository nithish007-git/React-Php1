<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

   
    if (true) {
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="skct_Sql";
    
        $mysqli = new mysqli($servername, $username, $password, $dbname);
    print("test case passed");
        $rectest=$_POST['text'];
        print($rectest);
        if(true) {
            // $sql = "INSERT INTO skct_sql (name)
            // VALUES ($rectest)";
            $sql = "INSERT INTO skct_sql (name)
            VALUES ('$rectest')";
            if ($mysqli->query($sql) === TRUE) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
              }
            
        }
    }
    else{
        echo "connection not established";
        die();
    }
    
    
    ?>
</body>
</html>